<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <header>
   <p> <b>Air Ticket Booking System</b> </p>
  </header>
  <body>
    <?php
      $depurture = $arrival = $time = "";
      $depurtureErr = $arrivalErr = $timeErr = "";

      if ($_SERVER["REQUEST_METHOD"] == "POST") {
          if (isset($_POST['add'])) {
              if (empty($_POST["depurture"])) {
                  $depurtureErr = "Depurture is required";
              }
              else{
                      $arrival=$_POST["arrival"];
                      $depurture=$_POST["depurture"];
                      $time=$_POST["time"];

                      $user = fopen("../data/addFlights.txt", "w") or die("Unable to open file!");
                      fwrite($user, $depurture. "," . $arrival. "," . $time . "\n");
                      fclose($user);
                }

            }
          }
     ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <label for="depurture">User Depurture</label>
        <br>
        <input type="text" name="depurture" id="depurture" placeholder="User Depurture" value="<?php echo $depurture?>">
        <br>
        <label for="depurtureErr"><?php echo $depurtureErr;?></label>
        <br>
        <label for="arrival">User Arrival</label>
        <br>
        <input type="text" name="arrival" id="arrival" placeholder=" Arrival" value="<?php echo $arrival?>">
        <br>
        <label for="arrivalErr"><?php echo $arrivalErr;?></label>
        <br>
        <label for="time">time</label>
        <br>
        <input type="text" name="time" id="time" placeholder="time" value="<?php echo $time; ?>">
        <br>
        <label for="timeErr"><?php echo $timeErr;?></label>

        <input type="submit" value="add flight" name="add">
    </form>
    <footer>
      copyright 2000-2069
    </footer>

  </body>
</html>
