
<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "carrental";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if ($_GET['id']) {
   $id = $_GET['id'];

   $sql = "SELECT * FROM cardetails WHERE id = {$id}" ;
   $result = $conn->query($sql);

   $data = $result->fetch_assoc();

   $conn->close();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>EDIT CAR</title>
  <base href="/">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="favicon.ico">
  <link rel="stylesheet" href="./day02/style/styles.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;700&display=swap" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
<div id="contact" class="container-fluid">
    <div class="row">
      <img src="<?php echo $data['img'] ?>">

      <div class="col-xl-6 p-0 col-md-6 col-sm-12">
      <form action="day02/admin/data_insert.php" method="post">
          <h1>EDIT <strong><?php echo $data['brand'] ?></strong> <?php echo $data['model'] ?></h1>
          <label>
            CHANGE IMG :<br>
            <input type="text" name="img" value="<?php echo $data['img'] ?>">
            <input type="hidden" name= "id" value="<?php echo $data['id'] ?>" />
          </label>
          <label>
            CHANGE BRAND:<br>
            <input type="text" name="brand" value="<?php echo $data['brand'] ?>">
          </label>
          <label>
            CHANGE MODEL:<br>
            <input type="text" name="model" value="<?php echo $data['model'] ?>">
          </label>
          <br>
          <label>
            CHANGE PRICE:<br>
            <input type="number" name="price" value="<?php echo $data['price'] ?>">
          </label>
          <label>
            CHANGE LOCATION:<br>
            <select name="parked" id="parked" value="<?php echo $data['location'] ?>">
                <option value="Vienna Millennium Tower">Vienna Millennium Tower</option>
                <option value="Vienna Westbahnhof">Vienna Westbahnhof</option>
                <option value="Vienna Airport">Vienna Airport</option>
                <option value="Vienna Hauptbahnhof">Vienna Hauptbahnhof</option>
                <option value="Vienna Prater">Vienna Prater</option>
            </select>
          </label>
          <br>
          <label>
            CHANGE AVAILABILITY:<br>
            <select name="available" id="available" value="<?php echo $data['available'] ?>">
                <option value="1">available</option>
                <option value="0">not available</option>
            </select>
          </label>
          <label>
            CHANGE TYPE:<br>
            <select name="type" id="type">
                <option value="1">CAR</option>
                <option value="2">SUV</option>
                <option value="3">BIKE</option>
            </select>
          </label>
          <br>
          <input type="submit" class="btn" value="UPDATE">
  
        </form>
      </div>
    </div>
  </div>

</body>
</html>

<?php
}
?>