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
                    <p>View Moderator</p>
                    <?php

                    $myfile = fopen("../data/addModerator.txt", "r") or die("Unable to open file!");

                        while ($line = fgets($myfile)) {
                            $words = explode(",",$line);
                            $name=$words[1];
                            $user=$words[0];
                        }
                        fclose($myfile);
                    ?>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >
                      <label for="name">name</label>
                      <br>
                      <br>
                      <label for="name"><?php echo $name;?></label>
                      <br>
                      <br>
                      <label for="user">user id</label>
                      <br>
                      <br>
                      <label for="user"><?php echo $user;?></label>
                      <br>
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
