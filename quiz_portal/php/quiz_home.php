<?php
session_start();
error_reporting(1);
include("database.php");
extract($_POST);
extract($_GET);
extract($_SESSION);


if(isset($subid) && isset($testid))
{
	$_SESSION[sub_id]=$subid;
	$_SESSION[test_id]=$testid;
	header("location:quiz_home.php");
}


if(!isset($_SESSION[sub_id]) || !isset($_SESSION[test_id]))
{
	header("location: index.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script language="JavaScript">
var SealoffSource = true; 
/* to disable the right mouse button, so the source can not been seen. */
function click() {
	if (event.button==2) {
		alert('Right Click is sealed off by APEX CCOMPUTER INSTITUTE..')
	}
}
document.onmousedown=click;


//this code disables F5/Ctrl+F5/Ctrl+R in Chrome, Firefox and Explorer
document.onkeydown = disableF5
function disableF5(e) { if ((e.which || e.keyCode) == 116 || ((e.which || e.keyCode) == 82 && e.ctrlKey)) e.preventDefault(); };
$(document).on("keydown", disableF5);

</script>
</head>

<body>
<?php
include("header.php");
include("exam_timer1.php");
?>

<iframe src="quiz.php" style="width:100%; height:600px; background:#FFF; outline:none; border:none">
</iframe>

</body>
</html>