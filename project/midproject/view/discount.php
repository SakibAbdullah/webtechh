<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Discount</title>
    <link rel="stylesheet" href="style.css">
      <script src="../view/js/Discount.js"></script>
</head>
<body>
  <?php
      require('../controller/discountController.php');
  ?>
    <div class="div1">
        <div>
          <header class="header">
           <p> <b>Air Ticket Booking System</b> </p>
          </header>
            <main>
                <div class="div3">
                    <p class="pageTitle">Discount</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit="return validateForm()" method="post">
                        <label for="discount">Enter Code</label>
                        <br>
                        <input type="text" name="discount" id="discount" placeholder="Enter discount Code" value="<?php echo $addDiscount?>">
                        <br>
                        <label for="discountErr"id="discountErr"><?php echo $addDiscountErr;?></label>
                        <br>
                        <input type="submit" value="Add Discount" name="addDiscountButton" class="successBtn">
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
