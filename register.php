<?php
include("connect.php");
$f_name=$_POST['f_name'];
$l_name=$_POST['l_name'];
$email=$_POST['email'];
$password=$_POST['password'];
$sql="SELECT email FROM users";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
if ($row['email']==$email) {
	die("Email address already exist");
}
$user_id=rand(1,100000000);
echo $user_id;
mysqli_query($conn,"INSERT INTO users(f_name,l_name,email,password,user_id)VALUES('$f_name','$l_name','$email','$password','$user_id')")or die(mysqli_error($conn));
header("Location: index.php");
?>