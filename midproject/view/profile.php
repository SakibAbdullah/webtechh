<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <header>
   <p> <b>Air Ticket Booking System</b> </p>
  </header>
  <body>
    <?php
      session_start();
     ?>
    <table>
        <tr>

            <th>User id</th>
                <th>Age</th>

        </tr>
        <tr>

            <td><?php echo $_SESSION['id']; ?></td>
              <td>22</td>

        </tr>

    </table>
    <footer>
      copyright 2000-2069
    </footer>
  </body>
</html>
