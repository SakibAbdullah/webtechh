<?php
        require('../model/addCounterserviceproviderModel.php');
        $id = $name = $password = "";
        $idErr = $nameErr = $passwordErr = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
              if (isset($_POST['back'])) {
                  header('Location: http://'.$_SERVER['HTTP_HOST'].'/midproject/view/home.php',true,303);
                  exit;
              }
              if (isset($_POST['add'])) {
                  if (empty($_POST["name"])) {
                      $idErr = "id is required";
                  }
                  else{
                          $name=$_POST["name"];
                          $id=$_POST["id"];
                          $password=$_POST["password"];
                          if(addCounterserviceprovider($id,$name,$password)){
                            $passwordErr = "Counter service provider added successfully";
                          }
                          else{
                              $passwordErr = "failed to add";
                          }
                    }

                }
        }
