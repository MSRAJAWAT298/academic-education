<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>User Signup</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php
extract($_POST);
include("../database.php");

$rs=mysqli_query($cn, "SELECT * FROM mst_admin WHERE loginid='$lid'");
if (mysqli_num_rows($rs)>0)
{
	echo "<br><br><br><div class=head1>Login Id Already Exists</div>";
	exit;
}

$query="insert into mst_admin(loginid,pass,confirm_pass,centre_name,centre_address,city,phone,email,centre_code) values ('$lid','$pass','$cpass','$cname','$caddress','$city','$phone','$email','$cent_code')";


$rs=mysqli_query($cn,$query)or die('Could Not Perform the Query');

echo "<br><br><br><div class=head1>Your Login ID  $lid Created Sucessfully</div>";
echo "<br><div class=head1>Please Login using your Login ID to take Online Test</div>";
echo "<br><div class=head1><a href=index.php>Login</a></div>";

?>
</body>
</html>

