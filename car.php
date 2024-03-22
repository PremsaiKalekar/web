<?php


$conn=mysqli_connect("localhost","root","","student");
if($conn)
{
    echo "connect<br>";
}
else
{
    echo "not connect<br>";
}

if(isset($_POST['btn']))
    {
        $uname=$_POST['fname'];
        $qualifaction=$_POST['qual'];
        $email=$_POST['email'];
        $phone=$_POST['phno'];
        $address=$_POST['add'];
    
    $sql="insert into career(name,qualifaction,email,phone,address) values('$uname','$qualifaction','$email','$phone','$address')";
    if(mysqli_query($conn,$sql))
        {
            echo"data inserted";
        }
        else
        {
            echo"data not inserted";
        }
    }
?>