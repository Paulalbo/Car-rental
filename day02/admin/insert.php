<?php 
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "carrental";

            $conn = mysqli_connect($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }

          // Escape user inputs for security
            $img = mysqli_real_escape_string($conn, $_REQUEST['img']);
            $brand = mysqli_real_escape_string($conn, $_REQUEST['brand']);
            $model = mysqli_real_escape_string($conn, $_REQUEST['model']);
            $price = mysqli_real_escape_string($conn, $_REQUEST['price']);
            $parked = mysqli_real_escape_string($conn, $_REQUEST['parked']);
            $available = mysqli_real_escape_string($conn, $_REQUEST['available']);
            $type = mysqli_real_escape_string($conn, $_REQUEST['type']);

            // Attempt insert query execution
            $sql = "INSERT INTO cardetails (brand, model, price, location, available, img, type) 
            VALUES ('$brand', '$model', '$price', '$parked', '$available', '$img', '$type')";

            if(mysqli_query($conn, $sql)){
                echo "<script type=\"text/javascript\">
                setTimeout(
                    function ()
                {
                  self.close();
                }, 3000 );
                </script><div style=\"display:flex;justify-content:center;align-itmes:center;flex-direction:column;\"><img style=\"object-fit:contain;\" src=\"https://www.healthifyme.com/blog/wp-content/uploads/2019/07/success_400x300.gif\"></div>";
            } else{
                echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
            }
          ?>