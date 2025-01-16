<?php

class mydb{

    function openCon(){
$dbhost="localhost";
$dbusername="root";
$dbpassword="";
$dbname="seci";
$connobject=new mysqli($dbhost, $dbusername, $dbpassword,$dbname);
return $connobject;    
}
function addAdmin($table,$username,
$password,$gender,$interest,$filename,
$connobject ){
    $sql="INSERT INTO $table (
    username, password,gender, interest, filename) 
    VALUES 
    ('$username','$password',
    '$gender','$interest','$filename')";
   return $connobject->query($sql);
   
    }
    function login($table, $username, $password, $connobject){
        $sql="SELECT username, password FROM $table
        WHERE username='$username' AND password='$password'";
        $result=$connobject->query($sql);
        return $result;
    }
    function showAllUsers($table,$connobject){
        $sql="SELECT * FROM $table";
        $result=$connobject->query($sql);
        return $result;
    }

function searchUserbyID($table,$connobject,$id){
    $sql="SELECT * FROM $table WHERE id='$id'";
    $result=$connobject->query($sql);
    return $result;
}
function updateUserbyID($table,$connobject,$id, $username, $gender, $filename){
    $sql="UPDATE $table SET username='$username', gender='$gender', filename='$filename' WHERE
    id = '$id'";
    $result=$connobject->query($sql);
    return $result;
}

}




?>