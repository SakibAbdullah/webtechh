function validateForm(){
    var id = document.getElementById("id").value;
    var name = document.getElementById("name").value;
    var password = document.getElementById("password").value;
    if(id == "" ){
        document.getElementById("idErr").innerHTML="Current Password is required";
    }
    else{
        document.getElementById("idErr").innerHTML="";
    }
    if(name == ""){
        document.getElementById("nameErr").innerHTML="New Password is required";
    }
    else{
        document.getElementById("nameErr").innerHTML="";
    }
    if(password == ""){
        document.getElementById("passwordErr").innerHTML="Confirm Password is required";
    }
    else{
        document.getElementById("passwordErr").innerHTML="";
    }
    if(id == "" || name == "" || password == ""){
        return false;
    }
    else{

            return true;

    }

}
