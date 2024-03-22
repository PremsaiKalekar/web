<?php
session_start(); 


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $_SESSION['username'] = "Hello";


    header("pre.php");
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registration Form</title>
<style>
    body {
        font-family: Arial, sans-serif;
    }
    form {
        width: 300px;
        margin: 0 auto;
    }
    input[type="text"], input[type="email"], input[type="password"] {
        width: 100%;
        padding: 10px;
        margin: 5px 0;
        box-sizing: border-box;
    }
    input[type="submit"] {
        width: 100%;
        padding: 10px;
        margin-top: 10px;
        background-color: #4CAF50;
        color: white;
        border: none;
        cursor: pointer;
    }
    h2{
        align-items: center;
    }
</style>
</head>
<body>
<form  method="post">
    <h2>Login Form</h2>
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
    <input type="submit" value="submit" name="btn">
</form>


</body>
</html>
