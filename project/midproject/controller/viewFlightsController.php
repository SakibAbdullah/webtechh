<?php
      require('../model/viewFlightsModel.php');
      $flight=loadFlight();
      if ($_SERVER["REQUEST_METHOD"] == "POST") {

                if (isset($_POST['back'])) {
                    header('Location: http://'.$_SERVER['HTTP_HOST'].'/midproject/view/home.php',true,303);
                    exit;
                }
              }
