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
          if (isset($_POST['delMod'])) {

                      $user = fopen("../data/addFlights.txt", "w") or die("Unable to open file!");
                      fwrite($user, $depurture . $arrival . $time . "\n");
                      fclose($user);

            }
          }
     ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

        <input type="submit" value="Delete flights" name="delMod">
    </form>
    <footer>
      copyright 2000-2069
    </footer>

  </body>
</html>
