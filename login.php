<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap-4/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-4/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="mystyle.css">

    <title>Login Page</title>
  </head>

  <body>
    <header class="top">
      <nav>
        <ul class="navlist top">
          <li class="logo"><h2>MuseX</h2></li>
        </ul>
      </nav>
    </header>



    <div class="row">
      <div class="col-md-6">
                  <div class="container3">
                <h1>Sign In</h1>
                <form method="POST" action="process.php" class="contactForm">
                  <h4>Email<input id="user" type="text" name="user" class="inp" required></h4>
                  <h4>Password<input id="pass" type="password" name="pass" class="inp" required></h4>
                  <input type="submit" id="btn" value="login" class="but" name="login">
                  <a href="#"><p class="forgot">FORGOT PASSWORD?</p></a>
                </form>
              </div>
      </div>
      <div class="col-md-6">
                <div class="up-but">
                  <h3 class="or">OR</h3>
                  <a href="sign-up.php"><button class="but">Sign-Up</button></a>
                </div>
        
      </div>
    </div>


    






    <footer class="bottom">
      <ul class="bottlist">
        <li><h5><a href="contact.html">Contact Us</a></h5></li>
      </ul>
    </footer>



















    <script src="bootstrap-4/js/bootstrap.min.js"></script>

  </body>
</html>