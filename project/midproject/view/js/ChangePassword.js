
    function validateForm(){
        var currentPassword = document.getElementById("currentPassword").value;
        var newPassword = document.getElementById("newPassword").value;
        var confirmPassword = document.getElementById("confirmPassword").value;
    //    document.getElementById("updatePassword").innerHTML="";
        if(currentPassword == "" ){
            document.getElementById("currentPasswordErr").innerHTML="Current Password is required";
        }
        else{
            document.getElementById("currentPasswordErr").innerHTML="";
        }
        if(newPassword == ""){
            document.getElementById("newPasswordErr").innerHTML="New Password is required";
        }
        else{
            document.getElementById("newPasswordErr").innerHTML="";
        }
        if(confirmPassword == ""){
            document.getElementById("confirmPasswordErr").innerHTML="Confirm Password is required";
        }
        else{
            document.getElementById("confirmPasswordErr").innerHTML="";
        }
        if(currentPassword == "" || newPassword == "" || confirmPassword == ""){
            return false;
        }
        else{
            if(newPassword == confirmPassword){
                document.getElementById("confirmPasswordErr").innerHTML = "";
                return true;
            }
            else{
                document.getElementById("confirmPasswordErr").innerHTML = "Password do not match, Please Re-enter";
                return false;
            }
        }

    }
