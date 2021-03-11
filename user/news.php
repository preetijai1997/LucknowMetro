
<?php
	error_reporting(0);
	?>
	
	<?php session_start();
$email=$_SESSION['email'];

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
			   <li class="active"><a href='#'><span>Complain</span></a></li>
			   <li class='last'><a href='contact.php'><span>Contact</span></a></li>
			   
			   <li><a href="login.php"><i class="fa fa-user" align="navbar-right"></i></a></li>
			   <li><a href="ulogout.php" style="float:right;"><span>Log Out</span></a></li>
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
			<?php
  $conn=mysqli_connect("localhost","root","","contact");
   $email=$_SESSION['email'];
  $qn="SELECT name FROM comp WHERE email='$email'";
  $result=mysqli_query($conn,$qn); ?>
 <?php $row=mysqli_fetch_array($result)  ?>
 
		       <center><h1 style="color:red;">Welcome &nbsp <b style="color:red;"><?php echo $row['name']?></b></center>
			    <center><h1 style="color:red"> Please Submit Your Complain Or Suggestion</h1></center>
			                          
		
	<center><form method="post" action="">
	<table style="border-style: solid; border-width: 3px; border-color:red;background-color:#D3D3D3;margin:44px;" id="deta">
	    <tr><td><center><h1>MESSAGE BOX</h1></center></td></tr>
						
	    <tr>
															
															<td style=" text-align:left; margin-left:5px; margin-right:5px; padding:5px;
															color:black;"><b>NAME :<b style="margin-left:12px">
															
															<input type="text"name="nm"style="border:1px solid red;font-size:20px;margin-left:15px;width:500px"></td></tr>
															<tr>
															<td style=" text-align:left; margin-left:5px; margin-right:5px; padding:5px;
															color:black;"><b>SUBJECT :<b style="margin-left:12px">
															
															<input type="text"name="es"style="border:1px solid red;font-size:20px;width:500px"></td></tr>
															<tr><td style=" align:left; margin-left:5px; margin-right:5px; padding:5px;"><b>Time :</b>
															<input type="text" name="dt" value="<?php date_default_timezone_set("Asia/Kolkata");
		echo date("h:i:sa")."DATE";
		echo date("d/m/y");
		?>" ></td></tr>
															<tr><td style=" align:left; margin-left:5px; margin-right:5px; padding:5px;"><b>Complain/Suggestion</b></td></tr>
															<tr><td><textarea name="mst" id="message" class="form-control" rows="4" cols="25" style="height:88px;width:600px;font-size:22px;margin:0px;"
													placeholder="Message"></textarea></td></tr>
                                                <tr><td style="text-align:center"><input type="submit" value="SUBMIT" style="padding:10px;margin:5px;width:88px;color:white;
												background-color:red;font-size:18px"; name="rpl">													
                                                                                       <input type="submit" value="CHECK THE REPLY" style="padding:10px;margin:5px;width:188px;color:white;
												background-color:red;font-size:18px" id="ar" name="arpl"></td></tr> 
													
	 
	  </table></form></div></center>
	

				</div>
				<script>
				 $(document).ready(function(){
					$("#ar").click(function(){
						$("#e").show();
					}); 
				 });
				</script>
				<?php
				     $conn=mysqli_connect("localhost","root","","contact");
					 if(isset($_POST['rpl'])){
                     $email=$_SESSION['email'];
					 $date=$_POST['dt'];
					 $name= $_POST['nm'];
					 $msg=$_POST['mst'];
					 $sub=$_POST['es'];
					 $sug="INSERT INTO cmsg(name,email,sub,msg,date) VALUES('$name','$email','$sub','$msg','$date')";
					 if(mysqli_query($conn,$sug)){
						 ?>
						 <script>
						 alert(" Your message has been send successfully... You will get a response soon...");
					 </script><?php }
						 else{
							 echo "error";
						 }
					 
					 }
				?>
				<?php
				$email=$_SESSION['email'];
				    if(isset($_POST['arpl'])){
						 $sql="SELECT cmsg.sub,cmsg.msg,creply.date,creply.mst FROM creply JOIN cmsg ON creply.email=cmsg.email AND cmsg.email='$email'";
  $result=mysqli_query($conn,$sql); ?>
                                 
<center><div  id="e" >
	<form method="post" action="">
	<table style="border-style: solid; border-width: 3px; border-color:red;" id="deta">
	                                                       <tr>
														
														<th style="border:1px solid red; align:left; margin-left:5px; margin-right:5px; padding:5px;" rowspan='1'>SUBJECT</th>
														<th style="border:1px solid red; align:left; margin-left:5px; margin-right:5px; padding:5px;" rowspan='1'>MESSAGE</th>
														<th style="border:1px solid red; align:left; margin-left:5px; margin-right:5px; padding:5px;" rowspan='1'>REPLY MESSAGE</th>
														<th style="border:1px solid red; align:left; margin-left:5px; margin-right:5px; padding:5px;" rowspan='1'>DATE</th>
														</tr>
  
  <?php
  while($info=mysqli_fetch_assoc($result)){?>
  
	
	    <tr>
															
															<td style="border:1px solid red; align:left; margin-left:5px; margin-right:5px; padding:5px;"><?php echo $info['sub'] ?></td>
															
															<td style="border:1px solid red; align:left; margin-left:5px; margin-right:5px; padding:5px;">	<textarea name="message" id="message" class="form-control" rows="4" cols="25" style="height:88px;width:300px;font-size:22px;margin:0px;"
													placeholder="Message"><?php echo $info['msg'] ?></textarea></td>
														<td style="border:1px solid red; align:left; margin-left:5px; margin-right:5px; padding:5px;">	<textarea name="message" id="message" class="form-control" rows="4" cols="25" style="height:88px;width:300px;font-size:22px;margin:0px;"
													placeholder="Message"><?php echo $info['mst'] ?></textarea></td>
														<td style="border:1px solid red; align:left; margin-left:5px; margin-right:5px; padding:5px;"><?php echo $info['date'] ?></td>	
														
															
															
															
															
															</tr>		

													
	  
	 
 <?php } 
	  ?>
	   </table></form></div></center>
	   <?php } 
	  ?>
		</br>
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
									<li><a href="http//www.twitter.com/LucknowMetro"><i class="fa fa-twitter"></i></a>
									</li>
									<li><a href="http://m.facebook.com/lucknow_metro"><i class="fa fa-facebook"></i></a>
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