<?php
require 'dbconfig/config.php';

?>

<!DOCTYPE html>

<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
}

.regForm {
  background-color: #ffffff;
  margin: 100px auto;
  font-family: Raleway;
  padding: 40px;
  width: 70%;
  min-width: 300px;
}

h1 {
  text-align: center;  
}

input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */


#btn{
  background-color: #4CAF50;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
  width:25%;
}

button:hover {
  opacity: 0.8;
}





.step.active {
  opacity: 1;
}


}
</style>
<body>

<form  class="regForm" action="" method="post">
	` <h1>PROJECT DETAILS</h1>

 
  <!-- One "tab" for each step in the form: -->
  <div class="tab">About:
    <p><input name="pid" type="text" class="inputvalues" style="width:30%;padding:7px;margin:0 auto;color:#42729B;" placeholder="Project ID * "/ required></p>
    <p><input name="pname" type="text" class="inputvalues" style="width:35%;padding:7px;margin:0 auto;color:#42729B;" placeholder="Project Name *"/ required></p>
	<p><input name="pdesc" type="text" class="inputvalues" style="width:35%;padding:7px;margin:0 auto;" placeholder="Project Brief Description*"/required><br><br></p>
	<p><input name="pcat" type="text" class="inputvalues" style="width:48%;padding:7px;margin:0 auto;" placeholder="CATEGORY"/></p>
		<p><input name="ploc" type="text" class="inputvalues" style="width:48%;padding:7px;margin:0 auto;" placeholder="Project Location"/></p>
      <p><input name="prating" type="text" class="inputvalues" style="width:48%;padding:7px;margin:0 auto;" placeholder="Project Rating Out of 10"/></p>
	<P><input name="start_date" type="text" class="inputvalues" style="width:48%;padding:7px;margin:0 auto;" placeholder="Start Date"/></P>
	<P><input name="status" type="text" class="inputvalues" style="width:48%;padding:7px;margin:0 auto;" placeholder="Status"/></P>
  </div>
  
  
	
  <div class="tab">Project Founder Details:
      <p><input name="fid" type="text" class="inputvalues" style="width:48%;padding:7px;margin:0 auto;" placeholder="Founder ID*"/></p>

    <p><input name="pfname" type="text" class="inputvalues" style="width:48%;padding:7px;margin:0 auto;" placeholder="Founder Name*"/></p>
    <p><input name="pfteamname" type="text" class="inputvalues" style="width:48%;padding:7px;margin:0 auto;" placeholder="Project Team Name"/></p>
  </div>
  <div class="tab">Parent Company Details:
    <p><input name="paren_com" type="text" class="inputvalues" style="width:48%;padding:7px;margin:0 auto;" placeholder="Parent Company *"/required ></p>
    <p><input name="paren_cat" type="text" class="inputvalues" style="width:48%;padding:7px;margin:0 auto;" placeholder="Parent Category"/></p>
    <p><input name="paren_location" type="text" class="inputvalues" style="width:48%;padding:7px;margin:0 auto;" placeholder="LOCATION"/></p>
    <p><input name="fname" type="text" class="inputvalues" style="width:48%;padding:7px;margin:0 auto;" placeholder="Founder Name"/></p>
	    <p><input name="fportfolio" type="text" class="inputvalues" style="width:48%;padding:7px;margin:0 auto;" placeholder="Founder portfolio"/></p>


  </div>
  <div class="tab">Project Description:
      <p><input name="pdescrip" type="text" class="inputvalues" style="width:48%;padding:7px 10px;margin:0 auto;" placeholder="Description"/></p>
    <p><input name="papp" type="text" class="inputvalues" style="width:48%;padding:7px;margin:0 auto;" placeholder="Applications"/></p>
	    <p><input name="pchal" type="text" class="inputvalues" style="width:48%;padding:7px;margin:0 auto;" placeholder="Challenges"/></p>


  </div>
  
  <div class="tab">Cost:
      <p><input name="pcost" type="text" class="inputvalues" style="width:48%;padding:7px 10px;margin:0 auto;" placeholder="Project Cost"/></p>
    <p><input name="paren_val" type="text" class="inputvalues" style="width:48%;padding:7px;margin:0 auto;" placeholder="Valuation"/></p>
	    


  </div>
  
  
    <div >
      <input   type="submit" name='submit'  ></input>
     
    </div>
  
  
</form>




<?php

if(isset($_POST['submit']))
{
	$pid=$_POST['pid'];
	$pname=$_POST['pname'];
	$pdesc=$_POST['pdesc'];
	$pcat=$_POST['pcat'];
	$ploc=$_POST['ploc'];
	$prating=$_POST['prating'];
	$start_date=$_POST['start_date'];
	$status=$_POST['status'];
	
	$fid=$_POST['fid'];
	$pfname=$_POST['pfname'];
	$pfteamname=$_POST['pfteamname'];
	
	$paren_com=$_POST['paren_com'];
	$paren_cat=$_POST['paren_cat'];
	$paren_location=$_POST['paren_location'];
	$fname=$_POST['fname'];
	$fportfolio=$_POST['fportfolio'];
	
	$pdescrip=$_POST['pdescrip'];
	$papp=$_POST['papp'];
	$pchal=$_POST['pchal'];
	
	$pcost=$_POST['pcost'];
	$paren_val=$_POST['paren_val'];

	
	
	
	$query1="insert into PROJECT_DETAILS values('$pid','$pname','$pdesc','$pcat','$ploc','$prating','$start_date','$status')";
	$query2="insert into FOUNDER values('$fid','$pfname','$pfteamname')";
	$query3="insert into PARENT_COMPANY values('$pid','$fid','$paren_com','$paren_cat','$paren_location','$fname','$fportfolio')";
	$query4="insert into PDESCRIPTION values('$pid','$pdescrip','$papp','$pchal')";
	$query5="insert into FIGURES values('$pid','$fid','$pcost','$paren_val')";
	
	if( mysqli_query($con,$query1) && mysqli_query($con,$query2) && mysqli_query($con,$query3) && mysqli_query($con,$query4) && mysqli_query($con,$query5))
	{
		echo '<script type="text/javascript">alert("Project Successfully Inserted!")</script>';
	}
	else
	{
		echo '<script type="text/javascript">alert("Insertion Failed")</script>';
	}




	


}


?>

</body>
</html>
