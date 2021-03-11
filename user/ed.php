<?php
 session_start();
 if($_SESSION['name']){
	echo".";
 }
 else{
	 header('location:login.php');
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>

   <meta charset="utf-8">
		<title>L.M.T.Guide</title>
	<meta name="description" content="Free Responsive php5 Css3 Templates | zerotheme.com">
	
	
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
   <link rel="stylesheet" href="../css/zerogrid.css">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/lightbox.css">
	
	 <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
	
	<link rel="stylesheet" href="../css/menu.css">
	<script src="../js/jquery1111.min.js" type="text/javascript"></script>
	<script src="../js/script.js"></script>
	<style>
	  input[type="text"]{
		  border:1px solid red;
		  margin:0px;
		  padding:10px;
		  width:410px;
	  }
	</style>

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
			   <li><a href='complain.php'><span>Complain</span></a></li>
			   <li class='last'><a href='contact.php'><span>Contact</span></a></li>
			   <li class="active"><a href="login.php"><i class="fa fa-user" align="navbar-right"></i></a></li>
			</ul>
		</div>
	</div>

		<section id="container">
			<div class="wrap-container clearfix">
				<div id="main-content">
					<div class="wrap-content">
						<article>
							<div class="art-header">
								<h1 class="entry-title">WELCOME TO THE ADMIN PAGE</h1>
							</div>
							<div class="header">
		<div id='cssmenu' style="background-color:Red;">
			<ul>
			    <li><a href='admin.php'id="R"><span>Registration For Station </span></a></li>
			   <li><a href='adshow.php'><span>Show Station</span></a></li>
			   <li><a href='#' id="enq"><span>Enquiry Details</span></a></li>
			   <li><a href='comp.php' id="enq"><span>Complain Details</span></a></li>
			   <li><a href='park.php' id="p"><span>Set Parking</span></a></li>
			   <li><a href="logout2.php"><i align="navbar-right"><span>  Log Out</span></i></a></li>
			</ul>
		</div>
	</div>
	<br>
																		

							<?php
	$cont=mysqli_connect("localhost","root","","contact");
		  $show="select name,email,mob,subject,message FROM detail";
		  $enq=mysqli_query($cont,$show);
	?><center><div  id="e">
	<form method="post" action="">
	<h3 style="color:red">Enquiry Details<h3>
	<br>
	<table style="border-style: solid; border-width: 3px; border-color:red;" id="deta">
	                                                       <tr style="display:hidden">
														<th style="border:1px solid red; align:left; margin-left:5px; margin-right:5px; padding:5px;" rowspan='1'>Sr.No.</th>
														<th style="border:1px solid red; align:left; margin-left:5px; margin-right:5px; padding:5px;" rowspan='1'>User Name</th>
														<th style="border:1px solid red; align:left; margin-left:5px; margin-right:5px; padding:5px;" rowspan='1'>User E-mail</th>
														<th style="border:1px solid red; align:left; margin-left:5px; margin-right:5px; padding:5px;" rowspan='1'>Mobile Number</th>
														<th style="border:1px solid red; align:left; margin-left:5px; margin-right:5px; padding:5px;" rowspan='1'>Subject</th>
														<th style="border:1px solid red; align:left; margin-left:5px; margin-right:5px; padding:5px;" rowspan='1'>Enquiry Message</th>
														<th style="border:1px solid red; align:left; margin-left:5px; margin-right:5px; padding:5px;" rowspan='1'>Reply/Delete</th><tr>
	<?php
	error_reporting(0);
	  $count=0;
	  while($info=mysqli_fetch_assoc($enq)){
		  $count ++;
	?>
	    <tr>
															<td style="border:1px solid red; align:left; margin-left:5px; margin-right:5px; padding:3px;"><?php echo $count ?></td>
															<td style="border:1px solid red; align:left; margin-left:5px; margin-right:5px; padding:5px;"><?php echo $info['name'] ?></td>
															<td style="border:1px solid red; align:left; margin-left:5px; margin-right:5px; padding:5px;"><?php echo $info['email'] ?></td>
															<td style="border:1px solid red; align:left; margin-left:5px; margin-right:5px; padding:5px;"><?php echo $info['mob'] ?></td>
															<td style="border:1px solid red; align:left; margin-left:5px; margin-right:5px; padding:5px;"><?php echo $info['subject'] ?></td>
															<td style="border:1px solid red; align:left; margin-left:5px; margin-right:5px; padding:5px;">	<textarea name="message" id="message" class="form-control" rows="4" cols="25" style="height:88px;width:300px;font-size:22px;margin:0px;"
													placeholder="Message"><?php echo $info['message'] ?></textarea></td>
														
															
															</td>
															
															
															
															<td style="border:1px solid red; align:left; margin-left:5px; margin-right:5px; padding:5px;">
	<a href="ed2.php?email=<?php echo $info['email']?>" <i style="color:blue">Reply</i></a></button>
		
		 <a href="delete1.php?email=<?php echo $info['email']?>"><i style="color:red">Delete</i></a> </td>
															</tr>		

													
	  <?php } 
	  ?>
	  </table></form></div></center>
	  
	  
	  
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
									<li><a href="https://www.facebook.com/LucknowMetro/" target="_blank"><i class="fa fa-facebook"></i></a>
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