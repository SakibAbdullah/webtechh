<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>User Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php
      require('../controller/viewModeratorController.php');
  ?>

    <div class="div1" >
      <header class="header">
       <p> <b>Air Ticket Booking System</b> </p>
      </header>
        <div class="div3">

            <main>
                <div >
                    <p class="pageTitle">View Moderator</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >
                      <table>
                        <tr>
                            <th><label for="name" class="tabText">user id</label></th>
                            <th><label for="user" class="tabText">name</label></th>
                        </tr>
                        <?php
                              while($row = $moderator->fetch_assoc()) {
                                    echo "<tr>";
                                    echo "<td>".$row["id"]."</td>";
                                    echo "<td>".$row["name"]."</td>";
                                    echo "</tr>";
                              }
                         ?>
                      </table>
                      <br>
                      <br>
                    </form>
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
