<?php
  require('../model/changePasswordModel.php');
    $currentPassword = $newPassword = $confirmPassword = '';
    $currentPasswordErr = $newPasswordErr = $confirmPasswordErr = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['back'])) {
            header('Location: http://'.$_SERVER['HTTP_HOST'].'/midproject/view/home.php',true,303);
            exit;
          }
          if (empty($_POST["currentPassword"])) {
              $currentPasswordErr = "Current Password is required";
          }
          else{
              $currentPassword=$_POST["currentPassword"];
          }
          if (empty($_POST["newPassword"])) {
              $newPasswordErr = "New Password is required";
          }
          else{
              $newPassword=$_POST["newPassword"];
          }
          if (empty($_POST["confirmPassword"])) {
              $confirmPasswordErr = "Confirmation is required";
          }
          else{
              $confirmPassword=$_POST["confirmPassword"];
              if (!empty($_POST["newPassword"])) {
                  $val=strcmp($newPassword,$confirmPassword);
                  if($val==0){
                      $confirmPassword=$_POST["confirmPassword"];
                      session_start();
                      $id=$_SESSION['name'];
                      if(login($id, $currentPassword)){
                            if(updatePassword($id,$newPassword)){
                                $currentPasswordErr = "Successful";
                            }
                            else{
                                $currentPasswordErr = "failed to update";
                            }
                      }
                      else{
                            $currentPasswordErr = "Current password does not match";
                      }
                  }
                  else{
                      $confirmPasswordErr = "Password do not match, Please Re-enter";
                      $confirmPassword='';
                  }
              }
              else{
                  $confirmPassword=$_POST["confirmPassword"];
              }

          }
    }
?>
