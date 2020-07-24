<?php
       header("Content-Type: application/json; charset=UTF-8");
       $obj = json_decode($_GET["x"], false); // Convert the request into an object
       $conn = new mysqli("localhost", "root", "", "carrental"); // Access the database using mysqli
       $result = $conn-> query("SELECT * FROM cardetails");
       $outp = array();
       $outp = $result-> fetch_all(MYSQLI_ASSOC); // fill an array with the requested data and store it in the array
        echo json_encode($outp); // return the object as JSON
?>