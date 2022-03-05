<!DOCTYPE html>
<html>
  
<head>
    <title>Insert Page page</title>
</head>
  
<body>
    <center>




<?php


$conn = mysqli_connect("localhost", "root", "", "login");
          
          // Check connection
          if($conn === false){
              die("ERROR: Could not connect. " 
                  . mysqli_connect_error());
          }
            
          // Taking all 5 values from the form data(input)
          $first_name =  $_REQUEST['fname'];
          $last_name = $_REQUEST['lname'];
          $email =  $_REQUEST['email'];
          $password = $_REQUEST['password'];
          $mno = $_REQUEST['mno'];
            
          // Performing insert query execution
          // here our table name is college
          $sql = "INSERT INTO Login  VALUES ('$first_name', 
              '$last_name','$email','$password','$mno')";
           if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully." 
                . " Please browse your localhost php my admin" 
                . " to view the updated data
                </h3>
                <br>
                <h1>Go To <a href='index.php'>Login page</a></h1>
                
                "; 
               

        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }  
        $sql = "SELECT * FROM Login";
        
          // Close connection
          mysqli_close($conn);
?>

</center>
</body>
  
</html>