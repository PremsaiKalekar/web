<?php
session_start(); 


if(isset($_SESSION['username'])) {
    header("Location: another.php"); 
    exit();
}


if($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $username = "user"; 
    $password = "password"; 
    
    if($_POST["username"] === $username && $_POST["password"] === $password) {
        
        $_SESSION['username'] = $username;
        header("Location: another.php"); 
        exit();
    } else {
        $error_message = "Invalid username or password!";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Username: <input type="text" name="username"><br>
        Password: <input type="password" name="password"><br>
        <input type="submit" value="Login">
    </form>
    <?php 
   
    if(isset($error_message)) {
        echo "<p>$error_message</p>";
    }
    ?>
</body>
</html>
