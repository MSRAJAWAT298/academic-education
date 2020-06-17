<?php
session_start();
error_reporting(1);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Adminstrative Area Online Exam</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="../../css/quiz.css" rel="stylesheet" type="text/css">

<style>
@keyframes invlog{
	
	0%{color:#FFF;}
	30%{color:#FFF;}
	35%{color:#F00;}
	40%{color:#03C;}
	97%{color:#03C;}
	100%{color:#FFF;}
}

.log_inv{
	width:100%;
	background-color:#F00;
	height:33px;
	padding-top:11px;
	font-family:Arial, Helvetica, sans-serif;
	font-size:21px;
	font-weight:bold;
	text-align:center;
	float:left;
	animation:invlog 1s infinite;
}

.add1{
	margin:auto;
	width:90%;
	height:500px;
	box-shadow:2px 1px 2px 2px #CCCCCC;
	text-align:left;
}
</style>

</head>

<body>
<?php
include("header.php");
extract($_POST);
$ccode=123369;
$_SESSION['ccode2']=$ccode;



if(isset($submit))
{
	include("../database.php");

	$sql = "select * from mst_admin where loginid='$loginid' and pass='$pass' and centre_code='$ccode'";
	$rs = mysqli_query($cn, $sql);

	if(mysqli_num_rows($rs)<1)
	{
		echo "<p><div class=log_inv>Invalid Username or Password or Centre Code</div></p>";
		echo "<p> <a href=index.php>Back to Login Page</a></p>";	
		exit;
	}
	$_SESSION['alogin']="true";
	$_SESSION['loginid1']=$loginid;
	
}
else if(!isset($_SESSION[alogin]))
{
	echo "<p><div class=head1> Your are not logged in<br> Please <a href=index.php>Login</a><div></p>";
		exit;
}
mysqli_close($cn);

?>

<p class="head1">
	Welcome to <font color="blue" size="+3">"<?php echo $_SESSION['loginid1']; ?>"</font> 
	(You are LOGGED into Admistrative Area)
</p>

<div style="add1">
	<div style="margin-left:20%;padding-top:5%">
		<p class="style7"><a href="subadd.php">Add Subject</a></p>
		<p class="style7"><a href="testadd.php">Add Test</a></p>
		<p class="style7"><a href="questionadd.php">Add Question </a></p>
		<p align="center" class="head1">&nbsp;</p>
	</div>
</div>

</body>
</html>
