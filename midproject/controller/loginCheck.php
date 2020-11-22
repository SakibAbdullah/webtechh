<?php
                    $id = $password = '';
                    $idErr = $passwordErr = "";
                    $idF = $passwordF = false;
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if (empty($_POST["id"])) {
                        $idErr = "An Id is required";
                    }
                    else{
                        $id=$_POST["id"];
                        $idF=true;
                    }
                    if (empty($_POST["password"])) {
                        $passwordErr = "A password is required";
                    }
                    else{
                        $password=$_POST["password"];
                        $passwordF=true;
                    }
                    if($idF==true && $passwordF==true){
                        session_start();
                        $_SESSION['id']=$id;
                        header('Location:/midproject/view/home.php');
                        exit;
                    }

                }
?>
