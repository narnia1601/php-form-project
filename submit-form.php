<?php 
$server = 'localhost';
$username = 'root';
$password = '';
$dbname = 'php-form-validation';

$conn = new mysqli($server,$username,$password,$dbname);
if($conn->connect_error){
    die('Connection error: '.$conn->connect_error);
}else{
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "INSERT INTO users (email,password) VALUES ('$email','$password')";
    if($conn->query($sql) == true){
        header('Location: /php-form-validation/index.php');
    }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();