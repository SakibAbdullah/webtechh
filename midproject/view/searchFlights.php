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
                                        $depurture = $arrival = $time = '';
                                        $depurtureErr = $arrivalErr = "";
                                        $depurtureF = $arrivalF = false;
                                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                        if (empty($_POST["depurture"])) {
                                            $depurtureErr = "An depurture is required";
                                        }
                                        else{
                                            $depurture=$_POST["depurture"];
                                            $depurtureF=true;
                                        }
                                        if (empty($_POST["arrival"])) {
                                            $arrivalErr = "A arrival is required";
                                        }
                                        else{
                                            $arrival=$_POST["arrival"];
                                            $arrivalF=true;
                                        }
                                        if($depurtureF==true && $arrivalF==true){
                                          $userFound = false;

                                          $myfile = fopen("../data/addFlights.txt", "r") or die("Unable to open file!");

                                              while ($line = fgets($myfile)) {
                                                  $words = explode(",",$line);
                                                  if(strcmp($depurture,$words[0]) == 0 && strcmp($arrival,$words[1]) == 0 ) {
                                                     $time =  $words[2];
                                                  }
                                              }
                                              fclose($myfile);

                                        }

                                    }
                    ?>

                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >
                        <label for="depurture" >depurture</label>
                        <br>
                        <input type="text" name="depurture" id="depurture" placeholder="depurture" value="<?php echo $depurture?>" >
                        <br>
                        <label for="depurtureErr"><?php echo $depurtureErr;?></label>
                        <br>
                        <label for="arrival">arrival</label>
                        <br>
                        <input type="arrival" name="arrival" id="arrival" placeholder="arrival" value="<?php echo $arrival?>">
                        <br>
                        <label for="arrivalErr" ><?php echo $arrivalErr;?></label></label>

                        <br>
                        <input type="submit" value="search" name="search">

                        <h3>
                              <label for="arrivalErr" ><?php echo $time;?></label></label>
                        </h3>
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
