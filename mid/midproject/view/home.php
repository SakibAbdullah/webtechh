<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Home</title>
</head>
<body>
    <div >
        <div>
            <header>
             <p> <b>Air Ticket Booking System</b> </p>
            </header>
            <main>
                <div>
                    <div>

                        <?php
                            require('logout.php');
                        ?>
                        <div>
                            <p>Home</p>
                        </div>
                        <div>
                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                                <input type="submit" value="Logout" name="logout">
                            </form>
                        </div>
                    </div>
                    <div>
                      <h3>Welcome,<?php echo $_SESSION['id']; ?></h3>
                      <br>
                      <br>
                        <a href="profile.php" >profile</a>
                        <br>
                        <a href="changePassword.php" >Change Password</a>

                        <br>
                        <a href="discount.php" >Discount</a>
                        <br>
                        <a href="addModerator.php" >add moderator</a>
                        <br>
                        <a href="viewModerator.php" >view moderator</a>
                        <br>
                        <a href="deleteModerator.php" >delete modetaror</a>
                        <br>
                        <a href="addCounterserviceprovider.php" >add counter service provider</a>
                        <br>
                        <a href="viewCounterserviceprovider.php" >view counter service provider</a>
                        <br>
                        <a href="deleteCounterserviceprovider.php" >delete counter service provider</a>
                        <br>
                        <a href="viewFlights.php" >view flights</a>
                        <br>
                        <a href="addFlights.php" >add flights</a>

                        <br>
                        <a href="searchFlights.php" >search flights</a>
                        <br>
                        <a href="deleteFlights.php" >Delete flights</a>



                    </div>
            </main>
            <footer>
              copyright 2000-2069
            </footer>
        </div>
    </div>
</body>
</html>
