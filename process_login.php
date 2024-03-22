<?php
session_start(); 


if($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $username = $_POST["username"];
    $password = $_POST["password"];
    
   
    if($username === "user" && $password === "password") {
        
        $_SESSION['username'] = $username;
        header("Location: welcome.php"); 
        exit();
    } else {
        $error_message = "Invalid username or password!";
    }
}
?>
