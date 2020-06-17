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
include("header.php");
include("database.php");
extract($_SESSION);
extract($_POST);
extract($_GET);
?>

<?php
///count que table
$cnt_qt=mysqli_query($cn, "SELECT count('que_id') from mst_question where test_id='$_SESSION[test_id]'") or die("not action");
$cnt_qt1=mysqli_fetch_array($cnt_qt);
$cnt_qt2=$cnt_qt1[0];


///count que ans table
$cnt_qans=mysqli_query($cn, "SELECT count('sess_id') from $_SESSION[session_id] where test_id='$_SESSION[test_id]' and sess_id='$session_id'") or die("not action");
$cnt_qans1=mysqli_fetch_array($cnt_qans);
$cnt_qans2=$cnt_qans1[0];



//select que of empty give ans
$cnt_qempty=mysqli_query($cn, "SELECT count('sess_id') from $_SESSION[session_id] where test_id='$_SESSION[test_id]' and sess_id='$session_id' and your_ans='0'") or die("not action");
$cnt_qempty1=mysqli_fetch_array($cnt_qempty);
$cnt_qempty2=$cnt_qempty1[0];


//select true ans
$cnt_true=mysqli_query($cn, "SELECT count('que_id') from $_SESSION[session_id] where sess_id='$session_id' and your_ans=true_ans") or die("not action");
$cnt_true1=mysqli_fetch_array($cnt_true);
$cnt_true2=$cnt_true1[0];

//your total ans
$t_ans=$cnt_qans2-$cnt_qempty2;
//wrong que ans
$w_qans=$t_ans-$cnt_true2;

//Total Mark query
$munis_mark1=.33;
$munis_mark2=(.33)*$cnt_true2;
$t_mark=$cnt_true2-$munis_mark2;

?>


<table width="80%" cellpadding="1" cellspacing="1" align="center" class="style2">
	<tr>
	<td>Total Que No.</td>
	<td class="right"><?php echo $cnt_qt2; ?></td>
	</tr>
	<tr>
	<td>Your Ans</td>
	<td class="right"><?php echo $t_ans; ?></td>
	</tr>
	<tr>
	<td>True Ans</td>
	<td class="right"><?php echo $cnt_true2; ?></td>
	</tr>
	<tr>
	<td>Wrong Ans</td>
	<td class="right"><?php echo $w_qans; ?></td>
	</tr>
	<tr>
	<td>Your Total No. With Minus Marking</td>
	<td class="right"><?php echo $t_mark; ?></td>
	</tr>
	<tr>
	<td><a href="review.php?review1='123'" class="fbtn1">Log Out</a></td>
	<td class="right"><a href="review.php" class="fbtn1" style="float: right;">Review Que.</a></td>
	</tr>
	
</table>




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

</body>
</html>
