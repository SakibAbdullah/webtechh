<?php
      require('../model/addFlightsModel.php');

      $depurture = $arrival = $time = "";
      $depurtureErr = $arrivalErr = $timeErr = "";

      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['back'])) {
            header('Location: http://'.$_SERVER['HTTP_HOST'].'/midproject/view/home.php',true,303);
            exit;
        }
          if (isset($_POST['add'])) {
              if (empty($_POST["depurture"])) {
                  $depurtureErr = "Depurture is required";
              }
              if (empty($_POST["arrival"])) {
                  $arrivalErr = "Arrival is required";
              }
              if (empty($_POST["time"])) {
                  $timeErr = "time is required";
              }
              if(!empty($_POST["depurture"]) && !empty($_POST["arrival"]) && !empty($_POST["time"])){
                      $arrival=$_POST["arrival"];
                      $depurture=$_POST["depurture"];
                      $time=$_POST["time"];
                      addFlight($depurture,$arrival,$time);
                      $timeErr = "successfully added";
                }

            }
          }
