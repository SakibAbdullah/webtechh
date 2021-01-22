function validateForm(){
   var discount = document.getElementById("discount").value;
   if(discount == "" ){
       document.getElementById("discountErr").innerHTML="An amount is required";
       return false;
   }
   else{
       document.getElementById("discountErr").innerHTML="";
       return true;
   }
}
