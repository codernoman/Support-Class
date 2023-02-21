<?php
session_start();
$defUserName = "noman@gmail.com";
$defPassword = "123456";
if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == $defUserName && $password == $defPassword){
        $_SESSION['username'] = $username;
        header("Location: welcome.php");
    }else{
        echo "Invalid username or password";
    }
}
?>
