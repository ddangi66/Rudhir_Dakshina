<html>
<head>
<link rel="stylesheet" type="text/css" href="request.css">
<title>
Request Blood
</title>
</head>
<body>
<div class="nav1">
<a href="index.php"><img src="logo.png" height="85px" class="logo"></a>

<ul class="menu">
	<li><a href="index.php">Home</a></li>
	<li><a href="donate.php">Donate</a></li>
	<li><a href="about.php">About Us</a></li>
	<li><a href="contact.php">Contact Us</a></li>
	<li><?php include 'login1.php';?></li>
</div>
<div class="container">
<form  method="post">
<fieldset>
<legend>Patient Details</legend>
<label>Patient Name</label><br>
<input type="text" placeholder="Enter Your Full Name" name="p_name"><br><br>
<label>Age</label><br>
<input type="number" name="p_age"><br><br>
<label>Select Blood Group</label><br>
<select name="bld_type"><br><br>
<option value="A+">A+</option>
<option value="A-">A-</option>
<option value="B+">B+</option>
<option value="B-">B-</option>
<option value="O+">O+</option>
<option value="O-">O-</option>
<option value="AB+">AB+</option>
<option value="AB-">AB-</option>
</select><br><br>
<label>Gender</label><br>
<input type="radio" name="p_sex" value="male">Male<br>
<input type="radio" name="p_sex" value="female">Female<br>
<input type="radio" name="p_sex" value="other">Other<br><br>
<label>Address</label><br>
<textarea rows=5 cols=22 name="p_address"></textarea><br>
</fieldset>

<fieldset>
<legend>Contact Details</legend>
<label>Contact Name</label><br>
<input type="text" placeholder="Enter Name" name="cp_name"><br><br>
<label>Phone number</label><br>
<input type="text" name="cp_phone" placeholder="Enter Phone Number" pattern="[0-9]{10}" title="Enter Valid Number"><br><br>
<label>Email-Id</label><br>
<input type="email" name="cp_email" placeholder="Email Id"><br><br>
<label>When Required</label><br>
<input type="date" name="when_required"><br><br>
<label>Any Message</label><br>
<textarea rows=5 cols=22 name="cp_message"></textarea><br>
</fieldset>
<input type="submit" value="Submit" name="submit">
</div>
</div>
</table>
</form>
<?php
	include("config.php");
	$name=$_POST['cp_name'];
	$phone_number=$_POST['cp_phone'];
	$email=$_POST['cp_email'];
	$date=$_POST['when_required'];
	$msg=$_POST['cp_message'];
	$pname=$_POST['p_name'];
	$page=$_POST['p_age'];
	$bldgrp=$_POST['bld_type'];
	$sex=$_POST['p_sex'];
	$add=$_POST['p_address'];
	if(isset($_POST['submit']))
	{

		$query=("insert into contact_patient values('$name','$phone_number','$date','$email','$msg');");
		$query1=("insert into patient values('$page','$pname','$bldgrp','$sex','$add');");
		$result=pg_query($conn,$query);
		$result1=pg_query($conn,$query1);
			if(!$result && !$result1)
			{
				echo "<script>alert('Not submitted');</script>";
			}
			else
			{
				echo "<script>alert('Submitted');</script>";
			}
	}
?>
</body>
</html>
