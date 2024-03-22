<?php

$conn=mysqli_connect("localhost","root","","student");
if($conn)
{
    echo "<br>";
}
else
{
    echo "not connect<br>";
}
$id=$_GET['id'];

$sql="delete from port2 where id=$id";
if(mysqli_query($conn,$sql))
{
    header("Location:tebleimg1.php");
}

else
{
    echo "data not deleted";
}
?>
