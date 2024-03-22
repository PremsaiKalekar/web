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

$sql="delete from career where id=$id";
if(mysqli_query($conn,$sql))
{
    header("Location:table.php");
}

else
{
    echo "data not deleted";
}
?>
