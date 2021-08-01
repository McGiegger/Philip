<?php
$username = $_SESSION['username'];
$id = (int) $_GET['id'];
$db_connect = mysqli_connect('localhost', 'root', '', 'rahtech_digital_solutions') or die("Could not connect to database");
$sql = "SELECT * FROM products WHERE id = $id";
$stmt = $db_connect->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
?>

<div class="center col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">

    <td><img src="<?=$row['product_image'];?>" style="width: 300px; height: 300px; "></td> 
  
<table class="table table-bordered " id="productTable" >
  <tbody id="selectedProduct">

  
    <tr>
      <th scope="row">Product name</th>
      <td><?=  $row['product_name'];?></td>
    </tr>
    <tr>
      <th scope="row">Price</th>
      <td>Ksh. <?= $row['our_price'];?></td>
    </tr>
    <tr>
      <th scope="row">Details</th>
      <td><?=  $row['product_description'];?></td>
    </tr>
    <tr>
      <th scope="row">Quantity</th>
      <td scope="row" id="quantity"><input  min="1" value="1" type="number" ></td>
    </tr>
    <tr>
    
      <th scope="row"><strong>Total</strong></th>
      <td colspan="2" id="total"><strong>Ksh.<?= $row['our_price']; ?>  </strong></td>
    </tr>
  </tbody>
</table>
<div id="submitBtn"><td style="text-align: center;" scope="row">
<div>
<a href="PurchasePage.php?idy=<?= $row['id'];?>" class="btn btn-success btn-lg " >Submit</a>
</div>

</div>

<?php 
if(isset($_GET['idy'])){
$idy = (int) $_GET['idy'];
$username = $_SESSION['username'];
$db_connect = mysqli_connect('localhost', 'root', '', 'rahtech_digital_solutions') or die("Could not connect to database");
$sqlStatement = "SELECT * FROM subscribers WHERE username = '$username'";
$stmtemnt = $db_connect->prepare($sqlStatement);
$stmtemnt->execute();
$result = $stmtemnt->get_result();
$rows = $result->fetch_assoc();


$sql = "SELECT * FROM products WHERE id = $idy";
$stmt = $db_connect->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();

$product_name = $row['product_name'];
$price = $row['our_price'];
$name =  $rows['username']; 
$contact = $rows['phone_number'];
$email =  $rows['email'];

        $sql="INSERT INTO oders (product_name, price, customer_name, customer_number, customer_email)
        VALUES ('$product_name', '$price', '$name', '$contact' , '$email');";
        $stmt=$db_connect->prepare($sql);
        $stmt->execute();
        if($sql){
            echo "<script>alert('Thank you $username for shopping with us. Your oder has been submitted successfully.');</script>";
            echo "<script>window.open('index.php', '_self')</script>";
        }else{
            echo "<script>alert('Unexpected error occured.:');</script>";
            echo "<script>window.open('PurchasePage.php', '_self')</script>";
        }


    // select user who's currently loged in
// $to = "philipnyankena92@gmail.com";
// $from = $_POST['userEmail'];
// $subject = "Unread message";
// $subject2 = "Rahtech Digital Solutions";
// $message = $_POST['message'];
// $successMessage = "Your Message Submitted Succesfully". "\n\n". 
// "Thank you for contacting us! We'll get back to you shortly.";
// $headers = "From: ".$from;
// $headers2 = "From: ".$to;
// $result = mail($to, $subject, $message);
// $result2 = mail($from, $subject2, $successMessage);
}
?>

