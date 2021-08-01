<?php include ('server.php') ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Sign Up Now</title>
    <!-- Bootstrap CSS -->
  
  <link href="images/logo.jpg" rel="icon" type="image/png">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="styles.css">
  </head>
  <body id="signup">

  <?php include('navigationBar.php'); ?>


<!-- sign up form starts here -->
<div class="wrap">
  <h2>Sign Up Here</h2>
  <form action="signUp.php" method="post">

    <input type="text" placeholder="Username..." required name="username">
    <input type="text" placeholder="Email..." required name="email">
    <input type="text" placeholder="Phone..." required name="phone">
    <input type="password" placeholder="Password..." required name="password_1">
    <input type="password" placeholder="Confirm Password..." required name="password_2">
    <input type="submit" value="submit" name="signup_btn">
    <a href="login.php" id="alreadywithaccount">Aready have an account?Login</a>
  </form>
</div>
<br>


<!-- FOOTER -->
<?php include('footer.php'); ?>

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