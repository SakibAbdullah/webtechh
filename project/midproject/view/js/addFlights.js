function validateForm(){
    var depurture = document.getElementById("depurture").value;
    var arrival = document.getElementById("arrival").value;
    var time = document.getElementById("time").value;
    if(depurture == "" ){
        document.getElementById("depurtureErr").innerHTML="deperture $timeis required";
    }
    else{
        document.getElementById("depurtureErr").innerHTML="";
    }
    if(arrival == ""){
        document.getElementById("arrivalErr").innerHTML="arrival time is required";
    }
    else{
        document.getElementById("arrivalErr").innerHTML="";
    }
    if(time == ""){
        document.getElementById("timeErr").innerHTML="time is required";
    }
    else{
        document.getElementById("timeErr").innerHTML="";
    }
    if(depurture == "" || arrival == "" || time == ""){
        return false;
    }
    else{

            return true;

    }

}
