<html>
<head>
<link rel="stylesheet" type="text/css" href="donate.css">
<title>
Donate Blood
</title>
</head>
<body>
<div class="nav">
<div clas="main">
<div class="nav1">
<a href="user_panel.php"><img src="logo.png" height="85px" class="logo"></a>

<ul class="menu">
	<li><a href="user_panel.php">Home</a></li>
	<li><a href="request.php">Request</a></li>
	<li><a href="about.php">About Us</a></li>
	<li><a href="contact.php">Contact Us</a></li>
	<li><?php include 'login1.php';?></li>
</div>
<div class="container">
<form  method="post">
<label>Enter Full Name</label><br>
<input type="text" placeholder="Enter Your Full Name" name="donor_name"><br><br>
<label>Date Of Birth</label><br>
<input type="date" name="donor_dob"><br><br>
<label>Select Your Blood Group</label><br>
<select name="blood_group"><br><br>
<option value="A+">A+</option>
<option value="A-">A-</option>
<option value="B+">B+</option>
<option value="B-">B-</option>
<option value="O+">O+</option>
<option value="O-">O-</option>
<option value="AB+">AB+</option>
<option value="AB-">AB-</option>
</select><br><br>
<label>Date of donation</label><br>
<input type="date" name="date_of_donation"><br><br>
<label>Age</label><br>
<td><input type="number" placeholder="Age" name="age"></td><br><br>
<label>Gender</label><br>
<input type="radio" name="sex" value="male">Male<br>
<input type="radio" name="sex" value="female">Female<br>
<input type="radio" name="sex" value="other">Other<br><br>
<label>Phone number</label><br>
<input type="text" name="phone_no" placeholder="Enter Phone Number"><br><br>
<label>Address</label><br>
<textarea rows=5 cols=22 name="address"></textarea><br>
<input type="submit" value="Submit" name="submit">
</div>
</div>
</table>
</form>
</body>
</html>

<!--?php
	$conn=pg_connect("host=192.168.16.1 dbname=BG18 user=BG18")
	or die("Cannot connect to database");
	$id=$_POST['1'];

	if(isset($_POST['submit']))
	{
		pg_query($conn,"INSERT INTO blood_donor VALUES(1,'".$_POST['donor_name']."','".$_POST['donor_dob']."','".$_POST['address']."','".$_POST['sex']."','".$_POST['age']."','".$_POST['phone_no']."','".$_POST['date_of_donation']."','".$_POST['blood_group']."')") or die("could not execute the query");
	}

?-->




<?php
	$conn=pg_connect("host=192.168.16.1 dbname=BG18 user=BG18")
	or die("Cannot connect to database");
	$donor=$_POST['donor_name'];
	$dob=$_POST['donor_dob'];
	$group=$_POST['blood_group'];
	$date=$_POST['date_of_donation'];
	$age=$_POST['age'];
	$gender=$_POST['sex']; 
	$phone=$_POST['phone_no'];
	$address=$_POST['address'];
	if(isset($_POST['submit']))
	{
		$query="insert into blood_donor values('$donor','$dob','$address','$gender','$age','$phone','$date','$group')";	
		$result=pg_query($conn,$query);
		
		$count=pg_num_rows($result);
		if($count>0)
		{
			echo "<script>alert('Data added successfully')</script>";
		}
		else 
		{
			echo"<script>alert('Data not added')</script>";
		}
	}
?>

