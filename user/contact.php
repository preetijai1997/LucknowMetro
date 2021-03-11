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
    <script src="bootstrap/js/bootstrap.js"></script>

	
</head>

<body>
<div class="wrap-body">
	<div class="zerogrid"  >
		<div class="row" >
			<div class="col-1-3">
			<center>
				<img src="../images/LMT.png" width="100px" height="300px" style="margin-bottom:10px;"/><br>
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
			   <li class="active"><a href='contact.php'><span>Contact</span></a></li>
			    <li><a href="login.php"><i class="fa fa-user" align="navbar-right"></i></a></li>
			</ul>
		</div>
	</div>

		
		<section id="container">
			<div class="wrap-container">
				
				<div class="zerogrid">
					<div class="row">
						<h1 class="color-red" style="margin: 20px 0">Contact</h1>
						<div id="last">
						<div class="col-full">
	                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3559.674172783813!2d80.97577851463456!3d26.850313783154494!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399bfd302500f46d%3A0xb9b4d839da10395!2sLucknow+Metro+Rail+Corporation!5e0!3m2!1sen!2sin!4v1512125380220" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
						
						<div class="col-1-3">
							<div class="wrap-col">
								<h3 class="color-red" style="margin: 20px 0">Contact Info</h3>
								<p>LUCKNOW METRO RAIL CORPORATION LTD.</p>
									 <p>ADMINISTRATIVE BUILDING </p>
									 <P> Near Dr. Bhimrao Ambedkar Samajik Parivartan Sthal,Vipin Khand,Gomti Nagar</p>
									 <p>Pin Code : 2260210</p>
									<p>Phone : (0522) 2288869</p>
									<p>Email: <a href="mailto:feedback@lmrcl.com">feedback@lmrcl.com</a></p>
							</div>
						</div>
						
						<?php
						$conn=mysqli_connect("localhost","root","","contact");
						if(isset($_POST["submit"])){
							$name=$_POST["name"];
							$email=$_POST["email"];
							$mobno=$_POST["MobileNo"];
							$date=$_POST["date"];
							$sub=$_POST["subject"];
							$msg=$_POST["message"];
							$sql="INSERT INTO detail(name,email,mob,date,subject,message)VALUES('$name','$email','$mobno','$date','$sub','$msg')";
						     if(mysqli_query($conn,$sql)){
				echo "data save";
			}
			else
			{
				echo "unsuccessful".mysqli_error($conn);
		}
						}
						
						?>
						<div class="col-2-3">
							<div class="wrap-col">
								<div class="contact">
									<h3 class="color-red" style="margin: 20px 0 20px 30px">Contact Form</h3>
									<div id="contact_form">
										<form name="form1" id="ff" method="post" action="">
											<div id="con"><label class="row">
												<div class="col-1-2">
													<div class="wrap-col">
														<input type="text" name="name" id="name" placeholder="Enter name" required="required" />
													</div>
												</div>
												<div class="col-1-2">
													<div class="wrap-col">
														<input type="email" name="email" id="email" placeholder="Enter email" required="required" />
													</div>
												</div>
											</label>
											<label class="row">
												<div class="col-1-4">
													<div class="wrap-col">
													
													<input type="text" pattern="[0-9]{10,10}" name="MobileNo" id="mobno" placeholder="Mobile No." required="required" />
													</div>
												</div>
												
												<div class="col-1-4">
													<div class="wrap-col">
													<input type="date"  name="date" id="date" placeholder="Date"/>
													</div>
												</div>
												<div class="col-2-4">
													<div class="wrap-col">
													<input type="text" name="subject" id="subject" placeholder="Subject" required="required" />
													</div>
												</div>
																						
											</label>
											<label class="row">
												<div class="wrap-col">
													<textarea name="message" id="message" class="form-control" rows="4" cols="25" required="required"
													placeholder="Message"></textarea>
												</div>
											</label>
										
											<center><input class="sendButton" type="submit" name="submit" value="Submit"></center>
											<center><input class="sendButton"id="ar" type="submit" name="submit" style="width:auto;margin:auto;" value="Admin Reply"></center></div></form>
										
										<form method="post" id="ff" action="">
										<div id="tec" style="display:none">
										 <div class="col-1-2">
													<div class="wrap-col">
														<input type="email" name="email" id="email" placeholder="Enter email" required="required" />
													</div>
												</div>
												</br>
												</br>
												</br>
												<input class="sendButton" type="submit" name="sub" value="Submit" id="show"></div></div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
		
			</div>
		</section>

		<?php
		 if(isset($_POST['sub'])){?>
		 <?php
			  $esend=$_POST['email'];
			 $qr="SELECT*FROM reply WHERE email='$esend'";
			  $res=mysqli_query($conn,$qr);
			  while($row=mysqli_fetch_assoc($res)){
			  ?>
			  <center>
			  <table style="border-style: solid; border-width: 3px; border-color:red;" id="deta">
	                                                       <tr style="display:hidden">
														<th style="border:1px solid red; align:left; margin-left:5px; margin-right:5px; padding:5px;" rowspan='1'>USER NAME</th>
														<th style="border:1px solid red; align:left; margin-left:5px; margin-right:5px; padding:5px;" rowspan='1'>SUBJECT</th>
														<th style="border:1px solid red; align:left; margin-left:5px; margin-right:5px; padding:5px;" rowspan='1'>ENQUERY MASSEGE</th>
														<th style="border:1px solid red; align:left; margin-left:5px; margin-right:5px; padding:5px;" rowspan='1'>REPLY MESSAGE</th>
														<th style="border:1px solid red; align:left; margin-left:5px; margin-right:5px; padding:5px;" rowspan='1'>DATE & TIME</th>
														</tr>
														<tr>
															<td style="border:1px solid red; align:left; margin-left:5px; margin-right:5px; padding:5px;"><?php echo $row['name'] ?></td>
															<td style="border:1px solid red; align:left; margin-left:5px; margin-right:5px; padding:5px;"><?php echo $row['sub'] ?></td>
															<td style="border:1px solid red; align:left; margin-left:5px; margin-right:5px; padding:5px;">
															<textarea name="ms" id="message" class="form-control" rows="4" cols="25" style="height:88px;width:300px;font-size:22px;margin:0px;"
													placeholder="Message"><?php echo $row['message'] ?></textarea></td>
															<td style="border:1px solid red; align:left; margin-left:5px; margin-right:5px; padding:5px;">	<textarea name="message" id="message" class="form-control" rows="4" cols="25" style="height:88px;width:300px;font-size:22px;margin:0px;"
													placeholder="Message"><?php echo $row['adreply'] ?></textarea></td>
													<td style="border:1px solid red; align:left; margin-left:5px; margin-right:5px; padding:5px;"><?php echo $row['date'] ?></td>
													
													</tr>
													<?php }
			  ?>	
													</table></center>		
														
			  
			  <?php }
			    else{
				   echo "".mysqli_error($conn);
			   }?>
		  
		
		<script>
		   $(document).ready(function(){
    $("#ar").click(function(){
        $("#con").hide();
    });
	 $("#ar").click(function(){
        $("#tec").show();
    });
	$("#show").click(function(){
        $("#last").hide();
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