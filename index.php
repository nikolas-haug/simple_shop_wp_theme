<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo( 'name' ) ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">  
    <?php wp_head(); ?>
  </head>

  <body>

    <header class="grid-container">
      <div class="grid-x">
        <div class="cell large-6">
          <img src="img/logo.jpg" alt="logo">
        </div>
        <div class="cell large-6">
          <ul class="menu simple main-nav">
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="index.html">Services</a></li>
          </ul>
        </div>
      </div>
    </header>

    <div class="grid-container">
      <div class="grid-x">
        <div class="cell large-12">
          <div class="showcase callout secondary">
            <h1>Discount Clothing</h1>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptas voluptatem temporibus modi iusto esse dolor eum iure magnam. Repellat quibusdam minus explicabo quidem perferendis veniam quaerat illo ducimus in saepe.</p>
            <button class="button">Start Shopping</button>
          </div>
        </div>
      </div>
    </div>

    <div class="grid-container">
      <div class="grid-x">
        <div class="cell large-8 medium-8">
          <div class="products grid-x">
            <div class="cell large-4 medium-4 small-12 product end">
              <h3>Blue Shirt</h3>
              <h4>$9.99</h4>
              <img src="img/shirt_blue_white.jpg" alt="">
              <button class="button">Details</button>
            </div>
            <div class="cell large-4 medium-4 small-12 product end">
              <h3>Red Shirt</h3>
              <h4>$25.99</h4>
              <img src="img/shirt_red.jpg" alt="">
              <button class="button">Details</button>
            </div>
            <div class="cell large-4 medium-4 small-12 product end">
              <h3>Grey Shirt</h3>
              <h4>$7.99</h4>
              <img src="img/shirt_grey.jpg" alt="">
              <button class="button">Details</button>
            </div>
            <div class="cell large-4 medium-4 small-12 product end">
              <h3>Orange Shirt</h3>
              <h4>$19.99</h4>
              <img src="img/shirt_orange.jpg" alt="">
              <button class="button">Details</button>
            </div>
            <div class="cell large-4 medium-4 small-12 product end">
              <h3>Black Shirt</h3>
              <h4>$3.99</h4>
              <img src="img/shirt_black.jpg" alt="">
              <button class="button">Details</button>
            </div>
          </div>
        </div>
        <div class="cell large-4 medium-4">
          <div class="callout">
            <h3>Categories</h3>
            <ul class="menu vertical">
              <li><a href="#">Shirts</a></li>
              <li><a href="#">Pants</a></li>
              <li><a href="#">Hats</a></li>
              <li><a href="#">Shoes</a></li>
            </ul>
          </div>
          <br>
          <div class="callout">
            <h5>Sidebar Heading</h5>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Praesentium, recusandae. Enim quos possimus, ipsam, quae deleniti sint quam officia ipsa labore ex laboriosam, facere provident cum quaerat tempore pariatur harum.</p>
            <a href="#" class="small button">go to foundation docs</a>
          </div>
        </div>
      </div>
    </div>

    <footer class="grid-container">
      <p>&copy; 2020, MyShop Theme</p>
    </footer>
    
    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>

    <?php wp_footer(); ?>

  </body>
</html>
