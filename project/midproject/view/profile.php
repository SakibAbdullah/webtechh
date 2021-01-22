<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
  </head>

  <body>
    <?php
        require('../controller/profileController.php');
    ?>
    <div class="div1">

        <div class="">

          <header class="header">
           <p> <b>Air Ticket Booking System</b> </p>
          </header>
              <div class="div3">
                <table class="div2">
                  <p class="pageTitle">Profile</p>
                    <tr>

                        <th class="tabHead">User id</th>
                            <th class="tabHead">Name</th>

                    </tr>
                    <tr>

                        <td class="tabText" ><?php echo $id; ?></td>
                          <td class="tabText"><?php echo $_SESSION['name']; ?></td>

                    </tr>

                </table>
                <br>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                            <input type="submit" value="Back" name="back" class="logoutBtn">

                </form>

              </div>
          <footer class="footer">
            copyright 2000-2069
          </footer>

        </div>

    </div>
  </body>
</html>
