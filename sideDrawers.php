<?php include('sendMails.php'); ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<title>DIGITEX/ Side Drawers</title>
    <!-- Bootstrap CSS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link href="images/looogo.jpg" rel="icon" type="image/png">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="styles.css">
  <style>
    #sideDrawers{
      font-family: 'Poppins', sans-serif;
    }
  </style>
  </head>
  <body id="sideDrawers">

      
      

  <?php include('navigationBar.php'); ?>
       
<?php include('carouselindicators.php'); ?>

<br>
<div class="featured">
  <h3>Side Drawers</h3>
</div>

<hr>

<!-- Products starts here -->
<?php 
// connect to DB
include('database_connect.php');
$sql = "SELECT * FROM products WHERE category = 'side drawers'";
$stmt = $db_connect->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();
?>


<div class="container">
<div class="row text-center">
<?php while($product=$result->fetch_assoc()){ ?>

<div class="col-lg-3 col-md-4 col-sm-6 col-11 mx-auto my-3">
  <h4><?= $product['product_name']; ?></h4>
     <a class="test-popup-link" href="<?= $product['product_image']; ?>">
                       <img src="<?= $product['product_image']; ?>" class="img-fluid rounded mx-auto d-block" alt="Hp 840" id="images">
                    </a>
 
  <p class="list-price text-danger">List Price <s>Ksh. <?= $product['list_price']; ?></s></p>
  <p class="price">Our Price: Ksh. <?= $product['our_price']; ?></p>
  <input type="button" class="btn btn-success view_data" name="view" id=<?= $product['id']; ?>  value="Details">
  <a class="btn btn-warning" style="color: white;">Add To Cart</a>

</div>

<?php } ?>
<!-- end col -->

</div>
</div>

<?php include('productdetailsModal.php'); ?>

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