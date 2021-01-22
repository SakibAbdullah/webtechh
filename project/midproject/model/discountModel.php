<?php

    function addDiscount($amount){
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "airline";

      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);
      // Check connection
      if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
      }
      $x=1;
      $sql = "UPDATE discount SET code='".$amount."'";

      if ($conn->query($sql) === TRUE) {
          $conn->close();
          return true;
      } else {
      echo "Error updating record: " . $conn->error;
      }

      $conn->close();

    }
