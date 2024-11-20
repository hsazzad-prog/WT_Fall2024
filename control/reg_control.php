<?php
$unanmeError="";
if($_SERVER["REQUEST_METHOD"] == "POST"){
$hasError=0;

$username = $_REQUEST["username"];
$password= $_REQUEST["password"];
if(empty($username))
{
    $unanmeError= "Please enter a username";
    $hasError++;
}
else{
    echo $username;
}
echo  "<br>";
if($password == "")
{
    echo "Please enter a password";
    $hasError++;
}
else{
echo $password;
}
echo  "<br>";
if(empty($_REQUEST["gender"])){
   
   echo "Please select a gender";
   $hasError++;
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
    $hasError++;
 }

echo $_FILES["images"]["name"];
move_uploaded_file($_FILES["images"]["tmp_name"],
"../uploads/".$_FILES["images"]["name"]
);

if( $hasError>0)
{
    echo "Please insert correct data";
}
else{

    $data = ["username" => $_REQUEST["username"], "password" => $_REQUEST["password"]];
$json = json_encode($data); // Encode to JSON

file_put_contents("../files/userdata.json",$json);
}

}

?>