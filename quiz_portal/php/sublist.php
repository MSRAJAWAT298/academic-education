<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Online Quiz - Quiz List</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php
include("header.php");
include("database.php");
$cc=$_SESSION['ccode2'];

echo "<h2 class=head1>Select Subject to Give Test </h2>";

$rs=mysqli_query($cn, "SELECT * FROM mst_subject WHERE centre_code='$cc'");
echo "<table align=center>";
while($row=mysqli_fetch_row($rs))
{
	echo "<tr><td><a href=showtest.php?subid=$row[0]><font size=4>$row[1]</font></a>";
}
echo "</table>";
?>
</body>
</html>
