<?php 
session_start();

    if(!isset($_SESSION['username'])){
        echo "<script>alert('You must log in first to purchase this item.')</script>";
        echo "<script>window.open('login.php', '_self')</script>";
         
    }
   
?>

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrator</title>
    <style>
        .center{
            margin: auto;
            width: 100%;
            padding: 10px;
        }
      .puchaseBody{
        width: 80%;
        margin: 0 auto;
        padding: 20px;
      }

    </style>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link href="images/logo.jpg" rel="icon" type="image/png" >
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="js/bootstrap.bundle.min.js">
  <link rel="stylesheet" href="js/jquery-3.4.1.min.js">
  <!-- <link rel="stylesheet" href="styles.css"> -->
    </head>
    <body >

       <!-- if the user logs in place the odder -->
       
       <?php if(isset($_SESSION['username'])): ?>
      

        
        <?php include('navigationBar.php'); ?>
        <!-- About delivery options -->
<div class="container-fluid" id="jumbotrron">
  <div class="row jumbotron">
    <div class="col-xs-12 col-sm-12 col-md-9 col-xl-10">
        <strong><h5>NOTICE: </h5></strong>
      <p class="lead">
       Please ensure you provide a reachable contact info before placing your order. If you didn't, please do that now.
      </p>
      <p class="lead">We'll send you an email
       once you submit your oder. </p>
      <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-12">
        <a href="#"><button type="button" class="btn btn-primary btn-lg">Pay now</button></a>
      

    </div>
  </div>
</div>
<?php include('selectedItem.php'); ?>


       <?php endif ?>
       

       <!-- FOOTER -->  
<!-- <?php include "footer.php"; ?> -->
       
       <!--end of elements-->

<!-- Calculate total price -->
<script type="text/javascript">
$("#quantity").change(function(){

    var value = parseFloat(<?php echo $row['our_price'] ?>;);
    var quantity = parseInt($("#quantity").val());
    var total = value * quantity;
    $("#total").val(total.toString());
});
</script>
    </body>
    </html>
   

  
   