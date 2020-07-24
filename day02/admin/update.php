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
      <div class="contactimg col-xl-6 p-0 col-md-6 col-sm-12">
        <h1><b>F</b>IND<br><b>R</b>ENT<br><b>R</b>ETURN</h1>
      </div>

      <div class="col-xl-6 p-0 col-md-6 col-sm-12">
      <form action="day02/admin/insert.php">
          <h1>ADD VEHICLE!</h1>
          <label>
            IMG:<br>
            <input type="text" name="img">
          </label>
          <label>
            BRAND:<br>
            <input type="text" name="brand">
          </label>
          <label>
            MODEL:<br>
            <input type="text" name="model">
          </label>
          <br>
          <label>
            PRICE:<br>
            <input type="number" name="price">
          </label>
          <label>
            PARKING LOCATION:<br>
            <select name="parked" id="available">
                <option value="Vienna Millennium Tower">Vienna Millennium Tower</option>
                <option value="Vienna Westbahnhof">Vienna Westbahnhof</option>
                <option value="Vienna Airport">Vienna Airport</option>
                <option value="Vienna Hauptbahnhof">Vienna Hauptbahnhof</option>
                <option value="Vienna Prater">Vienna Prater</option>
            </select>
          </label>
          <br>
          <label>
            AVAILABILITY:<br>
            <select name="available" id="available">
                <option value="1">available</option>
                <option value="0">not available</option>
            </select>
          </label>
          <label>
            CAR TYPE:<br>
            <select name="type" id="available">
                <option value="1">CAR</option>
                <option value="2">SUV</option>
                <option value="3">BIKE</option>
            </select>
          </label>
          <br>
          <input type="submit" class="btn" value="ADD">
  
        </form>
      </div>
    </div>
  </div>

</body>
</html>