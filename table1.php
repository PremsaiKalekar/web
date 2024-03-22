<?php
$conn=mysqli_connect("localhost","root","",'student');
if($conn)
{
    echo "connected";
}
else
{
    echo "not connect";
}
?>