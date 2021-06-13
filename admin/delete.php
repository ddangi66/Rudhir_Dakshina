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
<label>Phone number</label><br>
<input type="text" name="phone_no" placeholder="Donor's Phone Number"><br><br>
<input type="submit" value="Delete" name="delete">
</div>
</div>
</div>
</table>
</form>
<?php
	include("config.php");
	if(isset($_POST['delete']))
	{
		$donor_delete=$_POST['donor_name'];
		$phone_delete=$_POST['phone_no'];
		$query1=("delete from blood_donor where donor_name='$donor_delete' and phone_no='$phone_delete';");
		
		$result1=pg_query($conn,$query1);
		if(!$result1)
			{
				echo "<script>alert('Not Deleted;);</script>";
			}
			else
				echo "<script>alert('Deleted');</script>";
	}
?>
</body>
</html>
