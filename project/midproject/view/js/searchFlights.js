function validateForm(){
    var depurture = document.getElementById("depurture").value;
    var arrival = document.getElementById("arrival").value;

    if(depurture == "" ){
        document.getElementById("depurtureErr").innerHTML="deperture timr is required";
    }
    else{
        document.getElementById("depurtureErr").innerHTML="";
    }
    if(arrival == ""){
        document.getElementById("arrivalErr").innerHTML="arrival time  is required";
    }
    else{
        document.getElementById("arrivalErr").innerHTML="";
    }

    if(depurture == "" || arrival == ""){
        return false;
    }
    else{

            return true;

    }

}
