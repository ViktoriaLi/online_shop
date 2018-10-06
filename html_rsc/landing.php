<?php
include_once("html_rsc/basket.php");
?>

<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="html_rsc/index.css">
    <title>Shop</title>
  </head>
  <body>

    <header class="header">
      <div class="main_title">
      <h1>Welcome to sport equipment online-shop</h1>
      </div>
    </header>

 <nav class="nav">
      <div class="title">
        <ul>
          <li><a href="#">Main</a></li>
          <li><a href="html_rsc/sportwear.php">Sportwear</a></li>
          <li><a href="html_rsc/tourism.php">Tourism</a></li>
          <li><a href="html_rsc/training.php">Training</a></li>
        </ul>
        <form action="#" class="auth">
        <input type="text" name="login" placeholder="Enter your login">
        <input type="password" name="password" placeholder="Enter your login">
        <input type="submit" value="Log in">
        <input type="submit" value="Registration">
      </form>
      </div>
    </nav>
    <main>
      <div class="title">
        <p class="category_title">You can purchase such goods:</p>
        <div class="products">
          
          <div class="main_img">
            <div class="pr_item">     
              <img src="../resource/sports.jpg" alt ="sports" width="" height="200">
              <div class="pr_text">
               <h4>Equipment for trainings</h4></div>
              <div class="pr_text">
                <a href="html_rsc/training.php"><button>See more...</button></a>
              </div>
            </div>
          </div>
          <div class="main_img">
            <div class="pr_item">     
              <img src="../resource/cloth.jpg" alt ="sports" width="" height="200">
              <div class="pr_text">
               <h4>Sport clothes</h4></div>
              <div class="pr_text">
                <a href="html_rsc/sportwear.php"><button>See more...</button></a>
              </div>
            </div>
          </div>
         <div class="main_img">
            <div class="pr_item">     
              <img src="../resource/tourists.jpg" alt ="sports" width="" height="200">
              <div class="pr_text">
               <h4>Equipment for tourism</h4></div>
              <div class="pr_text">
                <a href="html_rsc/tourism.php"><button>See more...</button></a>
              </div>
            </div>
          </div>
        </div>
      
     </div>
      </div>

    </main>

    <footer style="height:20%">
      <div>
        <br>
        <br>
        <hr>
        <p class="copyright">&#169; All rights reserved 2018</p>
      </div>
    </footer>

  </body>

</html>
