<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About us</title>

  <link rel="stylesheet" href="about us.css">
</head>

<body>
  

  <header id="header1">
    <nav id="navbar">
        <span class="heads1"><img id="img1" src="images/groceries-ecommerce.png" alt="Icon"></span>

        <span class="heads1"><button onclick="func2()">Home</button></span>
        <span class="heads1"><button onclick="func1()">Category</button></span>
            <span class="heads1"><button onclick="func3()">Contact Us</button></span>
            <span class="heads1"><button  onclick="func()">Cart</button></span>
            <span class="heads1"><a href="index.php">Logout</a></span>
    </nav>
</header>


<?php
            
            $name=$_REQUEST['Login'];

            echo "<form method='post' action='cart.php' style='display:none;'>
            
            <input value=$name name='name'></input>
            <input value='' name='product'></input>
            <input value='' name='price'></input>
            <input value=$name name='Login'></input>
            <button id='formSubmit' type='submit'></button>
            </form>";

            
            echo "<form method='post' action='cart.php' style='display:none;'>
            
            <input value=$name name='name'></input>
            <button id='formSubmit1' type='submit'></button>
            </form>";

            
            echo "<form method='post' action='Category.php' style='display:none;'>             
            <input value=$name name='Login'></input>
            <button id='formSubmit2' type='submit'></button>
            </form>";

            
            echo "<form method='post' action='Home.php' style='display:none;'>             
            <input value=$name name='Login'></input>
            <button id='formSubmit3' type='submit'></button>
            </form>";

            
            echo "<form method='post' action='contactpage.php' style='display:none;'>             
            <input value=$name name='Login'></input>
            <button id='formSubmit4' type='submit'></button>
            </form>";

           
           ?> 


<div class="container">
    <h1 class="heading">Meet Our Team</h1>

    <div class="profiles">
      <div class="profile">
        <img src="dhiraj.jpeg" class="profile-img">

        <h3 class="user-name">Dhiraj</h3>
        <h5>Creative Director</h5>
        <p></p>
      </div>
      <div class="profile">
        <img src="karan.jpeg" class="profile-img">

        <h3 class="user-name">Karan</h3>
        <h5>UI Developer</h5>
        <p></p>
      </div>
      <div class="profile">
        <img src="bharat.jpeg" class="profile-img">

        <h3 class="user-name">Bharat</h3>
        <h5>UX Developer</h5>
        <p></p>
      </div>
    </div>
  </div>
</body>


    
<script>
        $(document).ready(function () {
            $('button').click(function(){
               
            var id = $(this).attr('id');
            id1=id+'P'
            price=document.getElementById(id1).innerHTML
            price=price.toString()
            
            k=""
            for(i=0;i<price.length;i++){
                if(!isNaN(price[i]))
                 k+=price[i]
                if(price[i]=='/')
                 break 

            }
    
            document.getElementsByName('product')[0].value=id;
            document.getElementsByName('price')[0].value=k;
            document.getElementById('formSubmit').click();  
            
        
            });
        });

        function func(){
            document.getElementById('formSubmit1').click();
        }

        function func1(){
            document.getElementById('formSubmit2').click();
        }

        function func2(){
            document.getElementById('formSubmit3').click();
        }

        function func3(){
            document.getElementById('formSubmit4').click();
        }



    </script>

</html>
