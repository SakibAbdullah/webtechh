<?php

          function searchFlight($departure,$arrival){
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


                $sql = "SELECT departure FROM flight WHERE takeoff='".$departure."' AND landing='".$arrival."'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                // output data of each row
                    $row = $result->fetch_assoc();
                    $conn->close();
                    return $row['departure'];
                }
                else {
                    echo "0 results";
                    $conn->close();
                }
          }


 ?>
