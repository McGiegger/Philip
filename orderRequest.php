<?php 
if(isset($_POST['submitOder'])){
    $id = (int) $_GET['id'];
    $sql = "SELECT * FROM products WHERE id = $id";
    $stmt = $db_connect->prepare($sql);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    
    $username = $_SESSION['username'];
    $db_connect = mysqli_connect('localhost', 'root', '', 'rahtech_digital_solutions') or die("Could not connect to database");
    $sqlStatement = "SELECT * FROM subscribers WHERE username = '$username'";
    $stmtemnt = $db_connect->prepare($sqlStatement);
    $stmtemnt->execute();
    $result = $stmtemnt->get_result();
    $rows = $result->fetch_assoc();



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
        echo "<script>alert('Error:');</script>";
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