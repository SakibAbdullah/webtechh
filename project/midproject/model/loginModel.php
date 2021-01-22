<?php
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
