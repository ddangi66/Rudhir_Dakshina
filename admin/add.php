<html>
<head>
<link rel="stylesheet" type="text/css" href="add.css">
<title>
Donate Blood
</title>
</head>
<body background="c.jpg">
<div class="nav">
<div class="container">
<div class="form">
<form method="post">
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
<td><input type="number" placeholder="Age"></td><br><br>
<label>Gender</label><br>
<input type="radio" name="sex" value="male">Male<br>
<input type="radio" name="sex" value="female">Female<br>
<input type="radio" name="sex" value="other">Other<br><br>
<label>Phone number</label><br>
<input type="text" name="phone_no" placeholder="Enter Phone Number"><br><br>
<label>Address</label><br>
<textarea rows=5 cols=22></textarea><br>
<input type="submit" value="Add" name="add">
</div>
</div>
</div>
</table>
</form>
<!--?php
	include("config.php");
	$donor1=$_POST['donor_name'];
	$dob1=$_POST['donor_dob'];
	$group1=$_POST['blood_group'];
	$date1=$_POST['date_of_donation'];			
	$age1=$_POST['age'];
	$gender1=$_POST['sex']; 
	$phone1=$_POST['phone_no'];
	$address1=$_POST['address'];
	if(isset($_POST['add']))
	{
		$query="insert into blood_donor values('$donor1','$address1','$gender1','$age1','$phone1','$group1')";	
		$result=pg_query($conn,$query);
		
		$count=pg_num_rows($result);
		if($result)
		{
			echo "<script>alert('Data added successfully')</script>";
		}
		else 
		{
			echo"<script>alert('Data not added')</script>";
		}
	}
?-->

<?php
	$conn=pg_connect("host=192.168.16.1 dbname=BG18 user=BG18")
	or die("Cannot connect to database");

	if(isset($_POST['add']))
	{
		$result=pg_query($conn,"insert into blood_donor values('".$_POST['donor_name']."','".$_POST['donor_dob']."','".$_POST['address']."','".$_POST['sex']."','".$_POST['age']."','".$_POST['phone_no']."','".$_POST['date_of_donation']."','".$_POST['blood_group']."');") or die("could not execute the query");
			
		$count=pg_num_rows($result);
		if($result)
		{
			echo "<script>alert('Data added successfully')</script>";
		}
		else 
		{
			echo"<script>alert('Data not added')</script>";
		}
		
	}

?>

</body>
</html>
