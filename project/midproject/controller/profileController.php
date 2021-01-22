<?php
    require('../model/profileModel.php');
    $id="";
    session_start();
    $id=getProfile($_SESSION['name']);
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (isset($_POST['back'])) {
            header('Location: http://'.$_SERVER['HTTP_HOST'].'/midproject/view/home.php',true,303);
            exit;
        }


      }
