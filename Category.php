<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category</title>
    <link rel="stylesheet" href="Category.css" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <style>
.dropbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px;
  font-size: 16px;
  width:100vw;
  border: none;
  cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: #3e8e41;
}

#myInput {
  box-sizing: border-box;
  background-image: url('searchicon.png');
  background-position: 14px 12px;
  background-repeat: no-repeat;
  font-size: 16px;
  padding: 14px 20px 12px 45px;
  border: none;
  border-bottom: 1px solid #ddd;
  width:100vw;
}

#myInput:focus {outline: 3px solid #ddd;}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f6f6f6;
  min-width: 230px;
  overflow: auto;
  border: 1px solid #ddd;
  z-index: 1;

}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;

}



.dropdown a:hover {background-color: #ddd;}

.show {display: block;}
</style>

</head>
<body>
    <header id="header1">
        <nav id="navbar">
            <span class="heads1"><img id="img1" src="images/groceries-ecommerce.png" alt="Icon"></span>
            
         
            <span class="heads1"><button onclick="func1()">Home</button></span>
            <span class="heads1"><button onclick="func2()">About Us</button></span>
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

            
            echo "<form method='post' action='Home.php' style='display:none;'>             
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



    <mains>
        <section class="cate-sec">
            <h1>Fruits</h1>
            <div class="flex-container">
                <div class="flex-box">
                    <div class="product-card">
                        <img src="images/fruits/watermelon.jpg" alt="fruit/watermelon">
                        <div class="product-name">
                            <h1>Watermelon</h1>
                            <p>Fresh Fruit</p>
                            <p class="product-price">Rs.40<span><button class="buttons1" type="button" value="input-button">Add to Cart</button></span></p>
                        </div>
                    </div>
                </div>

                <div class="flex-box">
                    <div class="product-card">
                        <img src="images/fruits/avocado.jpeg" alt="fruit/avocado">
                        <div class="product-name">
                            <h1>Avocado</h1>
                            <p>Fresh Fruit</p>
                            <p class="product-price">Rs.269/pc<span><button class="buttons1" type="button" value="input-button">Add to Cart</button></span></p>
                        </div>
                    </div>
                </div>

                <div class="flex-box">
                    <div class="product-card">
                        <img src="images/fruits/banana.jpg" alt="fruit/banana">
                        <div class="product-name">
                            <h1>Banana</h1>
                            <p>Fresh Fruit</p>
                            <p class="product-price">Rs. 17/500g<span><button class="buttons1" type="button" value="input-button">Add to Cart</button></span></p>
                        </div>
                    </div>
                </div>

                <div class="flex-box">
                    <div class="product-card">
                        <img src="images/fruits/kiwi.jpg" alt="fruit/kiwi">
                        <div class="product-name">
                            <h1>kiwi</h1>
                            <p>Fresh Fruit</p>
                            <p class="product-price">Rs. 168/200g<span><button class="buttons1" type="button" value="input-button">Add to Cart</button></span></p>
                        </div>
                    </div>
                </div>

                <div class="flex-box">
                    <div class="product-card">
                        <img src="images/fruits/mango.jpg" alt="fruit/mango">
                        <div class="product-name">
                            <h1>Mango</h1>
                            <p>Fresh Fruit</p>
                            <p class="product-price">Rs. 400/dozen<span><button class="buttons1" type="button" value="input-button">Add to Cart</button></span></p>
                        </div>
                    </div>
                </div>

                <div class="flex-box">
                    <div class="product-card">
                        <img src="images/fruits/pomegranate.jpg" alt="fruit/pomegranate">
                        <div class="product-name">
                            <h1>Pomegranate</h1>
                            <p>Fresh Fruit</p>
                            <p class="product-price">Rs. 130/kg<span><button class="buttons1" type="button" value="input-button">Add to Cart</button></span></p>
                        </div>
                    </div>
                </div>

                <div class="flex-box">
                    <div class="product-card" id="Tomato">
                        <img src="images/fruits/tomato.jpg" alt="fruit/tomato">
                        <div class="product-name">
                            <h1>Tomato</h1>
                            <p>Fresh Fruit</p>
                            <p class="product-price">Rs. 30/kg<span><button class="buttons1" type="button" value="input-button">Add to Cart</button></span></p>
                        </div>
                    </div>
                </div>

                <div class="flex-box">
                    <div class="product-card">
                        <img src="images/fruits/apple.jpg" alt="fruit/apple">
                        <div class="product-name">
                            <h1>Apple</h1>
                            <p>Fresh Fruit</p>
                            <p class="product-price">Rs. 30/pc<span><button class="buttons1" type="button" value="input-button">Add to Cart</button></span></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="cate-sec">
            <h1>Vegetables</h1>
            <div class="flex-container">
                <div class="flex-box">
                    <div class="product-card">
                        <img src="images/vegetables/brinjal.jpg" alt="vegetables/brinjal">
                        <div class="product-name">
                            <h1>Brinjal</h1>
                            <p>Fresh Vegetables</p>
                            <p class="product-price">Rs. 40/kg<span><button class="buttons1" type="button" value="input-button">Add to Cart</button></span></p>
                        </div>
                    </div>
                </div>

                <div class="flex-box">
                    <div class="product-card">
                        <img src="images/vegetables/broccoli.jpg" alt="vegetables/broccoli">
                        <div class="product-name">
                            <h1>Broccoli</h1>
                            <p>Fresh Vegetables</p>
                            <p class="product-price">Rs. 60/kg<span><button class="buttons1" type="button" value="input-button">Add to Cart</button></span></p>
                        </div>
                    </div>
                </div>

                <div class="flex-box">
                    <div class="product-card">
                        <img src="images/vegetables/cauliflower.jpg" alt="vegetables/cauliflower">
                        <div class="product-name">
                            <h1>Cauliflower</h1>
                            <p>Fresh Vegetables</p>
                            <p class="product-price">Rs. 43/pc<span><button class="buttons1" type="button" value="input-button">Add to Cart</button></span></p>
                        </div>
                    </div>
                </div>

                <div class="flex-box">
                    <div class="product-card">
                        <img src="images/vegetables/greenPepper.jpg" alt="vegetables/greenpep">
                        <div class="product-name">
                            <h1>Green-Pepper</h1>
                            <p>Fresh Vegetables</p>
                            <p class="product-price">Rs. 90/kg<span><button class="buttons1" type="button" value="input-button">Add to Cart</button></span></p>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section class="cate-sec">
            <h1>Beverages</h1>
            <div class="flex-container">
                <div class="flex-box">
                    <div class="product-card">
                        <img src="img/beverages/102830_21-bournvita-chocolate-health-drink-bournvita.jpg" alt="vegetables/brinjal">
                        <div class="product-name">
                            <h1>Bournvita</h1>
                            <p>Beverages</p>
                            <p class="product-price">Rs. 354/kg<span><button class="buttons1" type="button" value="input-button">Add to Cart</button></span></p>
                        </div>
                    </div>
                </div>

                <div class="flex-box">
                    <div class="product-card">
                        <img src="img/beverages/102871_7-red-label-tea.jpg" alt="vegetables/brinjal">
                        <div class="product-name">
                            <h1>Red label tea</h1>
                            <p>Beverages</p>
                            <p class="product-price">Rs. 460/kg<span><button class="buttons1" type="button" value="input-button">Add to Cart</button></span></p>
                        </div>
                    </div>
                </div>


                <div class="flex-box">
                    <div class="product-card">
                        <img src="img/beverages/137936_11-taj-mahal-tea.jpg" alt="vegetables/brinjal">
                        <div class="product-name">
                            <h1>Taj mahal tea</h1>
                            <p>Beverages</p>
                            <p class="product-price">Rs. 710/kg<span><button class="buttons1" type="button" value="input-button">Add to Cart</button></span></p>
                        </div>
                    </div>
                </div>


                <div class="flex-box">
                    <div class="product-card">
                        <img src="img/beverages/231187_8-nescafe-classic-100-pure-instant-coffee.jpg" alt="vegetables/brinjal">
                        <div class="product-name">
                            <h1>Nescafe coffe</h1>
                            <p>Fresh Vegetables</p>
                            <p class="product-price">Rs. 460/kg<span><button class="buttons1" type="button" value="input-button">Add to Cart</button></span></p>
                        </div>
                    </div>
                </div>


                <div class="flex-box">
                    <div class="product-card">
                        <img src="img/beverages/240065_14-tata-tea-gold-tea.jpg" alt="vegetables/brinjal">
                        <div class="product-name">
                            <h1>Tata tea gold</h1>
                            <p>Beverages</p>
                            <p class="product-price">Rs. 483/kg <span><button class="buttons1" type="button" value="input-button">Add to Cart</button></span></p>
                        </div>
                    </div>
                </div>


                <div class="flex-box">
                    <div class="product-card">
                        <img src="img/beverages/264445_3-tata-tea-premium-tea.jpg" alt="vegetables/brinjal">
                        <div class="product-name">
                            <h1>Tata tea premium</h1>
                            <p>Beverages</p>
                            <p class="product-price">Rs. 800/kg<span><button class="buttons1" type="button" value="input-button">Add to Cart</button></span></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="cate-sec">
            <h1>Beauty and Hygiene</h1>
            <div class="flex-container">
                <div class="flex-box">
                    <div class="product-card">
                        <img src="img/beauty&hygeine/1212185_2-nivea-body-lotion-nourishing-body-milk-for-very-dry-skin.jpg" alt="vegetables/brinjal">
                        <div class="product-name">
                            <h1>Nivea body lotion</h1>
                            <p>Beuaty and Hygiene</p>
                            <p class="product-price">Rs. 200<span><button class="buttons1" type="button" value="input-button">Add to Cart</button></span></p>
                        </div>
                    </div>
                </div>

                <div class="flex-box">
                    <div class="product-card">
                        <img src="img/beauty&hygeine/1212354_1-listerine-mouthwash-cool-mint.jpg" alt="vegetables/brinjal">
                        <div class="product-name">
                            <h1>Listerine mouthwash cool</h1>
                            <p>Beuaty and Hygiene</p>
                            <p class="product-price">Rs. 400<span><button class="buttons1" type="button" value="input-button">Add to Cart</button></span></p>
                        </div>
                    </div>
                </div>


                <div class="flex-box">
                    <div class="product-card">
                        <img src="img/beauty&hygeine/1214869_1-closeup-everfresh-anti-germ-gel-toothpaste-red-hot-3x2x150-g-multipack.jpg" alt="vegetables/brinjal">
                        <div class="product-name">
                            <h1>Closeup gel</h1>
                            <p>Beuaty and Hygiene</p>
                            <p class="product-price">Rs. 200<span><button class="buttons1" type="button" value="input-button">Add to Cart</button></span></p>
                        </div>
                    </div>
                </div>


                <div class="flex-box">
                    <div class="product-card">
                        <img src="img/beauty&hygeine/40143580_4-letsshave-pro-6-advance-shaving-trial-kit-for-men.jpg" alt="vegetables/brinjal">
                        <div class="product-name">
                            <h1>Lets shave pro</h1>
                            <p>Beuaty and Hygiene</p>
                            <p class="product-price">Rs. 400<span><button class="buttons1" type="button" value="input-button">Add to Cart</button></span></p>
                        </div>
                    </div>
                </div>


                <div class="flex-box">
                    <div class="product-card">
                        <img src="img/beauty&hygeine/40190822_2-cinthol-refreshing-deo-soap-lime-provides-germ-protection.jpg" alt="vegetables/brinjal">
                        <div class="product-name">
                            <h1>Cinthol soap</h1>
                            <p>Beuaty and Hygiene</p>
                            <p class="product-price">Rs. 32<span><button class="buttons1" type="button" value="input-button">Add to Cart</button></span></p>
                        </div>
                    </div>
                </div>


                <div class="flex-box">
                    <div class="product-card">
                        <img src="img/beauty&hygeine/40209846_3-letsshave-pro-6-plus-shaving-razor-for-men-blade-handle-cap.jpg" alt="vegetables/brinjal">
                        <div class="product-name">
                            <h1>Lets shave pro razer</h1>
                            <p>Beuaty and Hygiene</p>
                            <p class="product-price">Rs. 300<span><button class="buttons1" type="button" value="input-button">Add to Cart</button></span></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="cate-sec">
            <h1>Food Grains and Oil</h1>
            <div class="flex-container">
                <div class="flex-box">
                    <div class="product-card">
                        <img src="img/foodgrains&oil/10000801_11-bb-royal-channa-kabuli.jpg" alt="vegetables/brinjal">
                        <div class="product-name">
                            <h1>Channa kabuli</h1>
                            <p>Food Grains and Oil</p>
                            <p class="product-price">Rs. 31/200g<span><button class="buttons1" type="button" value="input-button">Add to Cart</button></span></p>
                        </div>
                    </div>
                </div>

                <div class="flex-box">
                    <div class="product-card">
                        <img src="img/foodgrains&oil/100647221_11-fortune-rice-bran-oil.jpg" alt="vegetables/brinjal">
                        <div class="product-name">
                            <h1>Fortune rice bran oil </h1>
                            <p>Food Grains and Oil</p>
                            <p class="product-price">Rs. 160/litre<span><button class="buttons1" type="button" value="input-button">Add to Cart</button></span></p>
                        </div>
                    </div>
                </div>

                <div class="flex-box">
                    <div class="product-card">
                        <img src="img/foodgrains&oil/204629_15-aashirvaad-select-atta.jpg" alt="vegetables/brinjal">
                        <div class="product-name">
                            <h1>Aashirvaad atta</h1>
                            <p>Food Grains and Oil</p>
                            <p class="product-price">Rs. 160<span><button class="buttons1" type="button" value="input-button">Add to Cart</button></span></p>
                        </div>
                    </div>
                </div>

                <div class="flex-box">
                    <div class="product-card">
                        <img src="img/foodgrains&oil/241600_5-tata-salt-iodized.jpg" alt="vegetables/brinjal">
                        <div class="product-name">
                            <h1>Tata salt iodized</h1>
                            <p>Food Grains and Oil</p>
                            <p class="product-price">Rs. 20/kg<span><button class="buttons1" type="button" value="input-button">Add to Cart</button></span></p>
                        </div>
                    </div>
                </div>

                <div class="flex-box">
                    <div class="product-card">
                        <img src="img/foodgrains&oil/276764_9-fortune-fortune-premium-kachi-ghani-pure-mustard-oil.jpg" alt="vegetables/brinjal">
                        <div class="product-name">
                            <h1>Fortune mustard oil</h1>
                            <p>Food Grains and Oil</p>
                            <p class="product-price">Rs. 200/litre<span><button class="buttons1" type="button" value="input-button">Add to Cart</button></span></p>
                        </div>
                    </div>
                </div>

                <div class="flex-box">
                    <div class="product-card">
                        <img src="img/foodgrains&oil/40123264_8-maggi-masala-ae-magic-seasoning-vegetable-masala.jpg" alt="vegetables/brinjal">
                        <div class="product-name">
                            <h1>Magic masala</h1>
                            <p>Food Grains and Oil</p>
                            <p class="product-price">Rs. 55<span><button class="buttons1" type="button" value="input-button">Add to Cart</button></span></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="cate-sec">
            <h1>Snacks and Branded Food</h1>
            <div class="flex-container">
                <div class="flex-box">
                    <div class="product-card">
                        <img src="img/snacks/102764_8-kurkure-namkeen-chilli-chatka.jpg" alt="vegetables/brinjal">
                        <div class="product-name">
                            <h1>Kurkure chilli chatka</h1>
                            <p>Snacks and Branded Food</p>
                            <p class="product-price">Rs. 20<span><button class="buttons1" type="button" value="input-button">Add to Cart</button></span></p>
                        </div>
                    </div>
                </div>

                <div class="flex-box">
                    <div class="product-card">
                        <img src="img/snacks/1200698_2-cornitos-nacho-crisps-cheese-herbs.jpg" alt="vegetables/brinjal">
                        <div class="product-name">
                            <h1>cornitos-nacho</h1>
                            <p>Snacks and Branded Food</p>
                            <p class="product-price">Rs. 30<span><button class="buttons1" type="button" value="input-button">Add to Cart</button></span></p>
                        </div>
                    </div>
                </div>

                <div class="flex-box">
                    <div class="product-card">
                        <img src="img/snacks/1203943_3-kurkure-namkeen-puffcornyummy-cheese.jpg" alt="vegetables/brinjal">
                        <div class="product-name">
                            <h1>kurkure namkeen puffcorn</h1>
                            <p>Snacks and Branded Food</p>
                            <p class="product-price">Rs. 20<span><button class="buttons1" type="button" value="input-button">Add to Cart</button></span></p>
                        </div>
                    </div>
                </div>

                <div class="flex-box">
                    <div class="product-card" id="Brinjal">
                        <img src="img/snacks/206433_7-mccain-potato-bites-chilli-garlic.jpg" alt="vegetables/brinjal">
                        <div class="product-name">
                            <h1>mccain potato bites</h1>
                            <p>Snacks and Branded Food</p>
                            <p class="product-price">Rs. 100<span><button class="buttons1" type="button" value="input-button">Add to Cart</button></span></p>
                        </div>
                    </div>
                </div>

                <div class="flex-box">
                    <div class="product-card">
                        <img src="img/snacks/270484_13-britannia-treat-jim-jam-cream-biscuits.jpg" alt="vegetables/brinjal">
                        <div class="product-name">
                            <h1>britannia treat jim jam</h1>
                            <p>Snacks and Branded Food</p>
                            <p class="product-price">Rs. 30<span><button class="buttons1" type="button" value="input-button">Add to Cart</button></span></p>
                        </div>
                    </div>
                </div>

                <div class="flex-box">
                    <div class="product-card">
                        <img src="img/snacks/40196818_2-tasties-nacho-chips-cheese.jpg" alt="vegetables/brinjal">
                        <div class="product-name">
                            <h1>tasties nacho chips cheese</h1>
                            <p>Snacks and Branded Food</p>
                            <p class="product-price">Rs. 50<span><button class="buttons1" type="button" value="input-button">Add to Cart</button></span></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </mains>

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



    </script>




</script>


    
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
