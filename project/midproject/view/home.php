<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="">
    <div class="div1" >
        <div>
            <header>
             <p> <b class="header">Air Ticket Booking System</b> </p>
            </header>
            <main>
                <div>
                    <div>

                        <?php
                            require('logout.php');
                        ?>
                        <div>
                            <p class="pageTitle">Home</p>
                        </div>

                    </div>
                    <div>
                      <h3>Welcome,<?php echo $_SESSION['name']; ?></h3>
                      <br>
                      <br>
                      <div>
                          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                              <input type="submit" value="Logout" name="logout" class="logoutBtn">
                          </form>
                      </div>
                      <br><br>
                        <div class="div2">
                          <div class="textDiv">
                            <a href="profile.php"  class="textA">Profile</a>
                          </div>
                          <br>
                          <div class="textDiv">
                              <a href="changePassword.php" class="textA">Change Password</a>
                          </div>
                          <br>
                          <div class="textDiv">
                            <a href="discount.php" class="textA">Discount</a>
                          </div>

                          <br>
                          <div class="textDiv">
                              <a href="addModerator.php" class="textA">Add Moderator</a>
                          </div>

                          <br>
                          <div class="textDiv">
                              <a href="viewModerator.php" class="textA">View Moderator</a>
                          </div>

                          <br>
                          <div class="textDiv">
                              <a href="deleteModerator.php" class="textA">Delete Modetaror</a>
                          </div>

                          <br>
                          <div class="textDiv">
                            <a href="addCounterserviceprovider.php" class="textA">Add Counter Service Provider</a>
                          </div>
                          <br>
                          <div class="textDiv">
                            <a href="viewCounterserviceprovider.php" class="textA">View Counter Service Provider</a>
                          </div>

                          <br>
                          <div class="textDiv">
                            <a href="deleteCounterserviceprovider.php" class="textA">Delete Counter Service Provider</a>
                          </div>

                          <br>
                          <div class="textDiv">
                            <a href="viewFlights.php" class="textA" >View Flights</a>
                          </div>

                          <br>
                          <div class="textDiv">
                            <a href="addFlights.php" class="textA">Add Flights</a>
                          </div>



                          <br>
                          <div class="textDiv">
                          <a href="searchFlights.php" class="textA">Search Flights</a>
                          </div>

                          <br>
                          <div class="textDiv">
                          <a href="deleteFlights.php" class="textA">Delete Flights</a>
                          </div>

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
