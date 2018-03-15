<?php
session_start();
if(!isset($_SESSION['email']))
{

}
include("connect.php");
$email=$_SESSION['email'];
$no=1;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>ToDo</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="modal.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>
<body>
<script type="text/javascript" src="./fbapp/fb.js"></script>
<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
         <span class="sr-only">Toggle navigation</span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
       </button>
      <a href="#" class="navbar-brand" style="padding-left: 300px;">ToDo</a>
    </div>
    <div class="navbar-collapse collapse">
    <ul class="nav navbar-nav">
      <li style="padding-left: 300px"><a href="#">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Info</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php">
          <span class="glyphicon glyphicon-log-out">Log-out</span>
        </a></li>
    </ul>
    </div>
  </div>
</div>
<br><br><br>
<div class="container-fluid">
<form action="post.php" method="post">
  <div class="form-group">
    <textarea class="form-control" placeholder="What's in your mind" name="text"></textarea>
    <br>
    <button type="submit" class="btn btn-info btn-block">Post it</button>
  </div>
</form>
</div>
<div class="container-fluid">
  <div class="row">
  <div class="col-md-10">
  	<?php
       $query="SELECT * FROM activity WHERE email='$email'AND text1 IS NOT NULL";
       $rs=mysqli_query($conn,$query);
       while($row =mysqli_fetch_array($rs))
       {
				 $post_id=$row['post_id'];
       echo "<div class='col-md-4'>";
         echo "<div class='panel panel-info'>";
           echo "<div class='panel-heading'>";
             echo $no++;
             echo "<p style='float:right'>".$row['date1']."</p>";
          echo "</div>";
           echo "<div class='panel-body'>";
             echo $row['text1'];
           echo "</div>";
           $no=$row['id'];
           echo "<div class='panel-heading' style='height: 100px;'>";
             echo "<div class='col-md-6'>";
             echo "<form action='delete.php' method='POST'>";
             echo "<input type='hidden' name='id' value='$no'>";
             echo "<input type='submit' value='delete'>";
             echo "</form>";
             echo "</div>";
             echo "<div class='col-md-6'>";
             echo "<form action='update.php' method='POST'>";
             echo "<input type='hidden' name='post_id' value='$post_id'>";
             echo "<input type='submit' value='update'>";
             echo "</form>";
             echo "</div>";
           echo "</div>";
         echo "</div>";
       echo "</div>";
       }
    ?>
  </div>
  <div class="col-md-2">
  	<ul class="nav nav-pills nav-stacked">
      <?php
        $query1="SELECT user_id,f_name,l_name FROM users WHERE email!='$email'";
        $result=mysqli_query($conn,$query1);
        while($ro =mysqli_fetch_array($result))
        {
        	$f_name=$ro['f_name'];
          $l_name=$ro['l_name'];
          $name=$f_name." ".$l_name;
          $user_id=$ro['user_id'];
        	echo "<form action='show.php' method='POST'>";
        	echo "<input type='hidden' name='user_id' value='$user_id'>";
        	echo "<input type='submit' value='$name' name='submit1'>";
        	echo "</form>";
        }
      ?>
    </ul>
  </div>

  </div>
</div>



  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

   <!-- Latest compiled and minified JavaScript -->
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
