<?php
      require('../model/searchFlightsModel.php');
      $depurture = $arrival = $time = '';
      $depurtureErr = $arrivalErr = "";
      $depurtureF = $arrivalF = false;
      if ($_SERVER["REQUEST_METHOD"] == "POST") {

                if (isset($_POST['back'])) {
                    header('Location: http://'.$_SERVER['HTTP_HOST'].'/midproject/view/home.php',true,303);
                    exit;
                }
                if (empty($_POST["depurture"])) {
                    $depurtureErr = "An depurture is required";
                }
                else{
                    $depurture=$_POST["depurture"];
                    $depurtureF=true;
                }
                if (empty($_POST["arrival"])) {
                    $arrivalErr = "A arrival is required";
                }
                else{
                    $arrival=$_POST["arrival"];
                    $arrivalF=true;
                }
                if($depurtureF==true && $arrivalF==true){
                      $time=searchFlight($depurture,$arrival);

                }

      }
