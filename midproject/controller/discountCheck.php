<?php
    $addDiscount = '';
    $addDiscountErr = "";
    $removeDiscount = '';
    $removeDiscountErr = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['addDiscountButton'])) {
            if (empty($_POST["discount"])) {
                $addDiscountErr = "An amount is required";
            }
            else{
                    $addDiscount=$_POST["discount"];
                    $addDiscountErr="Discount Added"; 
            }
        }
}
?>
