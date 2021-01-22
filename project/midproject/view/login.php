<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>User Login</title>
    <link rel="stylesheet" href="style.css">
      <script src="../view/js/login.js"></script>
</head>
<body class="">
    <div class="loginbox" >
        <div class="textbox" >

          <header>
           <p> <b>Air Ticket Booking System</b> </p>
          </header>
            <main>
                <div class="textbox mform">
                    <p>User Login</p>
                    <?php
                        require('../controller/loginController.php');
                    ?>
                    <br>
                  <div class="form">

                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit="return validateForm()" method="post" >
                        <label for="id" >User Id</label>
                        <br>

                        <input type="text" name="id" id="id" placeholder="User Id" value="<?php echo $id?>"  >
                        <br>
                        <label for="idErr" id="idErr" class="errorText"><?php echo $idErr;?></label>
                        <br>
                        <label for="password">Password</label>
                        <br>
                        <input type="password" name="password" id="password" placeholder="Password" value="<?php echo $password?>">
                        <br>
                        <label for="passwordErr" id="passwordErr" class="errorText"><?php echo $passwordErr;?></label></label>
                        <br>
                        <input type="submit" value="Login" name="login" class="successBtn">
                    </form>

                  </div>
                </div>

            </main>

            <footer class="footer">
              copyright 2000-2069
            </footer>
        </div>
    </div>
</body>
</html>
