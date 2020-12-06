<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>addCounterserviceprovider</title>
  </head>
  <body>
    <header>
     <p> <b>Air Ticket Booking System</b> </p>
    </header>
    <?php
      $id = $name = $password = "";
      $idErr = $nameErr = $passwordErr = "";

      if ($_SERVER["REQUEST_METHOD"] == "POST") {
          if (isset($_POST['add'])) {
              if (empty($_POST["name"])) {
                  $idErr = "id is required";
              }
              else{
                      $name=$_POST["name"];
                      $id=$_POST["id"];
                      $password=$_POST["password"];

                      $user = fopen("../data/addCounterserviceprovider.txt", "w") or die("Unable to open file!");
                      fwrite($user, $id. "," . $name. "," . $password . "\n");
                      fclose($user);
                }

            }
          }
     ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <label for="id">User Id</label>
        <br>
        <input type="text" name="id" id="id" placeholder="User Id" value="<?php echo $id?>">
        <br>
        <label for="idErr"><?php echo $idErr;?></label>
        <br>
        <label for="name">User Name</label>
        <br>
        <input type="text" name="name" id="name" placeholder="User name" value="<?php echo $name?>">
        <br>
        <label for="nameErr"><?php echo $nameErr;?></label>
        <br>
        <label for="password">Password</label>
        <br>
        <input type="password" name="password" id="password" placeholder="Password" value="<?php echo $password?>">
        <br>
        <label for="passwordErr"><?php echo $passwordErr;?></label>

        <input type="submit" value="add" name="add">
    </form>
    <footer>
      copyright 2000-2069
    </footer>

  </body>
</html>
