<?php
require('../model/deleteFlightsModel.php');
$id = "";
$addErr =  "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    if (isset($_POST['back'])) {
        header('Location: http://'.$_SERVER['HTTP_HOST'].'/midproject/view/home.php',true,303);
        exit;
    }
    if (isset($_POST['delMod'])) {
          if(!empty($_POST['id'])){
            $id=$_POST['id'];
              if(deleteFlight($id)){
                  $addErr = "Deleted successfully";
              }
              else{
                    $addErr = "Faield to Delete";
              }
          }

      }
}
