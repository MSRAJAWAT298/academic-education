<?php
//session_start();
//error_reporting(1);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>BRILLIANT CONCEPTS INSTITUTE</title>
<link href="../css/decor2.css" rel="stylesheet" type="text/css" />
<link href="../css/style1.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="id1">BRILLIANT CONCEPTS INSTITUTE</div>
<div id="id2">Online Examination Prepration Practice Center</div>

<?php
if(isset($_SESSION['alogin']))
{
	echo "<div align=\"right\"><strong>
	<a href=\"login.php\">Admin Home</a>|<a href=\"signout.php\">Signout</a></strong>
	</div>";
}
else
{
echo "&nbsp;";
}
?>

</body>
</html>