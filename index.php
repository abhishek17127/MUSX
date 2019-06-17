<?php

// connection
include 'connection.php';

$result = mysqli_query($con,"SELECT * FROM `products`");


?>



<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap-4/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-4/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="mystyle.css">

    <title>MuseX</title>
  </head>

  <body>
    <header class="top">
      <nav>
        <ul class="navlist top">
          <li class="logo"><h2>MuseX</h2></li>
            <div class="rightElem">
              <li><h5><a href="login.php">Profile</a></h5></li>
              <li><h5><a href="#">Cart</a></h5></li>
              <li><h5><a href="wishlist.html">Wishlist</a></h5></li>
            </div>
        </ul>
      </nav>
    </header>





    <div class="container">   
      <img src="brown-head.jpg" class="containerImage">
    </div>



    <div class="Products">
      <h1>Products</h1>
      <div class="row">
        <?php 
        while($rows = mysqli_fetch_assoc($result)){
        ?>
        
        <div class="col-md-6 scol">
          <h4><?php echo $rows['name'];   ?></h4>
          <img src= <?php echo $rows['image']; ?> class="smallPhotos">
          <div class="info">
            <p><h5><?php echo $rows['description'];   ?></h5> </p>
          </div>
            <form action="process.php" method="POST">
               <input type="text" class="gayab" name="product_id" value=<?php echo $_SESSION['product_id']=$rows['id'];?>>
              <input value="ADD TO CART" type="submit" class="but" name="addtocart">
            </form>
          
          
        </div>

      <?php
      }
      ?>


        <!-- <div class="col-md-6">
          <h4>WHITE HEADPHONES</h4>
          <img src="white-head.jpg" class="smallPhotos">
          <div class="info">
            <p><h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam bibendum ante id lorem hendrerit, id scelerisque nunc dignissim. Nunc dictum sapien a dolor molestie semper. Maecenas suscipit scelerisque eros, eget aliquam</h5> </p>
          </div>
          <button class="but exep"><a href="#">ADD TO CART</a></button>
        </div> -->
        
      </div>




      <!-- <div class="row">
        <div class="col-md-6">
          <h4>COLOURED HEADPHONES</h4>
          <img src="colour-head.jpg" class="smallPhotos">
          <div class="info">
            <p><h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam bibendum ante id lorem hendrerit, id scelerisque nunc dignissim. Nunc dictum sapien a dolor molestie semper. Maecenas suscipit scelerisque eros, eget aliquam</h5> </p>
          </div>
          <button class="but"><a href="#">ADD TO CART</a></button>
          
        </div>
        <div class="col-md-6">
          <h4>EAR EARPHONES</h4>
          <img src="ear-head.jpg" class="smallPhotos">
          <div class="info">
            <p><h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam bibendum ante id lorem hendrerit, id scelerisque nunc dignissim. Nunc dictum sapien a dolor molestie semper. Maecenas suscipit scelerisque eros, eget aliquam</h5> </p>
          </div>
          <button class="but exep"><a href="#">ADD TO CART</a></button>
          
        </div>
        
      </div>

      <div class="row">
        <div class="col-md-6">
          <h4>HAND HEADPHONES</h4>
          <img src="hand-head.jpg" class="smallPhotos">
          <div class="info">
            <p><h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam bibendum ante id lorem hendrerit, id scelerisque nunc dignissim. Nunc dictum sapien a dolor molestie semper. Maecenas suscipit scelerisque eros, eget aliquam</h5> </p>
          </div>
          <button class="but"><a href="#">ADD TO CART</a></button>
          
        </div>
        <div class="col-md-6">
          <h4>BROWN EARPHONES</h4>
          <img src="brown-head.jpg" class="smallPhotos">
          <div class="info">
            <p><h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam bibendum ante id lorem hendrerit, id scelerisque nunc dignissim. Nunc dictum sapien a dolor molestie semper. Maecenas suscipit scelerisque eros, eget aliquam</h5> </p>
          </div>
          <button class="but exep"><a href="#">ADD TO CART</a></button>
          
        </div>
        
      </div> -->






    </div>





    <footer class="bottom">
      <ul class="bottlist">
        <li><h5><a href="contact.html">Contact Us</a></h5></li>
      </ul>
    </footer>



















    <script src="bootstrap-4/js/bootstrap.min.js"></script>

  </body>
</html>

















