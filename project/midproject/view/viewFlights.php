<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
  </head>

  <body>
    <?php
        require('../controller/viewFlightsController.php');
    ?>
  <div class="div1">
    <header class="header">
     <p> <b>Air Ticket Booking System</b> </p>
    </header>
    <div class="div3">
      <table>
        <tr>
          <tr>
              <th>Depurture</th>
              <th>Arrival</th>
              <th>Flight Time</th>
          </tr>
        </tr>
        <?php
              while($row = $flight->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>".$row["takeoff"]."</td>";
                    echo "<td>".$row["landing"]."</td>";
                    echo "<td>".$row["departure"]."</td>";
                    echo "</tr>";
              }
         ?>
      </table>
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
