<?php

function addModerator($id,$name,$password){

          $servername = "localhost";
          $username = "root";
          $pass = "";
          $dbname = "airline";

          // Create connection
          $conn = new mysqli($servername, $username, $pass, $dbname);
          // Check connection
          if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
          }


        $sql = "INSERT INTO admin (id, name, password) VALUES ('$id', '$name', '$password')";

        if ($conn->query($sql) === TRUE) {
            $conn->close();
            return true;
        } else {
            $conn->close();
            return false;
        }

    }



 ?>
