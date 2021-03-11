<?php
$conn=mysqli_connect("localhost","root","","contact");
$email=$_GET['email'];
$sql="DELETE FROM cmsg WHERE email='$email'";
mysqli_query($conn,$sql);
header('location:comp.php');
?>l