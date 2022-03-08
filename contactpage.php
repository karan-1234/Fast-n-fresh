
  <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <link rel="stylesheet" href="contactpagecss.css">
    </head>
    <body>
      <header id="header1">
        <nav id="navbar">
            <span class="heads1"><img id="img1" src="images/groceries-ecommerce.png" alt="Icon"></span>
            <span class="heads1"><button onclick="func3()">Home</button></span>
            <span class="heads1"><button onclick="func1()">Category</button></span>
            <span class="heads1"><button onclick="func2()">About Us</button></span>
            <span class="heads1"><button  onclick="func()">Cart</button></span>
            <span class="heads1"><a href="index.php">Logout</a></span>
        </nav>
    </header>

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

            
            echo "<form method='post' action='home.php' style='display:none;'>             
            <input value=$name name='Login'></input>
            <button id='formSubmit4' type='submit'></button>
            </form>";

           
           ?> 
    
      <div class="background">
      <div class="container">
        <div class="screen">
          <div class="screen-header">
            <div class="screen-header-left">
              <div class="screen-header-button close"></div>
              <div class="screen-header-button maximize"></div>
              <div class="screen-header-button minimize"></div>
            </div>
            <div class="screen-header-right">
              <div class="screen-header-ellipsis"></div>
              <div class="screen-header-ellipsis"></div>
              <div class="screen-header-ellipsis"></div>
            </div>
          </div>
          <div class="screen-body">
            <div class="screen-body-item left">
              <div class="app-title">
                <span>CONTACT</span>
                <span>US</span>
              </div>
              <div class="app-contact">CONTACT INFO : +91 7303064007</div>
            </div>
            <div class="screen-body-item">
              <div class="app-form">
                <div class="app-form-group">
                  <input class="app-form-control" placeholder="NAME" value="">
                </div>
                <div class="app-form-group">
                  <input class="app-form-control" placeholder="EMAIL">
                </div>
                <div class="app-form-group">
                  <input class="app-form-control" placeholder="CONTACT NO">
                </div>
                <div class="app-form-group message">
                  <input class="app-form-control" placeholder="MESSAGE">
                </div>
                <div class="app-form-group buttons">
                  <button class="app-form-button">CANCEL</button>
                  <button class="app-form-button">SEND</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="credits">
          <a class="credits-link" href="https://dribbble.com/shots/2666271-Contact" target="_blank">


          </a>
        </div>
      </div>
    </div>

    
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
