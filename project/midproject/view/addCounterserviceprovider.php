<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>addCounterserviceprovider</title>
    <link rel="stylesheet" href="style.css">
      <script src="../view/js/addCounterserviceprovider.js"></script>
  </head>
  <body>
    <?php
        require('../controller/addCounterserviceproviderController.php');
    ?>
    <div class="div1">
      <header class="header">
       <p> <b>Air Ticket Booking System</b> </p>
      </header>
      <div class="div2">
        <p class="pageTitle">Add Counter Service Provider</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit="return validateForm()" method="post">
            <label for="id">User Id</label>
            <br>
            <input type="text" name="id" id="id" placeholder="User Id" value="<?php echo $id?>">
            <br>
            <label for="idErr" id="idErr"><?php echo $idErr;?></label>
            <br>
            <label for="name">User Name</label>
            <br>
            <input type="text" name="name" id="name" placeholder="User name" value="<?php echo $name?>">
            <br>
            <label for="nameErr" id="nameErr"><?php echo $nameErr;?></label>
            <br>
            <label for="password">Password</label>
            <br>
            <input type="password" name="password" id="password" placeholder="Password" value="<?php echo $password?>">
            <br>
            <label for="passwordErr" id="passwordErr"><?php echo $passwordErr;?></label>
              <br><br>
            <input type="submit" value="add" name="add" class="successBtn">
        </form>
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
