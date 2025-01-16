<?php
include '../model/db.php';
$male=$female="";
echo $_GET["id"];
$mydb = new mydb();
$conobj=$mydb->openCon();

if(isset($_POST["update"])){
    if($_FILES["myfile"]["name"]!=""){
        move_uploaded_file($_FILES["myfile"]["tmp_name"],
        "../uploads/".$_FILES["myfile"]["name"]);
    }
$result=$mydb->updateUserbyID("admin",$conobj,$_POST["id"], $_POST["username"]
, $_POST["gender"], "../uploads/".$_FILES["myfile"]["name"]);

if($result==true)
{
    echo "updated successfully";
}
else{ echo "failed to update"; }
}


$result=$mydb->searchUserbyID("admin",$conobj,$_GET["id"]);
if($result->num_rows>0){
    foreach($result as $row){
        $id=$row["id"];
        $username=$row["username"];
        $gender = $row["gender"];
        $interst= $row["interest"];
        $filename = $row["filename"];
    }
}

?>