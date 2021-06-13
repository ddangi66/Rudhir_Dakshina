<html>
<head>
<title>Rudhir Dakshina</title>
<link rel="stylesheet" type="text/css" href="user_panel.css">
</head>
<body>
<div clas="main">
<div class="nav">
<img src="logo.png" height="85px" class="logo"></a>
<ul class="menu">
	<li><a href="donate.php">Donate</a></li>
	<li><a href="request.php">Request</a></li>
	<li><a href="about.php">About Us</a></li>
	<li><a href="contact.php">Contact Us</a></li>
	<!--li><?php include 'login1.php';?></li-->
	<li><a href="../index.php">Log Out</a></li>
<div class="request_box">
	<?php 
		include("config.php");
		$query1=("select * from req_msg ;");
		$result=pg_query($conn,$query1);
		/*echo"<table class='content-table'><td>Required Blood Group</td><td>Message</td></tr></table>";
		echo"<table border=2 class='content-table'><tr><th>Name</th><th>Address</th></table>";*/	
		while($row=pg_fetch_array($result))
		{
			
			$name=$row['blood_group_req'];
			$grp=$row['req_msg_1'];
			/*echo "<table><tr><td>$name</td><td>$grp</td>";
			echo "<table><tr>";
			echo"<tr>";
			echo"<td>$name</td><td>$grp</td>";
			echo"</tr></table>";*/
			echo "<center><h3>Required Blood Group</h3></center>";			
			echo "<center><h5>$name</h5></center>";
			echo "<hr></hr>";
			echo "<center><h3>Message</h3></center>";			
			echo "<center><h5>$grp</h5></center>";
			echo "<hr></hr>";

		}
	?>
</div>
</div>

</div>
</div>
</body>
</html>
