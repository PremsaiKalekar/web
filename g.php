
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
        $email=$_POST['email'];
        $phone=$_POST['phno'];
        $Message=$_POST['mass'];
    
        
        $sql="insert into gc(name,email,phone,msg) values('$uname','$email','$phone','$Message')";

        if(mysqli_query($conn,$sql))
        {
            echo "data inserted";
        } 
        else
        {
            echo "data not inserted";
        }
    }

   
?>