<?php
session_start()
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Administrative Login - Online Exam</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<link href="../../css/quiz.css" rel="stylesheet" type="text/css" />

<style>
#admain{
	width:100%;
}

#adlog1{
	width:300px;
	text-align:right;
	float:left;
}

#adlog2{
	padding-top:13px;
	width:300px;
	text-align:left;
	float:left;
}

.lid{
	width:300px;
	text-align:right;
	font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif;
	font-size:13px;
	font-weight:bold;
	color: #990000;
	padding-bottom:11px;
	float:left;
}


</style>

</head>

<body>
<?php
include("header.php");
?>

<div id="admain">
<p class="head1">Adminstrative Login </p>
<form name="form1" method="post" action="login.php">

<div id="adlog1">
<img src="login.jpg" width="131" height="155">
</div>

<div id="adlog2">
<div class="lid">Login ID 
<input name="loginid" type="text" id="loginid">
</div>

<div class="lid">
Password
<input name="pass" type="password" id="pass">
</div>

<div class="lid">
Study Centre Code
<input name="ccode" type="text" id="ccode">
</div>

<div class="lid">
<p>
<a href="../../index.php">Home</a>
&nbsp;&nbsp;
<input name="submit" type="submit" id="submit" value="Login">
&nbsp;&nbsp;
<a href="reg_admin.php">Register</a>
</p>
</div>

</div>

</form>
</div>

</body>
</html>
