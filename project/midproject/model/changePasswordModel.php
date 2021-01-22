<?php

  function updatePassword($id,$password){
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

      $sql = "UPDATE admin SET password='".$password."' WHERE name='".$id."'";

      if ($conn->query($sql) === TRUE) {
          $conn->close();
          return true;
      }
       else {
         echo "Error updating record: " . $conn->error;
         $conn->close();
          return false;
      }

    }

    function login($id, $password){
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

        $sql = "SELECT id FROM admin WHERE name='".$id."'AND password= '".$password."' ";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $conn->close();
            return true;
        }
        else {
            $conn->close();
            return false;
        }
    }
