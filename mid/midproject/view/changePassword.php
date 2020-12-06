<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Change Password</title>
</head>
<body>
    <div >
        <div >
          <header>
           <p> <b>Air Ticket Booking System</b> </p>
          </header>
            <main>
                <div >
                    <p>Change Passowrd</p>
                    <?php
                        require('../controller/changePasswordCheck.php');
                    ?>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >
                        <label for="currentPassword" >Enter Current Password</label>
                        <br>
                        <input type="text" name="currentPassword" id="currentPassword" placeholder="Enter Current Password" value="<?php echo $currentPassword?>" >
                        <br>
                        <label for="currentPasswordErr" ><?php echo $currentPasswordErr;?></label>
                        <br>
                        <label for="newPassword" >Enter New Password</label>
                        <br>
                        <input type="text" name="newPassword" id="newPassword" placeholder="Enter New Password" value="<?php echo $newPassword?>">
                        <br>
                        <label for="newPasswordErr" ><?php echo $newPasswordErr;?></label>
                        <br>
                        <label for="confirmPassword" >Confirm Password</label>
                        <br>
                        <input type="text" name="confirmPassword" id="confirmPassword" placeholder="Confirm PAssword" value="<?php echo $confirmPassword?>">
                        <br>
                        <label for="confirmPasswordErr" ><?php echo $confirmPasswordErr;?></label>
                        <br>
                        <input type="submit" value="Confirm" name="confirm" >
                        <br>
                    </form>
                </div>

            </main>
            <footer>
              copyright 2000-2069
            </footer>
        </div>
    </div>
</body>
</html>
