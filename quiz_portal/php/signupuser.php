<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>User Signup</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php
include("header.php");
extract($_POST);
include("database.php");

//echo $gen."    ".$agree;

$rs=mysqli_query($cn, "SELECT * FROM mst_user WHERE login='$lid'");
if (mysqli_num_rows($rs)>0)
{
	echo "<br><br><br><div class=head1>Login Id Already Exists  </div>";
	header("Location: signup.php"); 
	exit;
}

$query="insert into mst_user(login,pass,conf_pass,username,userfname,edu_qualification,scuniverse,dob,gender,address,city,phone,email,cscname,centre_id,agreed) values ('$lid','$pass','$cpass','$name','$fname','$edu_quali','$scuniv','$dob','$gen','$address','$city','$phone','$email','Brilliant','123369','$agree')";


$rs=mysqli_query($cn,$query)or die('Could Not Perform the Query');

echo "<br><br><br><div class=head1>Your Login ID  $lid Created Sucessfully</div>";
echo "<br><div class=head1>Please Login using your Login ID to take Online Test</div>";
echo "<br><div class=head1><a href=index.php>Login</a></div>";

?>
</body>
</html>

