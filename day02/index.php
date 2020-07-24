<?php
ob_start();
session_start();
require_once './login/dbconnect.php';

// select logged-in users details
$res = mysqli_query($conn, "SELECT * FROM users WHERE userId=".$_SESSION['user']);
$userRow = mysqli_fetch_array($res, MYSQLI_ASSOC);
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>CarRental</title>
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>

  


  <nav class="sticky-top navbar navbar-expand-lg navbar-light flex-grow-1">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
      aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse text-left" id="navbarTogglerDemo02">
      <ul class="navbar-nav ml-auto flex-nowrap">
        <?php 
          if (($userRow['userName'])) {
          echo ("<li class=\"nav-item profilename\"><a href=\"./day02/admin/admin.php\" class=\"nav-link\"><strong>" . $userRow['userName' ] . "</strong></a></li>
          <li class=\"nav-item profilename\"><a href=\"./day02/admin/admin.php\" class=\"nav-link\"><strong><i style=\"font-size:24px\" class=\" fa\">&#xf044;</i></strong></a></li>
          <li class=\"nav-item\"><a class=\"nav-link\" href=\"./day02/login/logout.php?logout\">LOGOUT</a></li>");
          } else {
          echo ("<li class=\"nav-item\"><a class=\"nav-link\" href=\"./day02/login/index.php\">LOGIN</a></li>");
          }
          ?>
      </ul>
    </div>
  </nav>

  <div class="jumbotron jumbotron-fluid d-flex justify-content-center align-items-center">
    <h1><b>F</b>IND – <wbr><b>R</b>ENT – <wbr><b>R</b>ETURN</h1>
  </div>
  <div id="cars" class="container-fluid">
    <h1>FIND THE RIGHT <b>CAR</b></h1>
    <h5>CLICK ON YOUR VEHICLE OF CHOICE TO SEE MORE DETAILS!</h5>
    



    <div class="row">

    <?php
    require_once './admin/dbconnect.php';

    while($row = mysqli_fetch_assoc($result)) {
      if ($row["available"] == 1) {
        echo("<div id=\"". $row["id"] ."\" class=\"col-xl-3 p-0 col-md-4 col-sm-12\"><div class=\"innderdiv\"><img src=\"" . $row["img"] ."\"><h4><strong>" . $row["brand"] . "</strong> " . $row["model"] . "</h4></div></div>");
        }
  }

    // Free result set
    mysqli_free_result($result);
    // Close connection
    mysqli_close($conn);
    ?>

    </div>



  </div>



  <div id="contact" class="container-fluid">
    <div class="row">
      <div class="contactimg col-xl-6 p-0 col-md-6 col-sm-12">
        <h1><b>F</b>IND<br><b>R</b>ENT<br><b>R</b>ETURN</h1>
      </div>

      <div class="col-xl-6 p-0 col-md-6 col-sm-12">
        <form>
          <h1>GET IN TOUCH WITH US!</h1>
          <h5>INSERT YOUR DATA</h5>

          <label>
            First Name:<br>
            <input type="text" formControlName="firstName">
          </label>
          <label>
            Last Name:<br>
            <input type="text" formControlName="lastName">
          </label>
          <br>
          <label>
            Email:<br>
            <input type="text" formControlName="email">
          </label>
          <br>
          <label>
            Comment:<br>
            <textarea formControlName="comment" placeholder="I'm interested in other infomations ... "></textarea>
          </label>
          <br>
          <input type="submit" class="btn" value="Submit">

        </form>
      </div>
    </div>
  </div>

</body>

</html>
<?php ob_end_flush(); ?>