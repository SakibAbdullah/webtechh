<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
      <script src="../view/js/addModerator.js"></script>
  </head>

  <body>
    <?php
        require('../controller/addModeratorController.php');
    ?>
    <div class="div1">
       <div>
         <header class="header">
          <p class="pageTitle"> <b>Air Ticket Booking System</b> </p>
         </header>
<div class="div3">
      <p class="pageTitle">Add Moderator</p>
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit="return validateForm()" method="post">
      <label for="id" class="tabText">User Id</label>
      <br>
      <input type="text" name="id" id="id" placeholder="User Id" value="<?php echo $id?>">
      <br>
      <label for="idErr" id="idErr"><?php echo $idErr;?></label>
      <br>
      <label for="name" class="tabText">User Name</label>
      <br>
      <input type="text" name="name" id="name" placeholder="User name" value="<?php echo $name?>">
      <br>
      <label for="nameErr" id="nameErr"><?php echo $nameErr;?></label>
      <br>
      <label for="password" class="tabText">Password</label>
      <br>
      <input type="password" name="password" id="password" placeholder="Password" value="<?php echo $password?>">
      <br>
      <label for="passwordErr" id="passwordErr"><?php echo $passwordErr;?></label>
      <br><br>
      <input type="submit" value="add" name="add" class="successBtn">
  </form>
</div>
<br>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <input type="submit" value="Back" name="back" class="logoutBtn">

</form>

         <footer class="footer">
           copyright 2000-2069
         </footer>

       </div>


    </div>

  </body>
</html>
