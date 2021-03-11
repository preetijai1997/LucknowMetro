 <?php
						$conn=mysqli_connect("localhost","root","","station");
						$sstar=$_GET['stationstart'];
						$send=$_GET['stationend'];
						
						
						echo "$sstar";
						$r="select * from list where id='$sstar'";
                        $q=mysqli_query($conn,$r);
						
						$rr="select * from list where id='$send'";
                        $qq=mysqli_query($conn,$rr);
							//echo"$send";
						//print_r($sstar);
						
						
// Code start for sdfjndgskd ***************

	?>		
<table align="center">

<th>id</th>
<th>sname</th>




<tbody>
<?php

while($user=mysqli_fetch_array($q))
{
 $id=$user['id'];
 $name=$user['sname'];

  


?>

<tr>
<td><?php echo $id; ?></td>
<td><?php echo  $name;?></td>

<td><a href="update.php?id=<?php echo $id;?>">EDIT</a></td>
<td><a href="delete.php?id=<?php echo $id?>" onclick="return confirm('Are you sure you wish to delete this Record?');"> Delete </a></td>
 

</tr><?php
 }
 ?>

</tbody>
  
</table>
<table align="center">






<tbody>
<?php

while($user=mysqli_fetch_array($qq))
{
 $id=$user['id'];
 $name=$user['sname'];

  


?>

<tr>
<td><?php echo $id; ?></td>
<td><?php echo  $name;?></td>

<td><a href="update.php?id=<?php echo $id;?>">EDIT</a></td>
<td><a href="delete.php?id=<?php echo $id?>" onclick="return confirm('Are you sure you wish to delete this Record?');"> Delete </a></td>
 

</tr><?php
 }
 ?>

</tbody>
  
</table>