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
      
    $sql = "SELECT * FROM Login Where email='$email' and password='$password'";
    $result = $mysqli->query($sql);
    if ($result->num_rows > 0) {
      // output data of each row
      $first_name="";
      while($row = $result->fetch_assoc()) {
        $first_name=$row["fname"];
      }
    }
    echo "Login succesful";
    session_start();
    $_SESSION['Login'] = $first_name;  
     echo" 
     <form method='post' action='home.php'>
       <input name='Login' value=$first_name style='display:none;' ></input> 
       <h1>Hello $first_name</h1>
        <button type='submit'>Go To Home Page</button>
      </form>

      "
      ; 
  }
  //echo $result -> num_rows;
  
  $result -> free_result();
}

$mysqli -> close();
?>

</center>
</body>
  
</html>