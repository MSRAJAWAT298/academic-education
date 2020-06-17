<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Online Quiz  - Result </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php
include("database.php");
extract($_SESSION);

$rs=mysqli_query($cn, "SELECT t.test_name,t.total_que,r.test_date,r.score FROM mst_test t, mst_result r WHERE
t.test_id=r.test_id and r.login='$login'") or die(mysqli_error());

echo "<h1 class=head1> Test Result </h1>";
if(mysqli_num_rows($rs)<1)
{
	echo "<br><br><h1 class=head1> You have not given any Test</h1>";
	exit;
}
echo "<table border=0 align=center><tr class=style2><td width=200>Test Name <td width=130 align=center> Total<br> Question <td width=160>Test Date <td width=70 align=center> Score";
while($row=mysqli_fetch_row($rs))
{
echo "<tr class=style8><td>$row[0] <td align=center> $row[1] <td>$row[2] <td align=center> $row[3]";
}
echo "</table>";
?>
</body>
</html>
