<?php
$servername = "localhost:3307";
$username = "root";
$password = "priyank21";

//Checking connection

$con = new mysqli($servername, $username, $password);
// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Create database

$sql = "CREATE DATABASE IF NOT EXISTS dbms2";
if ($con->query($sql) === TRUE) {
    // echo "Database created successfully<br>";

} else {
    echo "Error creating database: " . $conn->error;
}
$dbname='dbms2';
$conn = new mysqli($servername, $username, $password, $dbname);

//Creating table users

$sql="CREATE TABLE IF NOT EXISTS `users` (
  `user_id` varchar(64) NOT NULL,
  `f_name` text NOT NULL,
  `l_name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (user_id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
";

if ($conn->query($sql) === TRUE) {
    // echo "Table users  created successfully<br>";
} else {
    echo "Error creating table: " . $con->error;
}

$sql="CREATE TABLE IF NOT EXISTS `activity` (
  `id` int(11) AUTO_INCREMENT,
  `post_id` varchar(30) NOT NULL,
  `user_id` varchar(64) NOT NULL,
  `email` varchar(30) NOT NULL,
  `text1` varchar(120) NOT NULL,
  `date1` date NOT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (user_id) REFERENCES users(user_id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;";

if ($conn->query($sql) === TRUE) {
    // echo "Table users  created successfully<br>";
} else {
    echo "Error creating table: " . $con->error;
}


?>

