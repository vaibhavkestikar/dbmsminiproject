<?php
require 'dbconfig/config.php';

?>
<html>
<body>


		
	<?php
	
	if(isset($_GET['paren'])){
	$pra=(int)$_GET['paren'];
	$query="SELECT * FROM PARENT_COMPANY WHERE PID='$pra'";
	$query_run=mysqli_query($con,$query);
	//echo $mysqli_fetch_assoc($query_run);
	$row=mysqli_fetch_array($query_run);
	}
	
		if(isset($_POST['b2'])){
			$upc=$_POST['upc'];
			$uc=$_POST['uc'];
	$ul=$_POST['ul'];
	$uf=$_POST['uf'];
	$ufp=$_POST['ufp'];
	
	//$sql1="UPDATE PROJECT_DETAILS SET PNAME='$upname1' WHERE PID='$pa'";
	$sql1="UPDATE PARENT_COMPANY SET PAREN_COM='$upc',PAREN_CAT='$uc',PAREN_LOCATION='$ul',FNAME='$uf',FPORTFOLIO='$ufp' WHERE PID='$pra'";
			$run=mysqli_query($con,$sql1);
          if($run){
			echo "<script type='text/javascript'>alert('Project Updated Successfully!');
			location.href='http://localhost/parendisplay.php';</script>";
			}
			else
			{
				echo '<script type="text/javascript">alert("Updation Failed!!")</script>';
			}
		}		
		
	
	
	?>
		<form style=" background-color: #ffffff;text-align:center;
  margin: 100px auto;
  font-family: Raleway;
  padding: 40px;
  width: 70%;
  min-width: 300px;" action="" method="POST">

	Parent Company:<br><input class='ui' name='upc' value='<?php echo $row[2];?>'><br>
		Category:<br><input class ='ui'name='uc' value='<?php echo $row[3];?>'><br>
		Location:<br><input class ='ui' name='ul' value='<?php echo $row[4];?>'><br>

	  Founder Name:<br><input class='ui' name='uf' value='<?php echo $row[5];?>'><br>
 Founder Portfolio:<br><input class='ui' name='ufp' value='<?php echo $row[6];?>'><br>
		<input type="submit" style="60%;"  name='b2' />
		</form>
		<style>
		.ui{
			width:60%;padding:7px;margin:0 auto;color:#42729B;
		}
		</style>
	
	
	

	
	
	
	
	


</body>
</html>

		
		
	