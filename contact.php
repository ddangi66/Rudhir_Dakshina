<html>
<head>
<link rel="stylesheet" type="text/css" href="donate.css">
<title>
Contact Us
</title>
</head>
<body>
<div class="nav">
<div class="nav1">
<a href="index.php"><img src="logo.png" height="85px" class="logo"></a>

<ul class="menu">
	<li><a href="index.php">Home</a></li>
	<li><a href="donate.php">Donate</a></li>
	<li><a href="request.php">Request</a></li>
	<li><a href="about.php">About Us</a></li>
	<li><?php include 'login1.php';?></li>
</div>
<div class="container">
<form method="post">
<label>Enter Full Name</label><br>
<input type="text" placeholder="Full Name" name="cu_name"><br><br>
<label>Phone number</label><br>
<input type="text" name="cu_phone" placeholder="Phone Number" pattern="[0-9]{10}" title="Enter Valid Number"><br><br>
<label>Email-Id</label></br>
<input type="email" name="cu_email" placeholder="Email ID"><br><br>
<label>City</label><br>
<input type="text" name="cu_city" placeholder="City"><br><br>
<label>Query</label><br>
<textarea rows=5 cols=22 name="cu_message"></textarea><br>
<input type="submit" value="Submit" name="submit">
</div>
</div>
</table>
</form>
<?php
	include("config.php");
	$qname=$_POST['cu_name'];
	$q_no=$_POST['cu_phone'];
	$qemail=$_POST['cu_email'];
	$qcity=$_POST['cu_city'];
	$query_msg=$_POST['cu_message'];
	
	if(isset($_POST['submit']))
	{

		$query1=("insert into contact_us values('$qname','$q_no','$qemail','$qcity','$query_msg');");
		
		$result1=pg_query($conn,$query1);
		
			if(!$result1)
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
