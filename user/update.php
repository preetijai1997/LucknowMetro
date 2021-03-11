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
<meta http-equiv="content-type" content="text/php;charset=ISO-8859-1" /><!-- /Added by HTTrack -->
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
								<h1 class="entry-title"></h1>
							</div>
							<div class="header">
		<div id='cssmenu' style="background-color:Red;">
			<ul>
			    <li><a href='admin.php'id="R"><span>Registration For Station </span></a></li>
			   <li><a href='adshow.php'><span>Show Station</span></a></li>
			   <li><a href='ed.php' id="enq"><span>Enquiry Details</span></a></li>
			   <li><a href='comp.php' id="enq"><span>Complain Details</span></a></li>
	     	   <li><a href='park.php' id="p"><span>Set Parking</span></a></li>
			   <li><a href="logout2.php"><i align="navbar-right"><span>  Log Out</span></i></a></li>
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
									<h2 class="color-red">Show Admin List of Lucknow Metro Stations</h2>
								</div>
							</div>	
	<?php
	$conn=mysqli_connect("localhost","root","","station");
	$id=$_GET['id'];
    $see="SELECT*FROM list WHERE id='$id'";
	$result=mysqli_query($conn,$see);						
	?>	
								
								
							<center>
							<div class="row">
								<div class="col-1-1">
									<div class="row post">
										<div class="col-1-12">
											<div class="wrap-col">
					<form method="post" action="">						
												<table style="border-style: solid; border-width: 3px; border-color:red;">
													<caption style='background-color:red; padding:5px; color:white'><h6>Update All Station List</h6></caption>
													
													
														<center>
		<?php
		$count=0;
	    while($row=mysqli_fetch_assoc($result)){
	    $count ++; 		
		?>
														
			                                                <tr><th style="border:1px solid red; align:left; margin-left:5px; margin-right:5px; padding:5px;" rowspan='1'>Station ID</th>
															<td style="border:1px solid red; align:left; margin-left:5px; margin-right:5px; padding:5px;">
<input type="text" name="sid" value="<?php echo $row['sid']?>" /> 					</td></tr>                   <tr>
														<th style="border:1px solid red; align:left;width:155px; margin-left:5px; margin-right:5px; padding:5px;" rowspan='1'>Station Name</th>
															<td style="border:1px solid red; align:left; margin-left:5px; margin-right:5px; padding:5px;">
															<input type="text" name="sname" value="<?php echo $row['sname'] ?>"></td></tr>
															<tr><th style="border:1px solid red; align:left; margin-left:5px; margin-right:5px; padding:5px;"  colspan='1'>Station Code</th>
															<td style="border:1px solid red; align:left; margin-left:5px; margin-right:5px; padding:5px;">
															<input type="text" name="scode" value="<?php echo $row['scode'] ?>"></td></tr>
															<tr>
														<th style="border:1px solid red; align:left; margin-left:5px; margin-right:5px; padding:5px;"  colspan='1'>Corridor</th>
															<td style="border:1px solid red; align:left; margin-left:5px; margin-right:5px; padding:5px;">
															<input type="text" name="cdor" value="<?php echo $row['cdor'] ?>"></td></tr>
															<tr>
														<th style="border:1px solid red; align:left; margin-left:5px; margin-right:5px; padding:5px;"  colspan='1'>Distance(m)</th>
															<td style="border:1px solid red; align:left; margin-left:5px; margin-right:5px; padding:5px;">
															<input type="text" name="dis" value="<?php echo $row['dis'] ?>"></td></tr>
															<tr>
														<th style="border:1px solid red; align:left; margin-left:5px; margin-right:5px; padding:5px;"  colspan='1'>Contact No</th>
															<td style="border:1px solid red; align:left; margin-left:5px; margin-right:5px; padding:5px;">
															<input type="text" name="cno" value="<?php echo $row['cno'] ?>"></td></tr>
															
															<tr>
														<th style="border:1px solid red; align:left; margin-left:5px; margin-right:5px; padding:5px;"  colspan='1'>Opening Date</th>
															<td><input type="text" name="opd" value="<?php echo $row['opd'] ?>"></td></tr>
															<tr>
														<td style="border:1px solid red; align:left; margin-left:5px; margin-right:5px; padding:5px;"  colspan='1'><b>Near By Places</b></td>
															<th style="border:1px solid red; align:left; margin-left:5px; margin-right:5px; padding:5px;">
															<input type="text" name="nbp" value="<?php echo $row['nbp'] ?>"></th></tr>
															
														
													<?php
		}
													?>	
														
												</table>
												<input type="submit" name="upd" value="update" style="width:122px;padding:5px;background-color:red;color:white">
											</form>
											<?php
    if(isset($_POST["upd"])){
	        $sid=$_POST["sid"];
			$sname=$_POST["sname"];
			$scode=$_POST["scode"];
			$sdor=$_POST["cdor"];
			$dis=$_POST["dis"];
			$con=$_POST["cno"];
			$opd=$_POST["opd"];
			$nbp=$_POST["nbp"];
			$sql="UPDATE list SET sid='$sid',sname='$sname',scode='$scode',cdor='$sdor',dis='$dis',cno='$con',opd='$opd',nbp='$nbp' WHERE id='$id'";
			if(mysqli_query($conn,$sql)){
				
				?>
			  <script>
			     alert("Updated successfully");
			  </script>
			  <?php
			}
			else
			{
				echo "unsuccessful".mysqli_error($conn);
		}
						}
						
						?>
				
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
</div>
</body>
</html>
