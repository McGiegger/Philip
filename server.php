<?php 
session_start();

// connect to database
$db_connect = mysqli_connect('localhost', 'root', '', 'rahtech_digital_solutions') or die("Could not connect to database");

if(isset($_POST['signup_btn'])){

    $username =  mysqli_real_escape_string($db_connect, $_POST['username']);
    $email = mysqli_real_escape_string($db_connect, $_POST['email']);
    $phone = mysqli_real_escape_string($db_connect, $_POST['phone']);
    $password = mysqli_real_escape_string($db_connect, $_POST['password_1']);
    $pass = mysqli_real_escape_string($db_connect, $_POST['password_2']);

    $hash_pass = password_hash($password, PASSWORD_DEFAULT);

    if($password == $pass){
        $sqlcheck = "SELECT email, username, phone_number FROM subscribers";
        $stmtcheck = $db_connect->prepare($sqlcheck);
        $stmtcheck->execute();
        $result = $stmtcheck->get_result();
        $statement = $result->fetch_assoc();
        $user_name = $statement['username'];
        $em_mail = $statement['email'];
        $number = $statement['phone_number'];

        if($user_name == $username && $em_mail == $email && $number == $phone){
            echo "<script>alert('Error: Username or Email already exist');</script>";
            echo "<script>window.open('signUp.php', '_self')</script>";
        }else{
            
        $sql="INSERT INTO subscribers (username, email, phone_number, password) VALUES ('$username', '$email', '$phone', '$hash_pass');";
        $stmt=$db_connect->prepare($sql);
        $stmt->execute();

        $_SESSION['user_name'] = $username;
        echo "<script>alert('Thank you $username for reqistering with us. Rahtech is your number one digital solutions in place.')</script>";
        echo "<script>window.open('index.php', '_self')</script>";
        // header("location:signUp.php");
        }

    }else{
        echo "<script>alert('Error. Passwords do not match. Please try again.');</script>";
        echo "<script>window.open('signUp.php', '_self')</script>";
        // header("location:signUp.php");
    }
}

// Login logic
if(isset($_POST['login_btn'])){
    $username = mysqli_real_escape_string($db_connect, $_POST['username']);
    $password = mysqli_real_escape_string($db_connect, $_POST['password']);
    
    $checkTable = "SELECT username, password FROM subscribers WHERE username ='$username';";
    $statementCheck = $db_connect->prepare($checkTable);
    $statementCheck->execute();
    $results = $statementCheck->get_result();
    $finalyResults = $results->fetch_assoc();
    $tableUsername = $finalyResults['username'];
    $tablePassword = $finalyResults['password'];
    $pass = password_verify($password, $tablePassword);
    
    if($password == $pass){
        $_SESSION['username'] = $username;
        echo "<script>alert('Login successfull. You can now shop your item.')</script>";
        echo "<script>window.open('index.php', '_self')</script>";
        $_SESSION['username'] = $username;

    }else{
        echo "<script>alert('Wrong password or Email. Please try again')</script>";
        echo "<script>window.open('login.php', '_self')</script>";
    }
}

// admin login logic
if(isset($_POST['adminbtn'])){

    $username = mysqli_real_escape_string($db_connect, $_POST['username']);
    $password = mysqli_real_escape_string($db_connect, $_POST['password']);

    // authentication
    $checkTableDetails = "SELECT username, password FROM  admin_logins WHERE username = '$username'";
    $sqlPrepare = $db_connect->prepare($checkTableDetails);
    $sqlPrepare->execute();
    $resultt = $sqlPrepare->get_result();
    $finalResults = $resultt->fetch_assoc();
    $table_Username = $finalResults['username'];
    $table_Password = $finalResults['password'];

    if($table_Username == $username && $table_Password == $password){
        echo "<script>alert('Login successfull')</script>";
        $_SESSION['username'] = $username;
        echo "<script>window.open('administrator.php', '_self')</script>";
    }else{
        echo "<script>alert('Wrong password or Username. Try again.')</script>";
        echo "<script>window.open('adminLogin.php', '_self')</script>";
    }
}    
?>