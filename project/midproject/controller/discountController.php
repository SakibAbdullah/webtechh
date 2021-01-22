<?php
    require('../model/discountModel.php');
    $addDiscount = '';
    $addDiscountErr = "";
      if ($_SERVER["REQUEST_METHOD"] == "POST") {

          if (isset($_POST['back'])) {
              header('Location: http://'.$_SERVER['HTTP_HOST'].'/midproject/view/home.php',true,303);
              exit;
          }
          if (isset($_POST['addDiscountButton'])) {
              if (empty($_POST ["discount"])) {
                  $addDiscountErr = "An amount is required";
              }
              else{
                      $addDiscount=$_POST["discount"];
                      if(addDiscount($addDiscount)){
                            $addDiscountErr="Discount Code Added";
                      }
                      else{
                            $addDiscountErr="Failed to add Discount Code ";
                      }

              }
          }
      }
