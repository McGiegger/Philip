<?php 
if(isset($_POST['sendmails'])){
$to = "philipnyankena92@gmail.com";
$from = $_POST['userEmail'];
$subject = "Unread message";
$subject2 = "Rahtech Digital Solutions";
$message = $_POST['message'];
$successMessage = "Your Message Submitted Succesfully". "\n\n". 
"Thank you for contacting us! We'll get back to you shortly.";
$headers = "From: ".$from;
$headers2 = "From: ".$to;
$result = mail($to, $subject, $message);
$result2 = mail($from, $subject2, $successMessage);

if($result){
  echo "<script>alert('Messsage sent successfully.')</script>";
    echo "<script>window.open('index.php', '_self')</script>";
}else{
  echo "<script>alert('Submission failed. Try again later.')</script>";
}


}
?>