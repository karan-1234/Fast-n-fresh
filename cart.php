
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <title>Home</title>
    <link rel="stylesheet" href="Home.css" type="text/css">
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<?php

if(isset($_REQUEST['product'])){

$t=time();
  
  

$price =  $_REQUEST['price'];
$product = $_REQUEST['product'];
$name=$_REQUEST['Login'];
$date=date_default_timezone_get();

echo "<center><h1>Hello $name Your cart is </h1> </center>";

$mysqli = new mysqli("localhost","root","","login");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

$sql = "INSERT INTO cart  VALUES ('$product', '$price','$name','$t');";
$result = $mysqli->query($sql);

$sql1="SELECT * FROM cart WHERE User='$name'";
$result = $mysqli->query($sql1);


echo "<table class='table'><thead>
  <tr>
    <th scope='col'>No.</th>
    <th scope='col'>Product</th>
    <th scope='col'>Price</th>
    <th scope='col'></th>
  </tr>
</thead>
<tbody>
</table>";

$cnt=0;
$total=0;
while($row = $result->fetch_assoc()) {
   $n1=$row['Pname'];
   $n2=$row['Price'];
   $n3=$row['time'];
   $cnt=$cnt+1;
   $total=$total+$n2;
echo "<table class='table'><thead>
  <tr>
    <th scope='col' >$cnt</th>
    <th scope='col'>$n1</th>
    <th scope='col'>Rs .$n2</th>
    <th scope='col'>
    
    <form action='cart.php' method='post'>
       <input name='Pname' value=$n1  style='display:none;'></input>
       <input name='name' value=$name style='display:none;'></input>
       <input name='time' value=$n3 style='display:none;'></input>
       <button type='submit'>Remove From Cart</button>
    </form>
    
    </th>

    

  
    </tr>
</thead>
<tbody>
</table>";

}

echo "<center><h1>Your Total Amount is Rs. $total</h1></center>";
echo "<center><h1>Total item $cnt</h1></center>";
echo "'<button>Make Purchase</button>";
}


else{


$mysqli = new mysqli("localhost","root","","login");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
}



$name=$_REQUEST['name'];
$date=date("Y/m/d");
echo "<center><h1>Hello $name Your cart is </h1> </center>";

if(isset($_REQUEST['Pname'])){
  $product = $_REQUEST['Pname'];
  $time=$_REQUEST['time'];
  $sql1="DELETE FROM cart WHERE User='$name' and time='$time' and Pname='$product'";
  $result = $mysqli->query($sql1);
  
echo "<form method='post' action='home.php' style='display:none;'>  
<input value=$name name='Login'></input>
<button id='formSubmit' type='submit'></button>
</form>";
echo "<script>alert('$product Removed from cart');document.getElementById('formSubmit').click()</script>";
}

$sql1="SELECT * FROM cart WHERE User='$name'";
$result = $mysqli->query($sql1);


echo "<table class='table'><thead>
  <tr>
    <th scope='col'>No.</th>
    <th scope='col'>Product</th>
    <th scope='col'>Price</th>
    <th scope='col'></th>
  </tr>
</thead>
<tbody>
</table>";


$cnt=0;
$total=0;
while($row = $result->fetch_assoc()) {
   $n1=$row['Pname'];
   $n2=$row['Price'];
   $n3=$row['time'];
   $cnt=$cnt+1;
   $total=$total+$n2;
echo "<table class='table'><thead>
  <tr>
    <th scope='col' >$cnt</th>
    <th scope='col'>$n1</th>
    <th scope='col'>Rs .$n2</th>
    <th scope='col'>
    
    <form action='cart.php' method='post'>
       <input name='Pname' value=$n1  style='display:none;'></input>
       <input name='name' value=$name style='display:none;'></input>
       <input name='time' value=$n3 style='display:none;'></input>
       <button type='submit'>Remove From Cart</button>
    </form>
    
    </th>

    

  
    </tr>
</thead>
<tbody>
</table>";

}

echo "<center><h1>Your Total Amount is Rs. $total</h1></center>";
echo "<center><h1>Total -item $cnt</h1></center>";
echo "'<button>Make Purchase</button>";


}

?>  

</body>
</html>
