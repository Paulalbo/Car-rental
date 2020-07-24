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
  <title>ADD CAR</title>
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
        <form class="deleteform" action="day02/admin/deletingdata.php" method="post">
          <h1>ARE YOU SURE YOU WANT TO DELETE THIS VEHICLE</h1><br>
          <input type="hidden" name= "id" value="<?php echo $data['id'] ?>" />
            <button type="submit">Yes, delete it!</button >
            <a href="index.php"><button type="button">No, go back!</button ></a>
        </form>
      </div>
    </div>
  </div>

</body>
</html>
<?php
}
?>