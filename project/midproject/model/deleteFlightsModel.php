<?php
          function deleteFlight($id){
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

              // sql to delete a record
              $sql = "DELETE FROM flight WHERE id='".$id."'";

              if ($conn->query($sql) === TRUE) {
                  $conn->close();
                  return true;
              } else {
                  echo "Error deleting record: " . $conn->error;
                  $conn->close();
                  return false;
              }


          }

 ?>
