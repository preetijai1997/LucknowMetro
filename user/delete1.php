<?php
$conn=mysqli_connect("localhost","root","","contact");
$id=$_GET['email'];
$sql="DELETE FROM detail WHERE email='$id'";
mysqli_query($conn,$sql);
header('location:ed.php');
?>