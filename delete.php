<?php
include("connect.php");
session_start();
$email=$_SESSION['email'];
$id=$_POST['id'];
echo $email;
$sql="DELETE FROM activity WHERE id='$id'";
 $result=mysqli_query($conn,$sql)or die("Sorry");
 header("Location: home.php");

?>