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
        $company=$_POST['cname'];
        $email=$_POST['email'];
        $phone=$_POST['phno'];
        $Message=$_POST['mess'];
    
    $sql="insert into dash(name,company,email,phone,message) values('$uname','$company','$email','$phone','$aMessage')";
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