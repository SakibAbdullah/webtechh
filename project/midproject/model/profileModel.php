<?php

    function getProfile($name){
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

        $sql = "SELECT id FROM admin WHERE name='".$name."' ";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $conn->close();
            return $row['id'];
        }
        else {
            $conn->close();
            return false;
        }
    }
