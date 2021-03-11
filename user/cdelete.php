<?php
$conn=mysqli_connect("localhost","root","","contact");
$sub=$_GET['sub'];
$sql="DELETE FROM cmsg WHERE sub='$sub'";
mysqli_query($conn,$sql);
header('location:news.php');
?>