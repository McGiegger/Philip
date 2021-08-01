<?php include ('server.php') ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Sign in</title>
    <!-- Bootstrap CSS -->
  
  <link href="images/logo.jpg" rel="icon" type="image/png">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="styles.css">
  
  </head>
  <body id="signin">

      
      

  <?php include('navigationBar.php'); ?>

<div class="wrap">
  <h2>Login</h2>
  <form action="login.php" method = "post">
    <input type="text" placeholder="Username" name="username" required>
    <input type="password" placeholder="Password" name="password" required>
    <input type="submit" value="Login" name = "login_btn" >
    <a href="signUp.php" id="alreadywithaccount">Dont have an account?Register</a>
  </form>
</div>
<br>


<!-- FOOTER -->  
<?php include "footer.php"; ?>
          
  
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