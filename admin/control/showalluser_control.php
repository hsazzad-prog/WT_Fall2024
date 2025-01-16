<?php
include '../model/db.php';

$mydb = new mydb();
$conobj =$mydb->openCon();
$result = $mydb->showAllUsers("admin",$conobj);
if($result->num_rows > 0){
    
foreach($result as $row){
echo $row["id"];
echo $row["username"];
echo $row["gender"];
echo $row["interest"];
echo "<img src='".$row["filename"]."' width=80>";
echo "<a href='../view/edit_profile.php?id=".$row["id"]."' >Edit</a>";
echo "<a href='' >Delete</a>";
echo "<br>";
}
}
else{
echo "No users found";
}


?>