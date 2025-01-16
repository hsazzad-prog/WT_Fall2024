<?php
require '../control/reg_control.php';
?>



<!DOCTYPE html>
<html>
<head>
    <title>
      Registartion
</title>
<link rel="stylesheet" href="../css/mystyle.css">
</head>

<body>
<h1> Registration </h1>
<hr>

<form action="" method="post" enctype="multipart/form-data" onsubmit="return validation()">
<table>
<tr><td>Username:</td><td> <input type="text" id="uname" name="username"></td>
<td><p id="error"><?php echo $unanmeError; ?></p></td></tr> 
<tr><td>Password: </td><td><input type="password" name="password" id="pass"></td>
<td><p id="passError"></p></td></tr>
<tr><td>Select One: </td><td>
 
<input type="radio" name="gender" value="male">Male
<input type="radio" name="gender" value="female">Female
</td></tr>
<tr><td>Select One: </td><td>
<input type="checkbox" name="books" value="books" >Books
<input type="checkbox" name="sprots" value="sprots">sprots
</td></tr>
<tr><td>
<input type="file" name="images" >
</td></tr>
<tr><td> <input type="reset" name="reset" class="btnShape btnReset" value="Reset" >
<input type="submit" name="submit" class="btnShape btnSubmit" value="Submit" ></td></tr>
</table>
</form>

<input type="type" id="input" onkeyup="printText()">
<p id="print"></p>
<button onclick="printText()">Click</button>

<script src="../js/myjs.js"></script>
</body>


</html>