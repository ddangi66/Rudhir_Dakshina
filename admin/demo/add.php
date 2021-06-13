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
<form action="msg.php" method="get">
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
<input type="submit" value="Submit">
</div>
</div>
</div>
</table>
</form>
</body>
</html>
