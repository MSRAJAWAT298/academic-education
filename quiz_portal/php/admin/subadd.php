<?php
session_start();
error_reporting(1);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<link href="../../css/quiz.css" rel="stylesheet" type="text/css" />
</head>

<body>

<?php
include("header.php");
extract($_POST);
include("../database.php");
$cc=$_SESSION['ccode2'];

echo "<BR>";
if (!isset($_SESSION['alogin']))
{
	echo "<br><h2><div  class=head1>You are not Logged On Please Login to Access this Page</div></h2>";
	echo "<a href=index.php><h3 align=center>Click Here for Login</h3></a>";
	exit();
}





echo "<BR><h3 class=head1>Subject Add </h3>";

echo "<table width=100%>";
echo "<tr><td align=center></table>";

if($submit=='submit' || strlen($subname)>0 )
{
	$sql = "SELECT * FROM mst_subject WHERE sub_name = '$subname'";
	$rs = mysqli_query($cn, $sql);

	if(mysqli_num_rows($rs) > 0) {
		echo "<br><br><br><div class=head1>Subject is Already Exists</div>";
		exit;
	}
	
	$sql = "INSERT INTO mst_subject(sub_name,centre_code) VALUES ('$subname','$cc')";
	$rs = mysqli_query($cn, $sql);
	echo "<p align=center>Subject  <b> \"$subname \"</b> Added Successfully.</p>";
	$submit="";
}
mysqli_close($cn);
?>



<SCRIPT LANGUAGE="JavaScript">
function check() {
mt=document.form1.subname.value;
if (mt.length<1) {
alert("Please Enter Subject Name");
document.form1.subname.focus();
return false;
}
return true;
}
</script>

<div style="margin:auto;width:90%;height:500px;box-shadow:2px 1px 2px 2px #CCCCCC;text-align:left">
<title>Add Subject 123</title>
<form name="form1" method="post" onSubmit="return check();">
  <table width="41%"  border="0" align="center">
    <tr>
      <td width="45%" height="32"><div align="center"><strong>Enter Subject Name </strong></div></td>
      <td width="2%" height="5">  
      <td width="53%" height="32">
        <input name="subname" placeholder="enter subject name" type="text" id="subname">
    <tr>
        <td height="26"> </td>
        <td>&nbsp;</td>
	  <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="26"></td>
      <td>&nbsp;</td>
      <td><input type="submit" name="submit" value="Add" ></td>
    </tr>
  </table>
</form>
<p>&nbsp; </p>
</div>


</body>
</html>