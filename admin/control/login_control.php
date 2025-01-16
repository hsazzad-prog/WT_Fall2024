<?php
include '../model/db.php';
session_start();

if(isset($_POST['login'])){
$uname=$_POST["username"];
$pass=$_POST["password"];

$mydb= new mydb();
$conobj=$mydb->openCon();
$result=$mydb->login("admin",$uname , $pass, $conobj);
if($result->num_rows > 0){
$_SESSION["uname"]=$uname;
header('Location: ../view/profile.php');
}
else{
    echo "cant login";
}
}
?>