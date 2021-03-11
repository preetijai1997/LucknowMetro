<?php
$conn=mysqli_connect("localhost","root","","station");
$id=$_GET['id'];
$sql="DELETE FROM list WHERE id='$id'";
mysqli_query($conn,$sql);
header('location:adshow.php');
?>