<?php
include("header.php");
session_start();
error_reporting(1);
extract($_POST);
extract($_SESSION);
include("database.php");

if($review1){

	mysqli_query($cn, "DROP TABLE $_SESSION[session_id]") or die(mysqli_error());

	$a=123;
	header("Location:header.php?review=$a");
	exit;

}

else{

if(@$submit=='Finish')
{

	mysqli_query($cn, "DROP TABLE $_SESSION[session_id]") or die(mysqli_error());

	$a=123;
	header("Location:header.php?review=$a");
	exit;
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Online Test - Review Test </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>

<body>

<?php

echo "<h1 class=head1> Review Test Question</h1>";

if(!isset($_SESSION[qn]))
{
	$_SESSION[qn]=0;
}
else if($submit=='Next Question' )
{
	$_SESSION[qn]=$_SESSION[qn]+1;

}

//echo "sess=".$_SESSION[tid];


$rs=mysqli_query($cn, "SELECT * FROM $_SESSION[session_id] WHERE sess_id='$session_id'") or die(mysqli_error());




mysqli_data_seek($rs,$_SESSION[qn]);

$row= mysqli_fetch_row($rs);
	echo "<form name=myfm method=post action=review.php>";
	echo "<table width=100%> <tr> <td width=30>&nbsp;<td> <table border=0>";
$n=$_SESSION[qn]+1;

	echo "<tR><td><span class=style2>Que ".  $n .": $row[3]</style>";
	

	echo "<tr><td class=".($row[8]==1?'tans':'style8').">$row[4]";
	echo "<tr><td class=".($row[8]==2?'tans':'style8').">$row[5]";
	echo "<tr><td class=".($row[8]==3?'tans':'style8').">$row[6]";
	echo "<tr><td class=".($row[8]==4?'tans':'style8').">$row[7]";

	/*
	echo "<tr><td class=".($row[8]==1?'tans':($row[9]==1?'fans':'style8')).">$row[4]";
	echo "<tr><td class=".($row[8]==2?'tans':($row[9]==2?'fans':'style8')).">$row[5]";
	echo "<tr><td class=".($row[8]==3?'tans':($row[9]==3?'fans':'style8')).">$row[6]";
	echo "<tr><td class=".($row[8]==4?'tans':($row[3]==4?'fans':'style8')).">$row[7]";
	*/
	
	
	

if($_SESSION[qn]<mysqli_num_rows($rs)-1)
	echo "<tr><td><input type=submit name=submit value='Next Question' class='fbtn1'></form>";
else
	echo "<tr><td><input type=submit name=submit value='Finish' class='fbtn1'></form>";
	echo "</table></table>";

}
?>







<br><br>
<blockquote>
<b>Right Answer : </b>
<font color="#00cc66" size="2" face="Verdana, Geneva, sans-serif">GREEN Color</font>
<br>
<b>Wrong Answer : </b>
<font color="#FF0000" size="2" face="Verdana, Geneva, sans-serif">RED Color</font>
</blockquote>

<style type="text/css">

.fbtn1{
	width: 150px;
    text-decoration: none;
    background: #098bce;
    border: 1px solid #fff;
    padding: 6px 20px;
    box-shadow: 0px 0px 1px 1px #086ea3;
    border-radius: 5px;
    margin-left: 0px;
    font-family: Verdana, Geneva, sans-serif;
    color: #fff !important;
    font-size: 12px;
    text-align: center;
    text-decoration: none;
    display: block;
    cursor: pointer;
    margin-top: 20px;
}



.fbtn1:hover{
	 text-decoration: none;
	  color: #fff;

	}

</style>
