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
        <h1 class="admin">WELCOME TO THE <strong>ADMIN</strong> SECTION</h1>
        <ul class="navbar-nav ml-auto flex-nowrap">
            <li class="nav-item profilename"><a class="nav-link"><strong><?php echo $userRow['userName' ]; ?></strong></a></li>
             <li class="nav-item"><a class="nav-link" href="./day02/index.php">SHOW WEBSITE</a></li>
            <li class="nav-item"><a class="nav-link" href="./day02/login/logout.php?logout">LOGOUT</a></li>
        </ul>
    </nav>

    <div id="cars" class="container-fluid">
        <h1><b>CAR</b> SECTION</h1>

        <div class="row">


       



            <!-- php code for displaying cars from the database -->
            <?php
        require_once 'dbconnect.php';


        while($row = mysqli_fetch_assoc($result)) {
          
          if ($row["available"] == 0) {
            echo("
                <div  id=\"". $row["id"] ."\"class=\"col-xl-3 p-0 col-md-4 col-sm-12\">
                  <div class=\"innderdiv\">
                    <img style=\"opacity:0.5;\" src=\"" . $row["img"] ."\">
                    <h4><strong>" . $row["brand"] . "</strong> " . $row["model"] . "</h4>
                    <h5><br>" . $row["price"] . " €/ hour<br>
                    <i style=\"font-size:15px\" class=\"fa\">&#xf276;</i> " . $row["location"] . "<br>
                    <span class=\"green\">not available</span></h5><br>
                    <a href=\"day02/admin/data_update.php\" target=\"popup\" onclick=\"window.open('../day02/admin/data_update.php?id=". $row["id"] . "','name','width=600,height=990')\">
                      <button>EDIT</button>
                    </a>
                    <a href=\"day02/admin/update.php\" target=\"popup\" onclick=\"window.open('../day02/admin/delete.php?id=".   $row["id"] . "','name','width=600, height=350')\">
                      <button>DELETE</button>
                    </a>
                  </div>
                </div>");
          }   
          if ($row["available"] == 1) {
            echo("
            <div  id=\"". $row["id"] ."\"class=\"col-xl-3 p-0 col-md-4 col-sm-12\">
            <div class=\"innderdiv\">
              <img src=\"" . $row["img"] ."\">
              <h4><strong>" . $row["brand"] . "</strong> " . $row["model"] . "</h4>
              <h5><br>" . $row["price"] . " €/ hour<br>
              <i style=\"font-size:15px\" class=\"fa\">&#xf276;</i> " . $row["location"] . "<br>
              <span class=\"green\">available</span></h5><br>
              <a href=\"day02/admin/data_update.php\" target=\"popup\" onclick=\"window.open('../day02/admin/data_update.php?id=". $row["id"] . "','name','width=600,height=800')\">
                <button>EDIT</button>
              </a>
              <a href=\"day02/admin/update.php\" target=\"popup\" onclick=\"window.open('../day02/admin/delete.php?id=".   $row["id"] . "','name','width=600, height=350')\">
                <button>DELETE</button>
              </a>
            </div>
          </div>");
          }

         


          
        }

           // Free result set
          mysqli_free_result($result);
      ?>
            <div class="col-xl-3 p-0 col-md-4 col-sm-12">
                <div class="innderdiv addcar"><span><a href="day02/admin/update.php" target="popup"
                            onclick="window.open('../day02/admin/update.php','name','width=600,height=990')">+<br>ADD<br>CAR</a></span>
                </div>
            </div>
        </div>
    </div>

    
  
</body>

</html>
<?php ob_end_flush(); ?>