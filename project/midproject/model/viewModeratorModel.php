<?php

            function loadModerator(){
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


                  $sql = "SELECT * FROM admin";
                  $result = $conn->query($sql);

                  if ($result->num_rows > 0) {
                  // output data of each row
                      $conn->close();
                      return $result;
                  }
                  else {
                      echo "0 results";
                      $conn->close();
                  }
            }








 ?>
