<!DOCTYPE html>
<html lang="en"> 
<meta http-equiv="content-type" content="text/php;charset=ISO-8859-1" />
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
			   <li class="active"><a href='stations.php'><span>Stations</span></a></li>
			   <li><a href='fare.php'><span>Fare</span></a></li>
			   <li><a href='traintimetable.php'><span>Timming</span></a></li>
			   <li><a href='parking.php'><span>Parking</span></a></li>
			   <li><a href='map.php'><span>Map</span></a></li>
			   <li><a href='faq.php'><span>FAQ</span></a></li>
			   <li><a href='complain.php'><span>Complain</span></a></li>
			   <li class='last'><a href='contact.php'><span>Contact</span></a></li>
			    <li><a href="login.php"><i class="fa fa-user" align="navbar-right"></i></a></li>
			</ul>
		</div>
	</div>	
		<section id="container">
			<div class="wrap-container">
				
				
				<section class="content-box boxstyle-2 box-2">
					<div class="zerogrid">
						<div class="row wrap-box">
							<div class="header">
								<div class="wrapper">
									<h2 class="color-red">List of Lucknow Metro Stations</h2>
								</div>
							</div>	
								
								
								
							<?php
							$conn=mysqli_connect("localhost","root","","station");
							$see="SELECT*FROM list";
							$result=mysqli_query($conn,$see);
							?>	
								
								
							<center>
							<div class="row">
								<div class="col-1-1">
									<div class="row post">
										<div class="col-1-12">
											<div class="wrap-col">
												<table style="border-style: solid; border-width: 3px; border-color:red;">
													<caption style='background-color:red; padding:5px; color:white'><h6>Show All Station List</h6></caption>
													<tr>
														<th style="border:1px solid red; align:left; margin-left:5px; margin-right:5px; padding:5px;" rowspan='1'>Sr.No.</th>
														<th style="border:1px solid red; align:left; margin-left:5px; margin-right:5px; padding:5px;" rowspan='1'>Station ID</th>
														<th style="border:1px solid red; align:left; margin-left:5px; margin-right:5px; padding:5px;" rowspan='1'>Station Name</th>
														<th style="border:1px solid red; align:left; margin-left:5px; margin-right:5px; padding:5px;"  colspan='1'>Station Code</th>
														<th style="border:1px solid red; align:left; margin-left:5px; margin-right:5px; padding:5px;"  colspan='1'>Corridor</th>
														<th style="border:1px solid red; align:left; margin-left:5px; margin-right:5px; padding:5px;"  colspan='1'>Distance(m)</th>
														<th style="border:1px solid red; align:left; margin-left:5px; margin-right:5px; padding:5px;"  colspan='1'>Contact Number</th>
														<th style="border:1px solid red; align:left; margin-left:5px; margin-right:5px; padding:5px;"  colspan='1'>Opening Date</th>
														<th style="border:1px solid red; align:left; margin-left:5px; margin-right:5px; padding:5px;"  colspan='1'>Near By Places</th>
														
													</tr>
													
														<center>
		<?php
		$count=0;
	    while($row=mysqli_fetch_assoc($result)){
	    $count ++; 		
		?>
														
														<tr>
															<td style="border:1px solid red; align:left; margin-left:5px; margin-right:5px; padding:5px;"><?php echo $count ?></td>
															<td style="border:1px solid red; align:left; margin-left:5px; margin-right:5px; padding:5px;"><?php echo $row['sid'] ?></td>
															<td style="border:1px solid red; align:left; margin-left:5px; margin-right:5px; padding:5px;"><?php echo $row['sname'] ?></td>
															<td style="border:1px solid red; align:left; margin-left:5px; margin-right:5px; padding:5px;"><?php echo $row['scode'] ?></td>
															<td style="border:1px solid red; align:left; margin-left:5px; margin-right:5px; padding:5px;"><?php echo $row['cdor'] ?></td>
															<td style="border:1px solid red; align:left; margin-left:5px; margin-right:5px; padding:5px;"><?php echo $row['dis'] ?></td>
															<td style="border:1px solid red; align:left; margin-left:5px; margin-right:5px; padding:5px;"><?php echo $row['cno'] ?></td>
															<td style="border:1px solid red; align:left; margin-left:5px; margin-right:5px; padding:5px;"><?php echo $row['opd'] ?></td>
															<td style="border:1px solid red; align:left; margin-left:5px; margin-right:5px; padding:5px;"><?php echo $row['nbp'] ?></td>
														
																<?php
		}
													?>	
												</table>
											
											</div>
										</div>
									</div>
								</div>
								
							</div>
								</center>
						</div>
					</div>
				</section>
		
					
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
									<li><a href="http://twitter.com/lucknow_metro"><i class="fa fa-twitter"></i></a>
									</li>
									<li><a href="http://m.facebook.com/LucknowMetro"><i class="fa fa-facebook"></i></a>
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