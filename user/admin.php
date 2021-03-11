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
	<meta name="description" content="zerotheme.com">
	
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
								<h1 class="entry-title">Welcome to the admin page</h1>
							</div>
							<div class="header">
		<div id='cssmenu' style="background-color:Red;">
			<ul>
			    <li><a href='#'id="R"><span>Registration For Station </span></a></li>
			   <li><a href='adshow.php'><span>Show Station</span></a></li>
			   <li><a href='ed.php' id="enq"><span>Enquiry Details</span></a></li>
			   <li><a href='comp.php' id="enq"><span>Complain Details</span></a></li>
			   <li><a href='park.php' id="p"><span>SET PARKING</span></a></li>
			   <li><a href="logout2.php"><i align="navbar-right"><span>  Log Out</span></i></a></li>
			</ul>
		</div>
	</div>
					<script>
	   $(document).ready(function(){
		   $("#e").hide();
	   $("#en").click(function(){
		   $("#e").show();
	   });
	    
	   });
	</script>	<script>


</script>												

							<?php
	$cont=mysqli_connect("localhost","root","","contact");
	  if(isset($_POST["cn"])){
		  $show="select name,email,mob,subject,message FROM detail";
		  $enq=mysqli_query($cont,$show);
		  
	  }
	?><center><div id="e">
	<form method="post" action="">
	<h3 style="color:red">Enquiry Details<h3>
	<table style="border-style: solid; border-width: 3px; border-color:red;" id="deta">
	                                                       <tr style="display:hidden">
														<th style="border:1px solid red; align:left; margin-left:5px; margin-right:5px; padding:5px;" rowspan='1'>Sr.No.</th>
														<th style="border:1px solid red; align:left; margin-left:5px; margin-right:5px; padding:5px;" rowspan='1'>User Name</th>
														<th style="border:1px solid red; align:left; margin-left:5px; margin-right:5px; padding:5px;" rowspan='1'>User Email</th>
														<th style="border:1px solid red; align:left; margin-left:5px; margin-right:5px; padding:5px;" rowspan='1'>Mobile no</th>
														<th style="border:1px solid red; align:left; margin-left:5px; margin-right:5px; padding:5px;" rowspan='1'>Subject</th>
														<th style="border:1px solid red; align:left; margin-left:5px; margin-right:5px; padding:5px;" rowspan='1'>Enquiry Message</th>
														<th style="border:1px solid red; align:left; margin-left:5px; margin-right:5px; padding:5px;" rowspan='1'>Reply Message</th>
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
															<td style="border:1px solid red; align:left; margin-left:5px; margin-right:5px; padding:5px;"><?php echo $info['message'] ?></td>
															<td>	
															
															<textarea name="message"   rows="4" cols="11" required="required"
													        placeholder="Message" id="msg" style="width:300px;height:88px;float:right"></textarea>
															</td>
															
															
															
															<td style="border:1px solid red; align:left; margin-left:5px; margin-right:5px; padding:5px;">
		<a href="#?email=<?php echo $info['email']?>?message=" name="rpl" id="rpy"><i style="color:blue">Reply</i></a>
		
		 <a href="delete1.php?email=<?php echo $info['email']?>"><i style="color:red">Delete</i></a> </td>
															</tr>		

													
	  <?php } 
	  ?>
	  </table></form></div></center>
	  
	  <?php
	     if(isset($_POST["rpl"])){
			  $email=$_POST['email'];
			  $msg=$_GET["message"];
			  $mg="INSERT INTO detail(admin_reply)VALUES('$msg')WHERE email='$email'";
			  if(mysqli_query($cont,$mg)){
				echo "successfully update";
				header('location:admin.php');
			}
			else {
				echo "error".mysqli_error($cont);
			}
		 }
	  ?>
	 
	<?php
	$conn=mysqli_connect("localhost","root","","station");
	    if(isset($_POST["submit"])){
			$sid=$_POST["sid"];
			$sname=$_POST["sname"];
			$scode=$_POST["scode"];
			$sdor=$_POST["sdor"];
			$dis=$_POST["dis"];
			$con=$_POST["con"];
			$opd=$_POST["opd"];
			$nbp=$_POST["nbp"];
			$sql="INSERT INTO list(sid,sname,scode,cdor,dis,cno,opd,nbp)VALUES('$sid','$sname','$scode','$sdor','$dis','$con','$opd','$nbp')";
			if(mysqli_query($conn,$sql)){
				?>
			  <script>
			     alert("DATA IS SAVED SUCCESSFULLY");
			  </script>
			  <?php
			}
			else
			{
				echo "unsuccessful".mysqli_error($conn);
		}
						}
						
						?>
									
							<div class="art-content">
							<form method="post" action="">
					<center>		
				<table style="border-style: solid; border-width: 3px; border-color:red;clear:both">
				<caption style='background-color:red; padding:8px;'><h6>Registration For All Station List</h6></caption>
				<tr><td style="border:1px solid red; align:left; margin-left:5px;
					    margin-right:5px; padding:5px;">Station Id</td><td><input type="text" name="sid" ></td></tr>
				<tr><td style="border:1px solid red; align:left; margin-left:5px;
					    margin-right:5px; padding:5px;width:330px">Station Name</td><td><input type="text" name="sname" ></td></tr>
				<tr><td style="border:1px solid red; align:left; margin-left:5px;
					    margin-right:5px; padding:5px;">Station Code</td><td><input type="text" name="scode" ></td></tr>
				<tr><td style="border:1px solid red; align:left; margin-left:5px;
					    margin-right:5px; padding:5px;">Corridor</td><td><input type="text" name="sdor" ></td></tr>
				<tr><td style="border:1px solid red; align:left; margin-left:5px;
					    margin-right:5px; padding:5px;">Distance(m)</td><td><input type="text" name="dis" ></td></tr>
				<tr><td style="border:1px solid red; align:left; margin-left:5px;
					    margin-right:5px; padding:5px;">Contact No</td><td><input type="text" name="con" ></td></tr>
				<tr><td style="border:1px solid red; align:left; margin-left:5px;
					    margin-right:5px; padding:5px;">Opening Date</td><td><input type="text" name="opd" ></td></tr>
				<tr><td style="border:1px solid red; align:left; margin-left:5px;
					    margin-right:5px; padding:5px;">Near By Places </td><td><input type="text" name="nbp" ></td></tr>
					  <tr><td colspan="2"align="center">
						<input type="submit" name="submit" value="Submit"style="padding:5px;color:white;background-color:red;margin:10px;">
						<input type="submit" name="show" value="Show" onclick="window.open('adshow.php')" style="padding:5px;color:white;background-color:red;margin:10px;">
					
						</td></tr>
				
				</table>
				
				</center>
							</form>
								</div>
						</article>
					</div>
				</div>
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
									<li><a href="http:www.twitter.com/lucknow_metro"><i class="fa fa-twitter"></i></a>
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