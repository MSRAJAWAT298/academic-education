
<?php
session_start();
include("header.php");
//error_reporting(1);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Logged in page</title>
<link href="css/style1.css" rel="stylesheet" type="text/css" />
</head>

<body>

<div class="navg">
	<div class="nav1a">	<a href="#" class="nav1b">Home</a></div>
	<div class="nav1a">	<a href="#" class="nav1b">Test Result</a></div>
	<div class="nav1a">	<a href="#" class="nav1b">New Test</a></div>
</div>

<?php
include("database.php");
extract($_POST);

if (isset($_SESSION[login]))
{
?>

<div class="log_suc">You are Logged in Successfully</div>

<div class="t_sub">
<div class="t1">
Online Multiple Choice Test Tips

This is a multiple choice test and contains 10 questions to be answered in 5 minutes.
There is 1/3 negative marking for wrong choices selected.

Click the Start Test button below to start.
A question and the possible answer choices appear.
Select the choice you find to be the correct answer of the question.
Clicking on a choice saves it as your answer for the question.
Use scroll bars to move on to the next or previous question in the test.
You will get your online test score after finishing the complete test.

To start your exam click on Start Test button below and loged in as: krishna  

If you are going to open new tab during test then it is treated as cheating. All your activity is monitered by program and you are supposed to enable javascript in your browser. If we will notice anything illegal, your account will be terminated. Your account will be terminated in 5 minutes after we will receive first abuse report or anything abusive will be detected by our staff. We also report all illegal activities to local authorities.

COPYRIGHTS © 2018 BRILLIANT CONCEPTS INSTITUTE ALL RIGHTS RESERVED
</div>

<div class="t2">
<a href="sublist.php" class="btn1">Start New Test </a>
<a href="result.php" class="btn1">See Your Test Result </a>
</div>

</div>    
	
<?php		
	exit;
}	

?>

</body>
</html>