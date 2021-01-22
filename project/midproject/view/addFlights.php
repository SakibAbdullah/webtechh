<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
      <script src="../view/js/addFlights.js"></script>
  </head>

  <body>
    <?php
        require('../controller/addFlightsController.php');
    ?>
  <div class="div1">
    <header class="header">
     <p> <b>Air Ticket Booking System</b> </p>
    </header>
    <div class="div3">
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  onsubmit="return validateForm()" method="post">
          <label for="depurture">User Depurture</label>
          <br>
          <input type="text" name="depurture" id="depurture" placeholder="User Depurture" value="<?php echo $depurture?>">
          <br>
          <label for="depurtureErr" id="depurtureErr"><?php echo $depurtureErr;?></label>
          <br>
          <label for="arrival">User Arrival</label>
          <br>
          <input type="text" name="arrival" id="arrival" placeholder=" Arrival" value="<?php echo $arrival?>">
          <br>
          <label for="arrivalErr" id="arrivalErr"><?php echo $arrivalErr;?></label>
          <br>
          <label for="time">time</label>
          <br>
          <input type="datetime-local" name="time" id="time" placeholder="time" value="<?php echo $time; ?>">
          <br>
          <label for="timeErr" id="timeErr"><?php echo $timeErr;?></label>
           <br>
          <input type="submit" value="add flight" name="add" class="successBtn">
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
