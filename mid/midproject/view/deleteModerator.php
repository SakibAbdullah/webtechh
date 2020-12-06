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
      $id = $name = $password = "";
      $idErr = $nameErr = $passwordErr = "";

      if ($_SERVER["REQUEST_METHOD"] == "POST") {
          if (isset($_POST['delMod'])) {

                      $user = fopen("../data/addModerator.txt", "w") or die("Unable to open file!");
                      fwrite($user, $id.  $name.  $password . "\n");
                      fclose($user);

            }
          }
     ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

        <input type="submit" value="Delete Moderator" name="delMod">
    </form>
    <footer>
      copyright 2000-2069
    </footer>

  </body>
</html>
