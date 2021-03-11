<?php
						$conn=mysqli_connect("localhost","root","","station");
						$sstar=$_GET['stationstart'];
						$send=$_GET['stationend'];
						$see="SELECT * FROM list WHERE (id BETWEEN '$sstar' AND '$send')   OR (id BETWEEN '$send' AND '$sstar')";  
						$result=mysqli_query($conn,$see);						
						if (mysqli_num_rows($result) > 0) {?>
						<table style="border-style: solid; border-width: 3px; border-color:red;">
													<caption style='background-color:red; padding:5px; color:white'><h6>Show All Station List</h6></caption>
													<tr>
														<th style="border:1px solid red; align:left; margin-left:5px; margin-right:5px; padding:5px;" rowspan='1'>S.No.</th>
														<th style="border:1px solid red; align:left; margin-left:5px; margin-right:5px; padding:5px;" rowspan='1'>Station ID</th>
														<th style="border:1px solid red; align:left; margin-left:5px; margin-right:5px; padding:5px;" rowspan='1'>Station Name</th>
											  			<th style="border:1px solid red; align:left; margin-left:5px; margin-right:5px; padding:5px;"  colspan='1'>Station Code</th>
														<th style="border:1px solid red; align:left; margin-left:5px; margin-right:5px; padding:5px;"  colspan='1'>Corridor</th>
														<th style="border:1px solid red; align:left; margin-left:5px; margin-right:5px; padding:5px;"  colspan='1'>Distance(m)</th>
														<th style="border:1px solid red; align:left; margin-left:5px; margin-right:5px; padding:5px;"  colspan='1'>Contact No</th>
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
   		<?php
		}
													?>
		<?php


  


?>	
			
	<?php
	 $query="SELECT*FROM list WHERE id='$sstar'";
		$shown=mysqli_query($conn,$query);
	    $que="SELECT*FROM list WHERE id='$send'";
		$show=mysqli_query($conn,$que);
		while(($set=mysqli_fetch_assoc($show))&& ($sets=mysqli_fetch_assoc($shown))){?>
		
		<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet"href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="bootstrap/fonts/glyphicons-halflings-regular.css">
<script src="bootstrap/js/bootstrap.js"></script>
<script src="../js/jquery1111.min.js" type="text/javascript"></script>
	<script src="../js/script.js"></script>
		
	   		<form method="post" action=""><br>
		
			  <b>Distance   From  </b><b><?php echo $set['sname']?></b>
			  <input type="text" style="width:56px;display: none" id="start" value=<?php echo $set['dis']?>><b>To</b>
			  <?php echo $sets['sname']?>
			  <input type="text" style="width:56px;display: none" id="end" value=<?php echo $sets['dis']?>> <b>=</b>
			  <b id="demo"></b> &nbsp <b>  And Fare = Rs </b><b id="rs"></b>&nbsp Time:<?php
		date_default_timezone_set("Asia/Kolkata");
		echo date("h:i:sa")."&nbsp"."&nbsp";
		echo date("d/m/y");
		?>
<center><button type="button" style="background-color:red;color:white"class="btn btn-lg" id="for_btn"
				data-toggle="modal" data-target="#myModal">Ticket Booking</button></center>
			<div id="myModal" class="modal fade" role="dialog">
			 <div class="modal-dialog">
			 <div class="modal-content"><div class="modal-header">
			 <center><h2>Happy<img src="lmt.jpg" style="width:50px;">Journey</h2></center></div>
			 <div class="modal-body"><div>
			 <b>From    </b><b><?php echo $set['sname']?></b>
			  <input type="text" style="width:56px;display: none" id="start" value=<?php echo $set['dis']?>><b>To</b
			  <?php echo $sets['sname']?>
			  <input type="text" style="width:56px;display: none" id="end" value=<?php echo $sets['dis']?>>
			 </div><div style="float:left;width:200px;overflow:hidden"><b>Time</b><?php date_default_timezone_set("Asia/Kolkata");
		echo date("h:i:sa")."&nbsp"."&nbsp";
		echo date("d/m/y");
		?></div><div style="float:right"><b>Distance</b> = <b id="demo2"></b> m</div><br>
		 <center><i style="font-size:33px;line-height:72px" class="fa fa-inr"></i> 
		    <span id="rs2" style="font-size:44px"></span>
		 </center>
		 <h3>Total Stations</h3>
		 <div style="height:200px">
		 <table style="float:right;clear:both">
		 <?php 
		   $stn="SELECT sname FROM list WHERE (id BETWEEN '$sstar' AND '$send')   OR (id BETWEEN '$send' AND '$sstar')";
		   $num=mysqli_query($conn,$stn);
		    $count=0;
		   while($std=mysqli_fetch_assoc($num)){
			   $count++   ?>
			                    
								     <tr>
									    <td><?php echo $count ?></td>
										<td><?php echo $std['sname'] ?></td>
									 </tr>
								
		   <?php } ?>
		   <style>
		   p.test {
					width: 50%;
					font-size: 108px;
					color: gray;
					text-align: center;
					position: absolute;
				}
		   </style>
		   <script>
		   $(document).ready(function(){
			   $("#for_btn").click(function(){
				   $(".note").css("display","none");
			   });
		   });
		   </script>
		   <p class="test"><?php echo $count ?></p>
		</table>
		
		</div>
			
			 <div class="modal-footer" style="clear:both">
			 <button type="button"class="close" data-dismiss="modal">&times;</button>
			 </div>
			 
			 </div></div>
			  </form></html> 
			  
			  
			  
			  <script>
	
				var x=document.getElementById("start").value;
				var y=document.getElementById("end").value;
					if( x < y ){
					var z = y - x; 
						document.getElementById("demo").innerHTML = Math.round(Math.abs(z));
						document.getElementById("demo2").innerHTML = Math.round(Math.abs(z));		 }
					else {
					var z = x - y;
						document.getElementById("demo").innerHTML =Math.round(Math.abs(z));
						document.getElementById("demo2").innerHTML = Math.round(Math.abs(z));
							}

				 stn=<?php echo $count ?>  
			if(stn < 2){
				document.getElementById("rs").innerHTML=10;
				document.getElementById("rs2").innerHTML=10;
			}
			else if(stn < 3){
			document.getElementById("rs").innerHTML=15;
			document.getElementById("rs2").innerHTML=15;
			}
			else if(stn < 4){
				document.getElementById("rs").innerHTML=20;
				document.getElementById("rs2").innerHTML=20;
			}
			else if(stn < 5){
				document.getElementById("rs").innerHTML=20;
				document.getElementById("rs2").innerHTML=20;
			}
			else if(stn < 6){
				document.getElementById("rs").innerHTML=20;
				document.getElementById("rs2").innerHTML=20;
			}
			else if(stn < 7){
				document.getElementById("rs").innerHTML=20;
				document.getElementById("rs2").innerHTML=20;
			}
			else if(stn < 8){
				document.getElementById("rs").innerHTML=20;
				document.getElementById("rs2").innerHTML=20;
			}
			else if(stn < 9){
				document.getElementById("rs").innerHTML=30;
				document.getElementById("rs2").innerHTML=30;
			}
			else if(stn < 10){
				document.getElementById("rs").innerHTML=30;
				document.getElementById("rs2").innerHTML=30;
			}
			else if(stn < 11){
				document.getElementById("rs").innerHTML=30;
				document.getElementById("rs2").innerHTML=30;
			}
			else{
				document.getElementById("rs").innerHTML=40;
				document.getElementById("rs2").innerHTML=40;
			}
			
				   
			  </script>					 
		<?php
		}
		?>
		
		
		
		
														 