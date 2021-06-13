<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1">
<style>
body
{
	font-family: Arial,Helvetica,sans-serif;
	
}
input[type=text]
{
	width: 100%;
	padding: 12px 20px;
	margin: 8px 0;
	display: inline-block;
	border: 1px solid #ccc;
	box-sizing: border-box;
}

input[type=password]
{
	width: 100%;
	padding: 12px 20px;
	margin: 8px 0;
	display: inline-block;
	border: 1px solid #ccc;
	box-sizing: border-box;
}

button
{
	background-color:firebrick;
	color: white;
	padding-top:10px;
	padding-left:15px;
	padding-right:15px;
	padding-bottom:10px;
	margin-top:1px;
	border: none;
	cursor: pointer;
	width: 100%;
	letter-spacing:2px;
	border-width:1px;
	font-family:sans-serif;
	font-size:15px;
}

/*button
{
text-decoration:none;
color:black;
padding:7px 10px;
font-family:sans-serif;
letter-spacing:2px;
border-color:firebrick;
border-style:solid;
border-width:1px;
}*/

button: hover
{
	opacity: 0.8;
}

.cancelbtn
{
	width: auto;
	padding: 10px 18px;
	background-color: firebrick;
}

.imgcontainer
{
	text-align: center;
	margin: 14px 0 12px 0;
	position: relative;
}

img.avatar
{
	width: 10%;
	border-radius: 50%;
}

.container
{
	padding: 16px;
	margin-top:10px;
}

span.psw
{
	float: right;
	padding-top: 16px;
}

.modal
{
	display: none;
	position: fixed;
	z-index: 1;
	left: 0;
	top: 0;
	width: 100%;
	height: 100%;
	overflow: auto;
	background:url("b1.png");
	background-repeat:no-repeat;
	background-size:1280px 800px;

	padding: 60px;
}
.modal-content
{
	background-color:#fefefe;
	margin:25px 25px 25px 360px;
	border:1px solid #888;
	width:30%;

	
}

.close
{
	position:absolute;
	right:25px;
	top:0;
	color:#000;
	font-size:35px;
	font-weight:bold;
}

.close:hover;
.close:focus
{
	color:red;
	cursor:pointer;

}

.animate
{
	-webkit-animation:animatezoom 0.6s;
	animation:animatezoom 0.6s;
}

@-webkit-keyframes animatezoom
{
	from{-webkit-transform:scale(0)}
	to{-webkit-transform:scale(1)}
}

@keyframes animatezoom
{
	from{transform:scale(0)}
	to{transform:scale(1)}
}

@media screen and (max-width:300px)
{
	span.psw{
	display:block;
	float:none;
	}
	.cancelbtn{
	 width:100%;
	}
}
</style>
</head>
<body>

<!--<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>-->



<form class="modal-content animate"  method="post">
<div class="imgcontainer">
<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>

<img src="a.png" alt="avatar" class="avatar"></div>
<div class="container">
<label for="uname">
<b>Username</b></label><br><br>
<input ype="text" placeholder="Enter Username" name="uname" required><br><br>
<label for="psw"><b>Password</b></label><br>
<input type="password" placeholder:"Enter Password" name="psw" required>
<label for="psw1">
<label for="new_mail">
<b>E-mail</b></label><br><br>
<input type="email" placeholder="Enter Email" name="new_mail" required><br><br>

<button type="submit" name="submit">Sign In</button>
<?php
	include("config.php");
	$name=$_POST['uname'];
	$password=$_POST['psw'];
	$email=$_POST['new_mail'];
	if(isset($_POST['submit']))
	{
		$query=("insert into signup values('$name','$password','$email');");
		
		$result=pg_query($conn,$query);
			if(!$result)
			{
				echo "<script>alert('Not submitted');</script>";
			}
			
	}
?>





<label>


<div class="container" style="background-color: #f1f1f1">
<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>

</div>
</form>
</div>
<script>
var modal=document.getElementById('id01');

window.onclick=function(event)
{
	if(event.target==modal)
	{
		modal.style.display="none";
	}
}
</script>
</body>
</html>
