<?php
require("glogin.php");
include("connect.php");
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
  <link rel="stylesheet" type="text/css" href="test.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

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
      <li><a href="#" data-toggle="modal" data-target="#login-modal"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
      <li style="padding-right: 300px;"><a data-toggle="modal" data-target="#register_modal" href="#"><span class="glyphicon glyphicon-user"></span>Register</a></li>
    </ul>
    </div>
  </div>
</div>

<!-- log in modal start-->
   <!-- Modal -->
  <div class="modal fade" id="login-modal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Login</h4>
        </div>
        <div class="modal-body">
        <button type="button" class="fb-login-button" data-scope="public_profile,email">Log in with facebook</button>
        <?php  echo '<a class="login" href="' . $authUrl . '"><img src="images/google-login-button.png" /></a>';?>
        <hr><h4 style="text-align: center;">or</h4><hr>
          <form action="login.php" method="POST">
            <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" name="email">
            </div>
            <div class="form-group">
              <label for="pwd">Password:</label>
              <input type="password" class="form-control" name="password">
            </div>
           <div class="checkbox">
           <label><input type="checkbox"> Remember me</label>
           </div>
           <input type="submit" value="submit" name="submit" class="btn btn-primary">
           </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
<!-- log in modal close-->

<!-- Register modal for individual open -->
    <div class="modal fade" id="register_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
        <div class="loginmodal-container">
          <form action="register.php" method="post">
                      <h3 style="text-align: center;">Register</h3><br>
                      <table>
                        <tr>
                          <td><h2>First Name :</h2></td>
                          <td>
                            <input type="text" name="f_name" placeholder="Enter your first name" required/>
                          </td>
                        </tr>
                        <tr>
                          <td><h3>Last Name :</h3></td>
                          <td>
                            <input type="text" name="l_name" placeholder="Enter your last name" required/>
                          </td>
                        </tr>
                        <tr>
                          <td><h3>Email :</h3></td>
                          <td>
                            <input type="email" name="email" placeholder="Enter your email" required/>
                          </td>
                        </tr>
                        <tr>
                          <td><h3>Password :</h3></td>
                          <td>
                            <input type="password" name="password" placeholder="Enter your password" required/>
                          </td>
                        </tr>
                        <tr>
                          <td><h3>Confirm Password :</h3></td>
                          <td>
                            <input type="password" name="c_password" placeholder="Enter your password" required/>
                          </td>
                        </tr>
                        <tr>
                          <td colspan="2"><input type="submit" value="submit" /></td>
                        </tr>
                      </table>
                    </form>
          
          <div class="login-help">
          <a href="#" id="gsin">Register</a> - <a href="#">Forgot Password</a>
          </div>
        </div>
      </div>
      </div>   
    <!-- Register modal close -->

<div class="container-fluid">
  <div class="sect sectone"></div>
  <div class="subsect"></div>
  <div class="sect secttwo"></div>
  <div class="subsect"></div>
  <div class="sect sectthree"><a href="test.html">link</a></div>

</div>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    
    
   <!-- Latest compiled and minified JavaScript -->
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>