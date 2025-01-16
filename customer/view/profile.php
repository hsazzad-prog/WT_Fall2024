<?php 
session_start();
if(!isset($_SESSION["uname"]))
{
header("Location: ../view/registration.php");
}
?>

<html>

<body>
hello <?php echo $_SESSION["uname"]; ?>

<a href="../control/session_destroy.php">Logout</a>


</body>


</html>