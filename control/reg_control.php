<?php
//echo $_POST["username"];
$username = $_REQUEST["username"];
$password= $_REQUEST["password"];
if(empty($username))
{
    echo "Please enter a username";
}
else{
    echo $username;
}
echo  "<br>";
if($password == "")
{
    echo "Please enter a password";
}
else{
echo $password;
}
echo  "<br>";
if(empty($_REQUEST["gender"])){
   
   echo "Please select a gender";
}
else{
    echo $_REQUEST["gender"];
}
echo  "<br>";
if(isset($_REQUEST["books"]) || 
isset($_REQUEST["sprots"])
){
    echo "selected";
   
 }
 else{
    echo "Please select a hobbies";
 }


?>



