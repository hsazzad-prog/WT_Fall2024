<!DOCTYPE html>
<html>
<head>
    <title>
      Registartion
</title>
</head>

<body>
<h1> Registration </h1>
<hr>

<form action="../control/reg_control.php" method="post">
<table>
<tr><td>Username:</td><td> <input type="text" name="username"></td></tr> 
<tr><td>Password: </td><td><input type="password" name="password"></td></tr>
<tr><td>Select One: </td><td>
 
<input type="radio" name="gender" value="male">Male
<input type="radio" name="gender" value="female">Female
</td></tr>
<tr><td>Select One: </td><td>
<input type="checkbox" name="books" value="books" >Books
<input type="checkbox" name="sprots" value="sprots">sprots
</td></tr>

<tr><td> <input type="reset" name="reset" value="Reset" >
<input type="submit" name="submit" value="Submit" ></td></tr>
</table>
</form>


</body>


</html>