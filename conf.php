<?php

$conn=mysqli_connect("localhost","root","",'shopping');
if($conn)
{
    echo "connected";
}
else
{
    echo "not connect";
}

?>

<?php 
$sql=" select * from contact";

$res=mysqli_query($conn,$sql);
while($rw=mysqli_fetch_row($res))
{
?>

    <tr>
    <td><?php echo $rw[0];?></td>
    <td><?php echo $rw[1];?></td>
    <td><?php echo $rw[2];?></td>
    <td><?php echo $rw[3];?></td>
    <td><?php echo $rw[4];?></td>
   
</tr>
<?php
}
?>
</table>
</body>
</html>