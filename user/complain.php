<?php
ob_start();
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=ISO-8859-1" />
<head>

    <meta charset="utf-8">
		<title>L.M.T.Guide</title>
	<meta name="description" content="Free Responsive php5 Css3 Templates | zerotheme.com">
	
	
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
  	<link rel="stylesheet" href="../css/zerogrid.css">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/lightbox.css">
<script src="https://www.google.com/recaptcha/api.js"></script>
	
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
	
	<link rel="stylesheet" href="../css/menu.css">
	<script src="../js/jquery1111.min.js" type="text/javascript"></script>
	<script src="../js/script.js"></script>
	<script>
	function validate()
	{
		var a=document.getElementById(pass).value;
		var b=document.getElementById(confpass).value;
		if(a!=b)
		{
			alert("Passwords do not match";
			return false;
		}
	}
	</script>

</head>

<body>
<div class="wrap-body">	
	<div class="zerogrid"  >
		<div class="row" >
			<div class="col-1-3">
			<center>
				<img src="../images/LMT.png" width="100px" height="300px" style="margin-bottom:10px;"/>
				<br>
			</center>	
			</div>
			<div class="col-1-1">
				<center>
					<h1 class="color-red" style="margin-top:10px; margin-bottom:10px; padding-top:15px; color:red; font-size:38px; float:left;">Lucknow Metro Train Guide</h1><br><br>
				</center>	
			</div>
			<div class="col-1-3">
				<h3 class="color-red" ></h3>
			</div>
		</div>
	</div>
	<div class="header">
		<div id='cssmenu' style="background-color:Red;">
			<ul>
			   <li><a href='index.php'><span>Home</span></a></li>
			   <li><a href='about.php'><span>About</span></a></li>
			   <li><a href='stations.php'><span>Stations</span></a></li>
			   <li><a href='fare.php'><span>Fare</span></a></li>
			   <li><a href='traintimetable.php'><span>Timming</span></a></li>
			   <li><a href='parking.php'><span>Parking</span></a></li>
			   <li><a href='map.php'><span>Map</span></a></li>
			   <li><a href='faq.php'><span>FAQ</span></a></li>
			   <li class="active"><a href='#'><span>COMPLAIN</span></a></li>
			   <li class='last'><a href='contact.php'><span>Contact</span></a></li>
			   <li><a href="login.php"><i class="fa fa-user" align="navbar-right"></i></a></li>
			</ul>
		</div>
	</div>
	


		<section id="container"><div class="wrap-container clearfix">
				<div id="main-content">
					<div class="wrap-content">
						<article>
							<div class="art-header">
								<h1 class="entry-title">LUCKNOW METRO</h1>
							</div>
								
							<div class="art-content"></div></div></div>
			<div class="col-2-3">
							<div class="wrap-col">
								<div class="contact">
									<div id="contact_form"><div id="con">
									<center><form name="form1" id="ff" method="post" action="">
											<div id="con"><label class="row">
												<div class="col-1-2">
												<form class="form-horizontal" role="form">
													<div class="form-group">
														<input type="email" name="email" style="width:auto;margin:auto;" class="form-control" id="email" placeholder="Enter email" required="required" />
													</div>
												</div>
											</label>
											<div class="col-1-2">
													<div class="form-group">
														<input type="password" name="pass" class="form-control" style="width:auto;margin:auto;" id="email" placeholder="Enter password" required="required" />
													</div>
												</div></br>
												<div class="g-recaptcha" data-sitekey="6Ld1hAEVAAAAAHRUQ8sjJm2phOpGVfYpUQ9eS7Yo"></div>
										<input class="sendButton"style="width:auto;margin:auto;" type="submit" name="submit" value="Log in">
									</br>	<input class="sendButton"style="width:auto;margin:auto;" type="submit" name="submit"   id="ar"value="Create new account"></center>
										</br>
										</form></div>
									
										<div id="tec" style="display:none">
										<center><h3 class="color-red" style="margin: 20px 0 20px 30px">REGISTRATION FOR COMPLAIN</h3></center>
											<center><form name="form1" id="ff" method="post" action="">
											<div id="con">
											<label class="row">
												<div class="col-1-2">
												<form  class="form-horizontal" role="form" >
													<div class="form-group">
													
													<input type="text" name="name" class="form-control"style="width:auto;margin:auto;" id="name" placeholder="Enter name" required="required">
													</div>
												</div>
												</LABEL>
												<label class="row">
												<div class="col-1-2">
													<div class="form-group">
														<input type="email" name="email" class="form-control" style="width:auto;margin:auto;" id="email" placeholder="Enter email" required="required" />
													</div>
												</div>
												</label>
												<label class="row">
												<div class="col-1-2">
													<div class="form-group">
														<input type="password" name="pass" class="form-control" style="width:auto;margin:auto;" id="pass" placeholder="Generate your password" required="required" />
													</div>
												</div>
												</label>
												
											<label class="row">
												<div class="col-1-4">
													<div class="form-group">
													
													<input type="text" pattern="[0-9]{10,10}" class="form-control" style="width:auto;margin:auto;" name="MobileNo" id="mobno" placeholder="Mobile No." required="required" />
													</div>
												</div>
												</label>
												
											<center><input class="sendButton" style="width:auto;margin:auto;" type="submit" name="rgs" value="SUBMIT" ></center>
										</form></center></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
		
			</div>
			
			
	
  

			
			
		</section>
				<?php
										 $conn=mysqli_connect("localhost","root","","contact");
										if(isset($_POST['submit'])){
		$email=$_POST["email"];
		$pass=md5($pass);
	    $sq="SELECT*FROM comp WHERE email='$email' AND pass='$pass'";
		$result=mysqli_query($conn,$sq);
		$row=mysqli_num_rows($result);	
		if($row <1){
			?>
			<script>
			 window.open('complain.php');
			alert("name and password not match");
			</script>
			<?php
		}
	
		  else{
			  
		     $_SESSION['email']=$email;
			 header('location:news.php');
			 
		
			
			 
										}
										
									
											
										}
										
										?>
		
		<?php
						$conn=mysqli_connect("localhost","root","","contact");
						if(isset($_POST["rgs"])){
							$name=$_POST["name"];
							$email=$_POST["email"];
							$mobno=$_POST["MobileNo"];
							
							$pass=md5($pass);
							
							$sql="INSERT INTO comp(name,email,mob,pass)VALUES('$name','$email','$mobno','$pass')";
						     if(mysqli_query($conn,$sql)){
			  ?>
			  <script>
			     alert("You have been registered successfully. Please login to continue.");
			  </script>
			  <?php
			}
			else
			{
				echo "unsuccessful".mysqli_error($conn);
		}
						}
						
						?>
						<script>
		   $(document).ready(function(){
    $("#ar").click(function(){
        $("#con").hide();
    });
	 $("#ar").click(function(){
        $("#tec").show();
    });
});
		</script>
		<hr class="line">
		
		<footer>
			<div class="wrap-footer">
				<div class="zerogrid">
					<div class="row">
						<div class="col-1-3">
							<div class="wrap-col">
								<p>Copyright - <a href="" target="_blank" rel="nofollow">L.M.T.Guide</a> Designed by GROUP 1</p>
							</div>
						</div>
						<div class="col-1-3">
							<div class="wrap-col">
								<ul class="social-buttons">
									<li><a href="www.twitter.com/lucknow_metro"><i class="fa fa-twitter"></i></a>
									</li>
									<li><a href="www.facebook.com/LucknowMetro"><i class="fa fa-facebook"></i></a>
									</li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-1-3">
							<div class="wrap-col">
								<ul class="quick-link">
									<li><a href="#">Privacy Policy</a></li>
									<li><a href="#">Terms of Use</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>
</body>

</html>