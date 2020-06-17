<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Online Quiz - Test List</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
<script>

</script>
</head>

<body>
<?php
include("header.php");
include("database.php");
extract($_GET);

$session_id=session_id();//create session id
$_SESSION[session_id]=$session_id;


$rs1=mysqli_query($cn, "SELECT * FROM mst_subject WHERE sub_id=$subid");
$row1=mysqli_fetch_array($rs1);
echo "<h1 align=center><font color=blue> $row1[1]</font></h1>";

$rs=mysqli_query($cn, "SELECT * FROM mst_test WHERE sub_id=$subid");
if(mysqli_num_rows($rs)<1)
{
	echo "<br><br><h2 class=head1> No Test for this Subject </h2>";
	exit;
}


echo "<h2 class=head1>Select Test Name to Give Test </h2>";
echo "<table align=center>";

while($row=mysqli_fetch_row($rs))
{
	//echo "<tr><td><a href=quiz.php?testid=$row[0]&subid=$subid><font size=4>$row[2]</font></a>";
	
	echo "<tr><td><a href=quiz_home.php?testid=$row[0]&subid=$subid><font size=4>$row[2]</font></a>";
	
	
	
	
}
echo "</table>";
?>
</body>
</html>
