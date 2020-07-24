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
            $img = $_POST['img'];
            $brand = $_POST['brand'];
            $model = $_POST['model'];
            $price = $_POST['price'];
            $parked = $_POST['parked'];
            $available = $_POST['available'];
            $type = $_POST['type'];

            $id = $_POST['id'];

            // Attempt insert query execution
            $sql = "UPDATE cardetails SET brand = '$brand', model = '$model', price = '$price', location = '$parked', available = '$available', img = '$img', type = '$type' WHERE id = {$id}";

            if($conn->query($sql) === TRUE) {
                echo "<script type=\"text/javascript\">
                setTimeout(
                    function ()
                {
                  self.close();
                }, 3000 );
                </script><div style=\"display:flex;justify-content:center;align-itmes:center;flex-direction:column;\"><img style=\"object-fit:contain;\" src=\"https://www.healthifyme.com/blog/wp-content/uploads/2019/07/success_400x300.gif\"></div>";
            } else {
                echo "ERROR: Could not able to execute . $conn->error .";
            }
          ?>