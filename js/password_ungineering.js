function myfun(){
    alert("home");
    var a = document.getElementById("password").value;
    var b = document.getElementById("confirm-password").value;
    if (a==""){
        document.getElementById("message").innerHTML="please enter the password" ;
        return false;
    }
    if(a!=b){
       document.getElementById("message").innerHTML="** password incorrect **" ;
       return false; 
    }
}

