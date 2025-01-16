function printText(){

    var text = document.getElementById("input").value;
    document.getElementById("print").innerHTML=text;
}

function checkUname(){
    var uname = document.getElementById("uname").value;
    const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

    if(uname=="" || !emailRegex.test(uname)){
        document.getElementById("error").innerHTML="enter valid  username";
        return false;
    }
    else{
        document.getElementById("error").innerHTML="";
    }
}
function validatePassword() {
    var pass = document.getElementById("pass").value;
    if(pass<3){
        document.getElementById("passError").innerHTML="enter valid  password";
        return false;
    }
}
function validation(){
  
    if(checkUname()==false || validatePassword()==false){
        return false;
    }
}