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
<a href="user_panel.php"><img src="logo.png" height="85px" class="logo"></a>

<ul class="menu">
	<li><a href="user_panel.php">Home</a></li>
	<li><a href="request.php">Request</a></li>
	<li><a href="about.php">About Us</a></li>
	<li><a href="contact.php">Contact Us</a></li>
	<li><?php include 'login1.php';?></li>
</div>
<div class="container">
<form action="msg2.php" method="get">
<label>Enter Full Name</label><br>
<input type="text" placeholder="Full Name" name="q_name"><br><br>
<label>Phone number</label><br>
<input type="text" name="q_phone_no" placeholder="Phone Number"><br><br>
<label>Email-Id</label></br>
<input type="email" name="q_email" placeholder="Email ID"><br><br>
<label>City</label><br>
<input type="text" name="q_city" placeholder="City"><br><br>
<label>Query</label><br>
<textarea rows=5 cols=22></textarea><br>
<input type="submit" value="Submit">
</div>
</div>
</table>
</form>
</body>
</html>
