<?php
include("connect.php");
$text=$_POST['text'];
$email=$_POST['email'];
$sql="UPDATE activity SET text1='$text' WHERE email='$email'";
$result=mysqli_query($conn,$sql)or die("Sorry");
header("Location: home.php");

?>