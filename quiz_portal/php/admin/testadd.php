<?php
session_start();
error_reporting(1);

if (!isset($_SESSION['alogin']))
{
	echo "<br><h2>You are not Logged On Please Login to Access this Page</h2>";
	echo "<a href=index.php><h3 align=center>Click Here for Login</h3></a>";
	exit();
}
?>

<link href="../../css/quiz.css" rel="stylesheet" type="text/css" />

<?php
include("header.php");
require("../database.php");


echo "<br><h2><div  class=head1>Add Test</div></h2>";

if($_POST[submit]=='Save' || strlen($_POST['subid'])>0 )
{
	extract($_POST);
	
	mysqli_query($cn, "INSERT INTO mst_test(sub_id,test_name,total_que) values ('$subid','$testname','$totque')") or die(mysqli_error());
	
	echo "<p align=center>Test <b>\"$testname\"</b> Added Successfully.</p>";
	unset($_POST);
}
?>



<SCRIPT LANGUAGE="JavaScript">
function check() {
mt=document.form1.testname.value;
if (mt.length<1) {
alert("Please Enter Test Name");
document.form1.testname.focus();
return false;
}
tt=document.form1.totque.value;
if(tt.length<1) {
alert("Please Enter Total Question");
document.form1.totque.value;
return false;
}
return true;
}
</script>



<form name="form1" method="post" onSubmit="return check();">
  <table width="58%"  border="0" align="center">
    <tr>
      <td width="49%" height="32">
      <div align="left"><strong>Enter Subject ID </strong></div>
      </td>
      <td width="3%" height="5">&nbsp;</td>
      <td width="48%" height="32">
      <select name="subid">
<?php
$sql = "SELECT * FROM mst_subject ORDER BY sub_name";
$rs = mysqli_query($cn, $sql);

while($row=mysqli_fetch_array($rs))
{
	if($row[0]==$subid)
	{
		echo "<option value='$row[0]' selected>$row[1]</option>";
	}
	else
	{
		echo "<option value='$row[0]'>$row[1]</option>";
	}
}
mysqli_close($cn);
?>
</select>
        
	<tr>
	<td height="26"><div align="left"><strong> Enter Test Name </strong></div></td>
	<td>&nbsp;</td>
	<td><input name="testname" type="text" id="testname"></td>
    </tr>
    
    <tr>
	<td height="26"><div align="left"><strong>Enter Total Question </strong></div></td>
	<td>&nbsp;</td>
	<td><input name="totque" type="text" id="totque"></td>
    </tr>
    
    <tr>
      <td height="26"></td>
      <td>&nbsp;</td>
      <td><input type="submit" name="submit" value="Add" ></td>
    </tr>
  </table>
</form>
<p>&nbsp; </p>
