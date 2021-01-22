<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
  </head>

  <body>
    <?php
        require('../controller/deleteFlightsController.php');
    ?>
  <div class="div1">
    <header class="header">
     <p> <b>Air Ticket Booking System</b> </p>
    </header>
    <div class="div3">
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

                  <input type="text"  name="id"  placeholder="Enter id">
                  <br>
                  <br>
                  <input type="submit"  value="Delete" name="delMod" class="logoutBtn">
                  <br>
                  <label for=""><?php  echo $addErr; ?></label>
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
