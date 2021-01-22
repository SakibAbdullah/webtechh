<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Change Password</title>
    <link rel="stylesheet" href="style.css">
      <script src="../view/js/ChangePassword.js"></script>
<body>
  <?php
      require('../controller/changePasswordController.php');
  ?>
    <div class="div1" >
        <div >
          <header class="header">
           <p> <b>Air Ticket Booking System</b> </p>
          </header>
            <main>
                <div class="div2" >
                    <p class="pageTitle">Change Passowrd</p>
                  <div class="div2">
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit="return validateForm()" method="post" >
                        <label for="currentPassword" >Enter Current Password</label>
                        <br>
                        <input type="text" name="currentPassword" id="currentPassword" placeholder="Enter Current Password" value="<?php echo $currentPassword?>" >
                        <br>
                        <label for="currentPasswordErr" id="currentPasswordErr" ><?php echo $currentPasswordErr;?></label>
                        <br>
                        <label for="newPassword" >Enter New Password</label>
                        <br>
                        <input type="text" name="newPassword" id="newPassword" placeholder="Enter New Password" value="<?php echo $newPassword?>">
                        <br>
                        <label for="newPasswordErr" id="newPasswordErr" ><?php echo $newPasswordErr;?></label>
                        <br>
                        <label for="confirmPassword" >Confirm Password</label>
                        <br>
                        <input type="text" name="confirmPassword" id="confirmPassword" placeholder="Confirm Password" value="<?php echo $confirmPassword?>">
                        <br>
                        <label for="confirmPasswordErr" id="confirmPasswordErr"><?php echo $confirmPasswordErr;?></label>
                        <br>
                        <input type="submit" value="Confirm" name="confirm" class="successBtn" >
                        <br>
                    </form>

                  </div>
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
