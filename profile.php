<?php  


// connect to server
include 'connection.php';

// query
session_start();


$username = $_SESSION['username'];
$password = $_SESSION['password'];
$result = mysqli_query($con,"select * from users where username = '$username' and password = '$password'");
$rows = mysqli_fetch_assoc($result);


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



    <title>Profile Page</title>
  </head>

  <body>

    <header class="top">
      <nav>
        <ul class="navlist top">
          <li class="logo"><h2>MuseX</h2></li>
        </ul>
      </nav>
    </header>


    <h1 class="profile">Welcome to your Profile</h1>
    <div class="container6">
      <h3>Name: <?php echo $rows['name'] ?> </h3> 
      <h3>Username: <?php echo $rows['username'] ?></h3>
      <h3>Address: <?php echo $rows['address'] ?></h3>
      <h3>City: <?php echo $rows['city'] ?></h3>
      <h3>State: <?php echo $rows['state'] ?></h3>
      <h3>Postal Code: <?php echo $rows['postal'] ?></h3>
      <h3>Phone Number: <?php echo $rows['number'] ?></h3>
      
    </div>

    <div class="row">
      <div col-md-6>
        
      </div>
      
    </div>












    <footer class="bottom">
      <ul class="bottlist">
        <li><h5><a href="#">Contact Us</a></h5></li>
      </ul>
    </footer>







    <script src="bootstrap-4/js/bootstrap.min.js"></script>

  </body>
</html>