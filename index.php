<?php include('sendMails.php'); ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Rahtech Digital Solutions</title>
    <!-- Bootstrap CSS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link href="images/logo.jpg" rel="icon" type="image/png">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  

  <link rel="stylesheet" href="styles.css">
  </head>
  <body>

      
      

  <?php include('navigationBar.php'); ?>
       
<?php include('carouselindicators.php'); ?>

<?php include('jumbotron.php'); ?>

<br>
<div class="featured">
  <h3>Featured Products</h3>
</div>

<hr>
<?php 
// connect to DB
$db_connect = mysqli_connect('localhost', 'root', '', 'rahtech_digital_solutions') or die("Could not connect to database");
$sql = "SELECT * FROM products WHERE category = 'display' ";
$stmt = $db_connect->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();
?>

<!-- Products starts here -->
<div class="container">
<div class="row text-center">

<?php while($product = $result->fetch_assoc()){ ?>

<div class="col-lg-3 col-md-4 col-sm-6 col-11 mx-auto my-3">
  <h4><?= $product['product_name']; ?></h4>
     <a class="test-popup-link" href="<?= $product['product_image']; ?>">
        <img src="<?= $product['product_image']; ?>" class="img-fluid rounded mx-auto d-block" alt="Hp 840" id="images">
      </a>
 
  <p class="list-price text-danger">List Price <s>Ksh. <?= $product['list_price']; ?></s></p>
  <p class="price">Our Price: Ksh. <?= $product['our_price']; ?></p>
  <input type="button" class="btn btn-success view_data" name="view" id=<?= $product['id']; ?>  value="Details">
  <a href="PurchasePage.php?id=<?= $product['id']; ?>" type="button" class="btn btn-warning view-data">Buy</a>

</div>

<?php } ?>

<!-- end col -->

<?php include('productdetailsModal.php'); ?>




</div>
</div>

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