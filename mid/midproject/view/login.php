<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>User Login</title>
</head>
<body>
    <div >
        <div >
          <header>
           <p> <b>Air Ticket Booking System</b> </p>
          </header>
            <main>
                <div >
                    <p>User Login</p>
                    <?php
                        require('../controller/loginCheck.php');
                    ?>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >
                        <label for="id" >User Id</label>
                        <br>
                        <input type="text" name="id" id="id" placeholder="User Id" value="<?php echo $id?>" >
                        <br>
                        <label for="idErr"><?php echo $idErr;?></label>
                        <br>
                        <label for="password">Password</label>
                        <br>
                        <input type="password" name="password" id="password" placeholder="Password" value="<?php echo $password?>">
                        <br>
                        <label for="passwordErr" ><?php echo $passwordErr;?></label></label>
                        <br>
                        <input type="submit" value="Login" name="login">
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
