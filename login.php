<?php
require("connect.php");
if (isset($_POST['submit'])) 
  {
	session_start();
    $_SESSION['password']=$password=$_POST['password'];
    $_SESSION['email']=$email=$_POST['email'];
    $sql="SELECT * FROM users WHERE email='$email' and password='$password'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result);
    $count=mysqli_num_rows($result);
    $uid=$row['user_id'];
    if($count>=1)
       { 
        echo "Login success";
        $_SESSION['email']=$row['email'];
        $_SESSION['password']=$row['password'];
        header("Location: home.php?u=$uid");
        }
    else
        {
        die("Your Login Name or Password is invalid");
        }
    }
if(isset($_POST['submit1']))
{
  $email1=$_POST['email1'];
  session_start();
  session_unset();
  header("Location: home.php");
}

?>