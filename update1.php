<?php
include("connect.php");
$text=$_POST['text'];
$post_id=$_POST['post_id'];
echo "$text  $post_id";
$sql="UPDATE activity SET text1='$text' WHERE post_id='$post_id'";
$result=mysqli_query($conn,$sql)or die("Sorry");
header("Location: home.php");

?>
