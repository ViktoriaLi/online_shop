<?php
  $cat = "training";
  include_once("basket.php");
?>
<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="index.css">
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
          <li><a href="../index.php">Main</a></li>
          <li><a href="sportwear.php">Sportwear</a></li>
          <li><a href="tourism.php">Tourism</a></li>
          <li><a href="#">Training</a></li>
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
        <p class="category_title">Sportware</p>
        <div class="products">
          
          <div class="pr_item-outer">
            <div class="pr_item">
              <div class="pr_text">

                <h3><?php echo $prod_names[0];?></h3>
                <h4>Category: <?php echo $cat;?></h4>
              </div>
              <img src="<?php echo $img_addr[0]; ?>" alt ="box" width="" height="150">
              <div class="pr_text">
                <p><small>Price: <?php echo $prod_price[0];?> UAH</small></p>
                <p><small>Products left: <?php echo $prod_quant[0];?></small></p>
                <button>Add to basket</button>
              </div>
            </div>
          </div>
          
          <div class="pr_item-outer">
            <div class="pr_item">
              <div class="pr_text">
                <h3><?php echo $prod_names[1];?></h3>
                <h4>Category: <?php echo $cat;?></h4>
              </div>
              <img src="<?php echo $img_addr[1]; ?>" alt ="box" width="" height="150">
              <div class="pr_text">
                <p><small>Price: <?php echo $prod_price[1];?> UAH</small></p>
                <p><small>Products left: <?php echo $prod_quant[1];?></small></p>
                <button>Add to basket</button>
              </div>
            </div>
          </div>

          <div class="pr_item-outer">
            <div class="pr_item">
              <div class="pr_text">
                <h3><?php echo $prod_names[2];?></h3>
                <h4>Category: <?php echo $cat;?></h4>
              </div>
              <img src="<?php echo $img_addr[2]; ?>" alt ="box" width="" height="150">
              <div class="pr_text">
                <p><small>Price: <?php echo $prod_price[2];?> UAH</small></p>
                <p><small>Products left: <?php echo $prod_quant[2];?></small></p>
                <button>Add to basket</button>
              </div>
            </div>
          </div>

        </div>
        <div class="products">
          
          <div class="pr_item-outer">
            <div class="pr_item">
              <div class="pr_text">
                <h3><?php echo $prod_names[3];?></h3>
                <h4>Category: <?php echo $cat;?></h4>
              </div>
              <img src="<?php echo $img_addr[3]; ?>" alt ="box" width="" height="150">
              <div class="pr_text">
                <p><small>Price: <?php echo $prod_price[3];?> UAH</small></p>
                <p><small>Products left: <?php echo $prod_quant[3];?></small></p>
                <button>Add to basket</button>
              </div>
            </div>
          </div>
          
          <div class="pr_item-outer">
            <div class="pr_item">
              <div class="pr_text">
                <h3><?php echo $prod_names[4];?></h3>
                <h4>Category: <?php echo $cat;?></h4>
              </div>
              <img src="<?php echo $img_addr[4]; ?>" alt ="box" width="" height="150">
              <div class="pr_text">
                <p><small>Price: <?php echo $prod_price[4];?> UAH</small></p>
                <p><small>Products left: <?php echo $prod_quant[4];?></small></p>
                <button>Add to basket</button>
              </div>
            </div>
          </div>

          <div class="pr_item-outer">
            <div class="pr_item">
              <div class="pr_text">
                <h3><?php echo $prod_names[5];?></h3>
                <h4>Category: <?php echo $cat;?></h4>
              </div>
              <img src="<?php echo $img_addr[5]; ?>" alt ="box" width="" height="150">
              <div class="pr_text">
                <p><small>Price: <?php echo $prod_price[5];?> UAH</small></p>
                <p><small>Products left: <?php echo $prod_quant[5];?></small></p>
                <button>Add to basket</button>
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
        <p class="copyright"><i>&#169; All rights reserved 2018</p></i>
      </div>
    </footer>

  </body>

</html>
