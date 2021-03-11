<?php
error_reporting(0);
session_start();
if($_SESSION['name']){
header('location:admin.php');
}
  else{
	  echo ".";
  }
	?>
<!DOCTYPE html>
<html lang="en">

<head>

    
	<meta charset="utf-8">
	<title>L.M.T.Guide</title> 
	<meta name="description" content="Free Responsive php5 Css3 Templates | zerotheme.com">  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="../css/zerogrid.css">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/lightbox.css">
	<link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="../css/menu.css">
	<script src="../js/jquery1111.min.js" type="text/javascript"></script>
	<script src="../js/script.js"></script>
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
		<div id='cssmenu' style="background-color:red;">
			<ul>
			   <li><a href='index.php'><span>Home</span></a></li>
			   <li><a href='about.php'><span>About</span></a></li>
			   <li><a href='stations.php'><span>Stations</span></a></li>
			   <li><a href='fare.php'><span>Fare</span></a></li>
			   <li><a href='traintimetable.php'><span>Timming</span></a></li>
			   <li><a href='parking.php'><span>Parking</span></a></li>
			   <li><a href='map.php'><span>Map</span></a></li>
			   <li><a href='faq.php'><span>FAQ</span></a></li>
			   <li><a href='complain.php'><span>Complain</span></a></li>
			   <li class='last'><a href='contact.php'><span>Contact</span></a></li>
			    <li class="active"><a href="login.php"><i class="fa fa-user" align="navbar-right"></i></a></li>
			</ul>
		</div>
	</div>
		<section id="container">
			<div class="wrap-container">
				<section class="content-box boxstyle-1 box-1">
					<div class="zerogrid">
						<div class="row wrap-box">
							<div class="col-1-2">
								<div class="wrap-col">
									<center><br /> <br />
										<img src="../images/login.jpg">
									</center>
								</div>
							</div>
							<div class="col-1-2">
								<div class="wrap-col">
									<div class="row">
										<div class="t-center" style="padding-top: 60px;">
											<div class="header">
												<div class="wrapper">
													<h1><span class="color-red">
											WELCOME TO L.M.T. GUIDE ADMIN LOGIN PAGE</span></h1>
												</div>
											</div>
											<div id="contact_form">
											
       <?php
	       $conn=mysqli_connect("localhost","root","","train");
		   if(isset($_POST['btnlogin'])){
			   $name=$_POST['name'];
			   $pass=$_POST['pass'];
			   $sql="SELECT*FROM metro WHERE name='$name' AND password='$pass'";
			   $result=mysqli_query($conn,$sql);
			   $rows=mysqli_num_rows($result);
			   if($rows < 1){
				   ?>
				   <script>
				     window.open('login.php');
					 alert("user name or passward not match");
				   </script>
				   <?php
				   }
				   else
				   {
					   $set=mysqli_fetch_assoc($result);
					   $name=$set['name'];
					   $_SESSION['name']=$name;
					  
					   header('location:admin.php');
				   }
		   }
	   ?>											
										<form name="form1" id="ff" method="post" action="">
											<label class="row">
												<div class="col-1-1">
													<div class="wrap-col">
														<input type="text" name="name" id="name" placeholder="Enter User Name" required="required" />
													</div>
												</div>
												<div class="col-1-1">
													<div class="wrap-col">
														<input type="password" name="pass" id="email" placeholder="Enter Password" required="required" />
													</div>
												</div>
											</label>
											<div class="row">
												<div class="wrap-col"> 
													<center><input class="sendButton" type="submit" name="btnlogin" value="Login" style="width:150px;"></center>
												</div>
											</div>
										</form>
									</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					
					</div>
				</section><br>
				
			</div>
		</section>
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
									<li><a href="http://www.twitter.com/lucknow_metro"><i class="fa fa-twitter"></i></a>
									</li>
									<li><a href="http://www.facebook.com/LucknowMetro"><i class="fa fa-facebook"></i></a>
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
<script src="js/lightbox-plus-jquery.min.php"></script>
</div>
</body>

</html>