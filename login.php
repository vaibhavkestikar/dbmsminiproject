<?php
require 'dbconfig/config.php';

?>
<!DOCTYPE html>
<html>
<head>
<title>
CPRO
</title>
<link rel="stylesheet" href="CSS/style.css">
</head>
<body style="font-family: {'Montserrat', sans-serif};background-color:black; " >

<div class="fullscreen-bg">
    <video loop muted autoplay poster="img/videoframe.jpg" class="fullscreen-bg__video">
        <source src="video/Website background video.mp4" type="video/mp4">
		

       
    </video>
</div>
<!--video css-->
<style>
.fullscreen-bg {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
	width: 100%;
    height: 190%;
    overflow: hidden;
    z-index: -100;

}

.fullscreen-bg__video {
    position: absolute;
    top: 0;
    left: 0;
    width: 150%;
    height: 100%;
}</style>

<div id="main-wrapper" style="border:white;width:500px;
	margin:125px 400px;
	background:#F6F7F2;
	padding:1px;
	border-radius:10px;
	background-color:transparent;
	">
<label style="color:white;font-size:30px"
<b><center>SIGN   IN</center></b>
</label>

<center><form class="myform" action=""
  method="post">
<font color="#1D2247" size="3">
<h4><label style="color:#ffffff;font-size:20px;">Username</label></h4>

<input type="text" name="susername" class="inputvalues" style="color:#ffffff;width:48%;padding:7px;margin:0 auto;border:2px solid #ffffff;background-color:transparent; ;
" placeholder="Username" required/><br>

<h4><label style="color:#ffffff;font-size:20px;">Password</label></h4>

<input type="password" name="spassword" class="inputvalues" style="color:#ffffff;width:48%;padding:7px;margin:0 auto; border:2px solid #ffffff;background-color:transparent;" placeholder="Enter Password" required/>
<br><br>



<input  type="submit" name="login_btn" id="login_btn"
style="font-weight:bold;
background-color: #71BA51;
    color: #ffffff ;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
	margin:4px 2px;
	width:50%;
	  box-shadow: 0 15px white;

	border-radius:10%;
	font-size:20px;
	box-shadow: 2px 2px 2px #888888;
	border:2px solid #ffffff;
	background-color:transparent;" value="Sign In"/><br> 
	
	
	<a href="register.php">
	
<input type="button" name='reg_btn' id="reg_btn" style="font-weight:bold;
background-color: #2980b9 ;
    color:#ffffff ;
	
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
		  box-shadow: 0 15px white;

    font-size: 16px;
	width:50%;
	border-radius:10%;
	font-size:20px;
	box-shadow: 2px 2px 2px #888888;
	border:2px solid #ffffff;
	background-color:transparent;" value="Register"/></a><br>
</form>
</center>
</div>


<?php


if(isset($_POST['login_btn'])){
	$susername = $_POST['susername'];
	$spassword = $_POST['spassword'];

	$qry = "SELECT username,password FROM `logininfo` WHERE `username`='$susername' AND `password`='$spassword'";
	$result = mysqli_query($con,$qry);
	$row = mysqli_num_rows($result);
	

	
	if($row < 1){
		?>
		<script>
			alert('Invalid Username or Password!');
			window.open('login.php','_self');
		</script>
		<?php
	}
	else{
		echo "<script>location.href='http://localhost/home.php'</script>";
		


	}
}
?>
</body>
</html>