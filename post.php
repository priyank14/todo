<?php
include("connect.php");
session_start();
$text=$_POST['text'];
$email=$_SESSION['email'];

$sql="SELECT user_id FROM users WHERE email='$email'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
$user_id=$row['user_id'];
$date = date('Y/m/d H:i:s');
if(empty($text))
{
	header("Location: home.php");
	die();
}
$post_id=rand(1,100000000);
echo "$post_id  $text $user_id ";
$reg_query=mysqli_query($conn,"INSERT INTO activity(post_id,user_id,email,text1,date1)VALUES('$post_id','$user_id','$email','$text','$date')")or die(mysqli_error($conn));
header("Location: home.php");
?>
