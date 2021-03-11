 
	  <?php
	      $cont=mysqli_connect("localhost","root","","contact");
			  $email=$_GET['email'];
			  $msg=$_GET["message"];
			  $mg="INSERT INTO detail(admin_reply)VALUES('$msg')WHERE email='$email'";
			  if(mysqli_query($cont,$mg)){
				echo "successfully update";
				header('location:admin.php');
			}
			else {
				echo "error".mysqli_error($cont);
			}
	  
	  ?>