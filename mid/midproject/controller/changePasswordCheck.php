<?php
                    $currentPassword = $newPassword = $confirmPassword = '';
                    $currentPasswordErr = $newPasswordErr = $confirmPasswordErr = "";
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if (empty($_POST["currentPassword"])) {
                        $currentPasswordErr = "Current Password is required";
                    }
                    else{
                        $currentPassword=$_POST["currentPassword"];
                    }
                    if (empty($_POST["newPassword"])) {
                        $newPasswordErr = "New Password is required";
                    }
                    else{
                        $newPassword=$_POST["newPassword"];
                    }
                    if (empty($_POST["confirmPassword"])) {
                        $confirmPasswordErr = "Confirmation is required";
                    }
                    else{
                        $confirmPassword=$_POST["confirmPassword"];
                        if (!empty($_POST["newPassword"])) {
                            $val=strcmp($newPassword,$confirmPassword);
                            if($val==0){
                                $confirmPassword=$_POST["confirmPassword"];
                            }
                            else{
                                $confirmPasswordErr = "Password do not match, Please Re-enter";
                                $confirmPassword='';
                            }
                        }
                        else{
                            $confirmPassword=$_POST["confirmPassword"];
                        }

                    }
                }
?>
