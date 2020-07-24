<?php
ob_start();
session_start();
require_once '../login/dbconnect.php';

// if session is not set this will redirect to login page
if( !isset($_SESSION['user' ]) ) {
 header("Location: index.php");
 exit;
}
// select logged-in users details
$res=mysqli_query($conn, "SELECT * FROM users WHERE userId=".$_SESSION['user']);
$userRow=mysqli_fetch_array($res, MYSQLI_ASSOC);
?>


<!doctype html>
<html lang="en">

<head>
    <title>CarRental</title>
    <base href="/">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="./day02/style/styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" crossorigin="anonymous">
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;700&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>

    <nav class="sticky-top navbar navbar-expand-lg navbar-light flex-grow-1">
        <h1 class="admin">WELCOME <strong><?php echo $userRow['userName' ]; ?></strong></h1>
        <ul class="navbar-nav ml-auto flex-nowrap">
            <li class="nav-item profilename"><a class="nav-link"><strong><?php echo $userRow['userName' ]; ?></strong></a></li>
            <li class="nav-item"><a class="nav-link" href="./day02/login/logout.php?logout">LOGOUT</a></li>
        </ul>
    </nav>


    <div id="cars" class="container-fluid">
        <h1><b>BOOKING</b> SECTION</h1>

        <div class="row">
            <!-- php code for displaying cars from the database -->
            <?php
        require_once 'dbconnect.php';


        while($row = mysqli_fetch_assoc($result)) {
          if ($row["available"] == 1) {
            echo("
            <div  id=\"". $row["id"] ."\" class=\"col-xl-3 p-0 col-md-4 col-sm-12\">
            <div class=\"innderdiv\">
              <img src=\"" . $row["img"] ."\">
              <h4><strong>" . $row["brand"] . "</strong> " . $row["model"] . "</h4>
              <h5><br>" . $row["price"] . " €/ hour<br>
              <i style=\"font-size:15px\" class=\"fa\">&#xf276;</i> " . $row["location"] . "</h5><br><br>
                <button id=\"". $row["id"] ."myBtn\">BOOK</button>
              
                <div id=\"". $row["id"] ."slider\" style=\"display:none\" class=\"slider\">

                <!-- Modal content -->
                <div class=\"modal-content\">
                <span class=\"close close". $row["id"] ."\">&times;</span>
                  <div class=\"modal-body\">
                  <img src=\"" . $row["img"] ."\">
                  <div class=\"content\">
                    <h1><strong>" . $row["brand"] . "</strong> "  . $row["model"] . "</h1>
                    <p>
                      <h5><br>" . $row["price"] . " €/ hour</h5><br>
                      <i style=\"font-size:15px\" class=\"fa\">&#xf276;</i> " . $row["location"] . "<br><br>
                      <button>BOOK NOW</button>
                    </p>
                  </div>");

                  if ($row["location"] == "Vienna Millennium Tower") {
                    echo ("<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2657.2445933543568!2d16.384704416261965!3d48.240418851970446!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476d065afc468387%3A0x188d49d5a4165da8!2sMillennium%20Tower!5e0!3m2!1sde!2sat!4v1595408835404!5m2!1sde!2sat\" width=\"100%\" height=\"100%\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>");}

                  if ($row["location"] == "Vienna Westbahnhof") {
                    echo ("<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2659.491244408324!2d16.336139066261193!3d48.197153104987876!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476d07f5b7c27433%3A0x6be46148d7640a51!2sWien%20Westbahnhof!5e0!3m2!1sde!2sat!4v1595419247733!5m2!1sde!2sat\" width=\"100%\" height=\"100%\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>");}

                  if ($row["location"] == "Vienna Airport") {
                    echo ("<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2663.8766036405423!2d16.573325216259615!3d48.11261606087721!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476c55ab471abe9b%3A0x247a52108dd29b4b!2sFlughafen%20Wien!5e0!3m2!1sde!2sat!4v1595419292820!5m2!1sde!2sat\" width=\"100%\" height=\"100%\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>");}
                  
                  if ($row["location"] == "Vienna Prater") {
                    echo ("<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5316.839587915559!2d16.39909578015982!3d48.21779061556124!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476d079f46249565%3A0x89fed24d829780af!2sPrater%20Wien%20GmbH%20-%20Vergn%C3%BCgungspark!5e0!3m2!1sde!2sat!4v1595441965643!5m2!1sde!2sat\" width=\"100%\" height=\"100%\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>");}

                  if ($row["location"] == "Vienna Hauptbahnhof") {
                    echo ("<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2660.1121379734814!2d16.374408616261064!3d48.18519085582162!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476da9dbd63b4d51%3A0xa8827043db7157c8!2sWien%20Hbf!5e0!3m2!1sde!2sat!4v1595419335214!5m2!1sde!2sat\" width=\"100%\" height=\"100%\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>");}
                
                        echo("  
                  </div>
                </div>
              

            </div>
          </div>
          </div>
          <script>
                  // Get the modal
                  var modal". $row["id"] ." = document.getElementById(\"". $row["id"] ."slider\");

                  // Get the button that opens the modal
                  var btn = document.getElementById(\"". $row["id"] ."myBtn\");

                  // Get the <span> element that closes the modal
                  var span". $row["id"] ." = document.getElementsByClassName(\"close". $row["id"] ."\")[0];

                  // When the user clicks the button, open the modal 
                  btn.onclick = function() {
                    modal". $row["id"] .".style.display = \"flex\";
                  }

                  // When the user clicks on <span> (x), close the modal
                  span". $row["id"] .".onclick = function() {
                    modal". $row["id"] .".style.display = \"none\";
                  }

                  // When the user clicks anywhere outside of the modal, close it
                  window.onclick = function(event) {
                    if (event.target == modal) {
                      modal". $row["id"] .".style.display = \"none\";
                    }
                  }
                </script>");
          }
          
        }

           // Free result set
          mysqli_free_result($result);
      ?>


        </div>

        </div>
    </div>

</body>

</html>
<?php ob_end_flush(); ?>