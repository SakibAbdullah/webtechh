<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>User Login</title>
    <link rel="stylesheet" href="style.css">
      <script src="../view/js/searchFlights.js"></script>
</head>
<body>
  <?php
      require('../controller/searchFlightsController.php');
  ?>
    <div class="div1" >
      <header class="header">
       <p> <b>Air Ticket Booking System</b> </p>
      </header>
        <div class="div3">

            <main>
                <div >
                    <p class="pageTitle">Search Flights</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"onsubmit="return validateForm()"  method="post" >
                        <label for="depurture" class="tabText" >Depurture</label>
                        <br>
                        <input type="text" name="depurture" id="depurture" placeholder="depurture" value="<?php echo $depurture?>" >
                        <br>
                        <label for="depurtureErr" id="depurtureErr"><?php echo $depurtureErr;?></label>
                        <br>
                        <label for="arrival" class="tabText">Arrival</label>
                        <br>
                        <input type="arrival" name="arrival" id="arrival" placeholder="arrival" value="<?php echo $arrival?>">
                        <br>
                        <label for="arrivalErr" id="arrivalErr" ><?php echo $arrivalErr;?></label></label>

                        <br>
                        <input type="submit" value="search" name="search" class="successBtn">
                          <br>
                        <h3>
                              <label for="arrivalErr"  class="header"><?php echo $time;?></label></label>
                        </h3>
                        <br>
                    </form>
                </div>

            </main>
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
