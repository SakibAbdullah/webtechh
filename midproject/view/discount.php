<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Discount</title>
</head>
<body>
    <div>
        <div>
          <header>
           <p> <b>Air Ticket Booking System</b> </p>
          </header>
            <main>
                <div>
                    <p>Discount</p>
                    <?php
                        require('../controller/discountCheck.php');
                    ?>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                        <label for="discount">Enter Code</label>
                        <br>
                        <input type="text" name="discount" id="discount" placeholder="Enter discount Code" value="<?php echo $addDiscount?>">
                        <br>
                        <label for="discountErr"><?php echo $addDiscountErr;?></label>
                        <br>
                        <input type="submit" value="Add Discount" name="addDiscountButton">
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
