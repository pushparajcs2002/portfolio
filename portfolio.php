<?php
$n=$_POST['sname'];
$s=$_POST['semailid'];
$p=$_POST['semessage'];

$con=mysqli_connect("localhost","root","","portfolio");
$sql="INSERT INTO user(username,email,emessage) values ('$n','$s','$p')";
$r=mysqli_query($con,$sql);
if($r)
{
   echo "Successfully Submit";
}
else 
{
   echo "Try Again"; 
}
?>
