<?php
  require('../model/loginModel.php');
  $id = $password = '';
  $idErr = $passwordErr = "";
  $idF = $passwordF = false;
  if ($_SERVER["REQUEST_METHOD"] == "POST") {

      if (isset($_POST['back'])) {
          header('Location: http://'.$_SERVER['HTTP_HOST'].'/midproject/view/home.php',true,303);
          exit;
      }
      if (empty($_POST["id"])) {
          $idErr = "An Id is required";
      }
      else{
          $id=$_POST["id"];
          $idF=true;
      }
      if (empty($_POST["password"])) {
          $passwordErr = "A password is required";
      }
      else{
          $password=$_POST["password"];
          $passwordF=true;
      }
      if($idF==true && $passwordF==true){
          if(login($id, $password)){
            session_start();
            $_SESSION['name']=$id;
            setcookie('name',$id,time()+3600);
            header('Location:/midproject/view/home.php');
            exit;
          }
          else{
              $passwordErr = "Login failed";
          }

      }

  }
