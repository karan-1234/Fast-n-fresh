<!DOCTYPE html>
<html>
  
<head>
    <title>Insert Page page</title>
    <link rel="stylesheet" href="Home.css" type="text/css">
</head>
  
<body>
    <center>




<?php
$mysqli = new mysqli("localhost","root","","login");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

$email =  $_REQUEST['email'];
$password = $_REQUEST['password'];

//echo $email,$password;

// Perform query
if ($result = $mysqli -> query("SELECT * FROM Login where email='$email' and password='$password' ")) {
  if($result -> num_rows ==0 ){
      echo "Invalid Username or password";
      echo "<h1>Go To <a href='index.php'>Login page</a></h1>";
  }
  else{
      echo "Login succesful";
      echo "<h1>Go To <a href='Home.html'>Home page</a></h1>"; 
  }
  //echo $result -> num_rows;
  
  $result -> free_result();
}

$mysqli -> close();
?>

</center>
</body>
  
</html>