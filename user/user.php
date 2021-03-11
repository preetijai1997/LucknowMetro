<?php
										 $conn=mysqli_connect("localhost","root","","contact");
										if(isset($_GET['submit'])){
		$email=$_GET["email"];
		$pass=$_GET["pass"];
	    $sq="SELECT*FROM comp WHERE email='$email' AND pass='$pass'";
		$result=mysqli_query($conn,$sq);
		$row=mysqli_num_rows($result);	
		if($row <1){
			?>
			<script>
			
			alert("name and password not match");
			</script>
			<?php
		}
	
		  else{
			 header('location:news.php');
										}
										
										?>
											<?php
										}
										
										?>