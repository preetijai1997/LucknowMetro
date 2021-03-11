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
				<img src="../images/LMT.png" width="100px" height="300px" style="margin-bottom:10px;" />
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
			   <li class="active"><a href='index.php'><span>Home</span></a></li>
			   <li><a href='about.php'><span>About</span></a></li>
			   <li><a href='stations.php'><span>Stations</span></a></li>
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
				
				<section class="content-box boxstyle-1 box-1">
					<div class="zerogrid">
						<div class="row wrap-box">
							<div class="col-1-2">
							<div class="wrap-col">
									<center>
										<div class="w3-content w3-section" style="max-width:600px">
											<img class="mySlides" src="../images/Lucknow_Metro1.jpg" style="width:100%" />
											<img class="mySlides" src="../images/Lucknow_Metro2.jpg" style="width:100%" />
											<img class="mySlides" src="../images/Lucknow_Metro3.jpg" style="width:100%" />
											<img class="mySlides" src="../images/Lucknow_Metro4.jpg" style="width:100%" />
										</div>	
									</center>
								</div>
								<script>
									var myIndex = 0;
									carousel();
									function carousel() {
										var i;
										var x = document.getElementsByClassName("mySlides");
										for (i = 0; i < x.length; i++) {
											x[i].style.display = "none";  
										}
											myIndex++;
										if (myIndex > x.length) {myIndex = 1}    
										x[myIndex-1].style.display = "block";  
										setTimeout(carousel, 2000); 
									}
								</script>	
							</div>
							<div class="col-1-2">
								<div class="wrap-col">
									<div class="row">
										<div class="t-center" style="padding-top: 60px;">
											<div class="header">
												<div class="wrapper">
													<h1><span class="color-red"> Welcome to  L.M.T.Guide</span></h1>
												</div>
											</div>
											<p>The Lucknow Metro is a Mass Rapid Transit System (MRTS) being constructed to provide the city of Lucknow, Uttar Pradesh with an environment friendly atmosphere. The commencement of civil works started on 27 September 2014. Lucknow Metro Rail Corporation Limited or LMRC is working on this project which will be an alternative mode of transport since approximately 94% of the city's registered vehicles are private,city had over 2 million registerd vehicle in 2015.</p>
											<a href="https://en.wikipedia.org/wiki/Lucknow_Metro" class="button" target="_blank" >More Details</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div>
						<?php
						   if(isset($_GET["show"])){
						?>
						
						<img src="http://www.lmrcl.com/front-end/img/map-view.gif" id="img" height="250" width="1500" frameborder="0" style="border:0" allowfullscreen></div>
						   <?php } ?>
							
						 
						<form action="#" method="get">
							
						</br>
							<input type="submit" value="Show Route Map" id="ar" name="show" style="width:250px;height:40px;color:white;background-color:red;border-radius:5px;font-family:max-height;font-size:15px;"></div>
						</form>
<script>
  	   $(document).ready(function(){
    $("#ar").click(function(){
        $("#dr").hide();
    });
	 });
</script>						
						
						</div>
					</div>
				</section><br>
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
<script src="js/lightbox-plus-jquery.min.php"></script>
</div>
</body>
</html>