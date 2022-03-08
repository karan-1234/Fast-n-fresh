<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="Home.css" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body>
    <header id="header1">
        <nav id="navbar">
            <span class="heads1"><img id="img1" src="images/groceries-ecommerce.png" alt="Icon"></span>
            
            <span class="heads1"><button onclick="func1()">Category</button></span>
            <span class="heads1"><button onclick="func2()">About Us</button></span>
            <span class="heads1"><button onclick="func3()">Contact Us</button></span>
            <span class="heads1"><button  onclick="func()">Cart</button></span>
            <span class="heads1"><a href="index.php">Logout</a></span>
        </nav>
    </header>
    <main>
     
            <h1 id="headsec1" >Welcome to Fast N Fresh</h1>
            <?php
            
             $name=$_REQUEST['Login'];
             echo "<center><h1>Hello $name</h1>  </center>";
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

             
             echo "<form method='post' action='about_us.php' style='display:none;'>             
             <input value=$name name='Login'></input>
             <button id='formSubmit3' type='submit'></button>
             </form>";

             
             echo "<form method='post' action='contactpage.php' style='display:none;'>             
             <input value=$name name='Login'></input>
             <button id='formSubmit4' type='submit'></button>
             </form>";

            
            ?> 

        <section>
            <h1 id="sec2h1">Best Deals</h1>
     
            <div class="flex-container">
        
            <div class="flex-box">
        
            <div class="product-card">
                <img src="images/fruits/watermelon.jpg" alt="fruit/watermelon">
                <div class="product-name">
                    <h1>Watermelon</h1>
                    <p>Fresh Fruit</p>
                    <p id="WatermelonP" class="product-price">Rs. 40 </p> <span><button id="Watermelon" class="buttons1"  type="button" value="input-button">Add to Cart</button></span> 
                </div>
            </div>
        
        </div>

        <div class="flex-box">
            <div class="product-card">
                <img src="images/milkproducts/wheyprrotein.jpg" alt="fruit/watermelon">
                <div class="product-name">
                    <h1 id="WheyH" >Whey Protein</h1>
                    <p>Milk Products</p>
                    <p id="WheyP" class="product-price">Rs. 266/100g </p> <span><button id="Whey" class="buttons1"  type="button" value="input-button">Add to Cart</button></span> 
                </div>
            </div>
        </div>

        <div class="flex-box">
            <div class="product-card">
                <img src ="images/milkproducts/horlicks.jpg" alt="fruit/watermelon" height="120px" width="120px">
                <div class="product-name">
                    <h1>Horlicks</h1>
                    <p>Milk Products</p>
                    <p id ="HorlicksP" class="product-price">Rs. 730/2kg </p>  <span><button class="buttons1"  id="Horlicks" type="button">Add to Cart</button></span>  
                </div>
            </div>
        </div>

        <div class="flex-box">
            <div class="product-card">
                <img src="images/vegetables/broccoli.jpg" alt="fruit/watermelon">
                <div class="product-name">
                    <h1>Broccoli</h1>
                    <p>vegetables</p>
                    <p class="product-price">Rs. 53/1pc(250-500g)<span><button class="buttons1"  type="button">Add to Cart</button></span></p>
                </div>
            </div>
        </div>

        <div class="flex-box">
            <div class="product-card">
                <img src="images/fruits/mango.jpg" alt="fruit/watermelon">
                <div class="product-name">
                    <h1>Mango</h1>
                    <p>Fruits</p>
                    <p class="product-price">Rs. 200/kg<span><button class="buttons1"  type="button">Add to Cart</button></span></p>
                </div>
            </div>
        </div>

        <div class="flex-box">
            <div class="product-card">
                <img src="images/vegetables/greenPepper.jpg" alt="fruit/watermelon">
                <div class="product-name">
                    <h1>Capsicum-Green</h1>
                    <p>vegetables</p>
                    <p class="product-price">Rs. 59/(500g)<span><button class="buttons1"  type="button">Add to Cart</button></span></p>
                </div>
            </div>
        </div>

        <div class="flex-box">
            <div class="product-card">
                <img src="images/fruits/tomato.jpg" alt="fruit/watermelon">
                <div class="product-name">
                    <h1>Tomato</h1>
                    <p>Fresh Fruit</p>
                    <p class="product-price">Rs. 65/kg<span><button class="buttons1"  type="button">Add to Cart</button></span></p>
                </div>
            </div>
        </div>

        <div class="flex-box">
            <div class="product-card">
                <img src="images/fruits/avocado.jpeg" alt="fruit/watermelon">
                <div class="product-name">
                    <h1>Avocado</h1>
                    <p>Fresh Fruit</p>
                    <p class="product-price">Rs. 200/pc<span><button class="buttons1"  type="button">Add to Cart</button></span></p>
                </div>
            </div>
        </div>

        </div>
        </section>
        <section class="sec3">
            <h1 class="sec3head1">Our Categories</h1>
            <div class="flex-container">
            <div class="flex-box">
            <div class="product-card">
                    <a href="Category.html"><img src="images.jpeg" alt="fruit/watermelon"></a>
                    <div class="product-name">
                        <h1>Fruits</h1>
                    </div>
            </div>
            </div>

            <div class="flex-box">
                <div class="product-card">
                        <a href="Category.html"><img src="thumb-1920-76811.jpg" alt="fruit/watermelon"></a>
                        <div class="product-name">
                            <h1>vegetables</h1>
                        </div>
                </div>
            </div>

            <div class="flex-box">
                <div class="product-card">
                        <a href="Category.html"><img src="tomatoes-apples-orange-fruit-juice-wallpaper-preview.jpg" alt="fruit/watermelon"></a>
                        <div class="product-name">
                            <h1>Beverages</h1>
                        </div>
                </div>
            </div>

            <div class="flex-box">
                <div class="product-card">

                        <a href="Category.html"><img src="depositphotos_163899960-stock-photo-plastic-bottles-of-body-care.jpg" alt="fruit/watermelon"></a>
                        <div class="product-name">
                            <h1>Beauty and Hygiene</h1>
                        </div>
                </div>
            </div>

            <div class="flex-box">
                <div class="product-card">

                        <a href="Category.html"><img src="food grains oil masala main catogry.png" alt="fruit/watermelon"></a>
                        <div class="product-name">
                            <h1>Food Grains and Oil</h1>
                        </div>
                </div>
            </div>

            <div class="flex-box">
                <div class="product-card">
                        <a href="Category.html"><img src="MondelezPortfolio_Lead.jpg" alt="fruit/watermelon"></a>
                        <div class="product-name">
                            <h1>Snacks and Branded Food</h1>
                        </div>
                </div>
            </div>
            </div>
        
        </section>
    </main>
    
    
    
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

    
</body>
</html>
