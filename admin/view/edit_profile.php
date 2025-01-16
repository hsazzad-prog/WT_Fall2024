<?php
include '../control/edit_profile_control.php';
?>


<html>

<body>
<form method="POST" enctype="multipart/form-data">
id <input type="text" name="id" value="<?php echo $id; ?>" readonly>
username <input type="text" name="username" value="<?php echo $username; ?>">
<?php if($gender=='male'){$male="checked";}
else{$female="checked";} 
?>
gender <input type="radio" name="gender" value="male" <?php echo $male; ?>> Male
<input type="radio" name="gender" value="female"  <?php echo $female; ?>> Female

file <img src="<?php echo $filename; ?>" width="80">
<input type="file" name="myfile">
<input type="submit" name="update" value="Update">
</form>
</body>

</html>