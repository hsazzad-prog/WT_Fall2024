
<!DOCTYPE html>
<html>
<head>
    <title>
        My Home Page
</title>
</head>

<body>

<?php
echo "<h1>Hello PHP</h1>";
?>


<table>
<tr>
<td><a href="home.php"> Home</a></td>
<td><a href="contactus.php"> Contact Us</a></td>
<td><a href="about.php"> About</a></td>
</tr>
</table>


<h1> Hello world</h1>
<a href="https://www.w3schools.com">Visit W3Schools</a>

<img src="../images/img1.jpg" >


</body>


</html>






foreach ($car as $x => $y) {
  echo "$x: $y <br>";
}