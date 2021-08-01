<?php include ('server.php') ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin Sign in</title>
    <!-- Bootstrap CSS -->
  
  <link href="images/logo.jpg" rel="icon" type="image/png">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="styles.css">
  
  </head>
  <body id="adminLog">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php"><img src="images/logo.jpg" alt="" width="30" height="24" class="d-inline-block align-text-top"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
    
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Sales
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="computers.php">Computers</a>
          <a class="dropdown-item" href="phones.php">Phones</a>
          <a class="dropdown-item" href="accesories.php">Accessories</a>
         
        </div>
      </li>
         <li class="nav-item">
        <a class="nav-link" href="services.php">Services</a>
      </li>
          <li class="nav-item">
        <a class="nav-link" href="signUp.php">Sign Up</a>
      </li>
        
         <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          About
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="aboutUs.php">Rahtech</a>
          <a class="dropdown-item" href="#">Team</a>
         
        </div>
      </li>
   
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<div id="administration">
    <h3>This page is for administration use only.</h3>
</div>

<div class="wrapp">
  <h2>Admin Login</h2>
  <form action="adminlogin.php" method="POST">
    <input type="text" placeholder="Username" required name = "username">
    <input type="password" placeholder="Password" required name = "password">
    <input type="submit" value="Login" name ="adminbtn" >
</form>
</div>
<br>


<!-- FOOTER -->
      <!--start of Footer-->
      
     <?php include("footer.php"); ?>
          
  
  <!--end of elements-->
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/all.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
        <script type="text/javascript">
      $('.test-popup-link').magnificPopup({
          type: 'image',
          gallery: {
              enabled: true
          }
      });
  
  </script>
   </body>
    </html>