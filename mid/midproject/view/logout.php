<?php
session_start();
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['logout'])) {
          session_destroy();
            header('Location:/midproject/view/login.php');
            exit;
        }

    }
?>
