<?php
session_start(); 


if(!isset($_SESSION['username'])) {
    header("Location: login.php"); 
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
</head>
<body>
    <h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>
    <p>This is another page where user information is printed using sessions.</p>
    <p><a href="logout.php">Logout</a></p>
</body>
</html>
