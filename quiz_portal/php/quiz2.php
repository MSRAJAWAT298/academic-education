<?php
session_start();
error_reporting(1);
include("database.php");
extract($_POST);
extract($_GET);
extract($_SESSION);


if(isset($subid) && isset($testid))
{
	$_SESSION[sid]=$subid;
	$_SESSION[tid]=$testid;
	header("location:quiz.php");
}


if(!isset($_SESSION[sid]) || !isset($_SESSION[tid]))
{
	header("location: index.php");
}
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Online Test</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
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
//include("header.php");
//include("exam_timer1.php");


$page=$_REQUEST['qn1'];//pagination value
$_SESSION[qnn]=$page;// create session pagination value
$session_id=session_id();//create session id
$lgn=$_SESSION['lgn'];// login id
$pas=$_SESSION['pas'];// login password
$cd=$_SESSION['cd'];// centre id















$query="SELECT * FROM mst_question";

$rs=mysqli_query($cn, "SELECT * FROM mst_question WHERE test_id=$tid") or die(mysqli_error());
if(!isset($_SESSION[qn]))
{
	$_SESSION[qn]=0;
	//mysqli_query($cn, "DELETE FROM mst_useranswer WHERE sess_id='" . session_id() ."'") or die(mysqli_error());
	$_SESSION[trueans]=0;
}
else
{	
	if($submit=='Next Question' && isset($ans))
	{
		mysqli_data_seek($rs,$_SESSION[qn]);
		$row= mysqli_fetch_row($rs);	
		mysqli_query($cn, "INSERT INTO mst_useranswer(que_id, sess_id, test_id, que_des, ans1,ans2,ans3,ans4,true_ans,your_ans) VALUES ('$hid','$session_id', $tid,'$row[2]','$row[3]','$row[4]','$row[5]', '$row[6]','$row[7]','$ans')") or die(mysqli_error());
			if($ans==$row[7])
			{
				$_SESSION[trueans]=$_SESSION[trueans]+1;
			}
		
		$_SESSION[qn]=$_SESSION[qn]+1;
	}
	else if($submit=='Get Result' && isset($ans))
	{
			mysqli_data_seek($rs,$_SESSION[qn]);
			$row= mysqli_fetch_row($rs);	
			mysqli_query($cn, "INSERT INTO mst_useranswer(que_id, sess_id, test_id, que_des, ans1,ans2,ans3,ans4,true_ans,your_ans) VALUES ('$hid','$session_id', $tid,'$row[2]','$row[3]','$row[4]','$row[5]', '$row[6]','$row[7]','$ans')") or die(mysqli_error());
			if($ans==$row[7])
			{
				$_SESSION[trueans]=$_SESSION[trueans]+1;
			}
				echo "<h1 class=head1> Test Result</h1>";
				$_SESSION[qn]=$_SESSION[qn]+1;
				echo "<Table align=center><tr class=tot><td>Total Questions<td> $_SESSION[qn]";
				echo "<tr class=tans><td>True Answer<td>".$_SESSION[trueans];
				$w=$_SESSION[qn]-$_SESSION[trueans];
				echo "<tr class=fans><td>Wrong Answer<td> ". $w;
				echo "</table>";
			
				//mysqli_query($cn, "INSERT INTO mst_result(login,test_id,test_date,score) VALUES('$login',$tid,'".date("d/m/Y")."',$_SESSION[trueans])") or die(mysqli_error());



				
				
				date_default_timezone_set('Asia/Kolkata');
				mysqli_query($cn, "INSERT INTO mst_result(login,test_id,test_date,score) VALUES('$login','$tid','".date("d/m/Y   h:i:s")."',$_SESSION[trueans])") or die(mysqli_error());



				echo "<h1 align=center><a href=review.php target=_parent> Review Question</a> </h1>";
				unset($_SESSION[qn]);
				unset($_SESSION[sid]);
				unset($_SESSION[tid]);
				unset($_SESSION[trueans]);
				exit;
	}
}


$rs=mysqli_query($cn, "SELECT * FROM mst_question WHERE test_id=$tid") or die(mysqli_error());
if($_SESSION[qn]>mysqli_num_rows($rs)-1)
{
	unset($_SESSION[qn]);
	echo "<h1 class=head1>Some Error  Occured</h1>";
	session_destroy();
	echo "Please <a href=index.php> Start Again</a>";

exit;
}

?>

<div class="testq">
<?php
//update question code
//$rss=mysqli_query($cn, "SELECT * FROM mst_useranswer WHERE test_id=$tid") or die(mysqli_error());
$rss=mysqli_query($cn, "SELECT * FROM mst_useranswer WHERE test_id='$tid' and sess_id='$session_id'") or die(mysqli_error());

if($_SESSION[qnn]){
			mysqli_data_seek($rss,$_SESSION[qnn]-1);
			$row1= mysqli_fetch_row($rss);
			echo "<form name=myfm method=post action=quiz.php>";
			echo "<table width=100%> <tr> <td width=30>&nbsp;<td> <table border=0>";
			$n1=$_SESSION[qnn];
			echo "<tR><td><span class=style2>Que ".  $n1 .": $row1[3]</style>";
			
			//echo "<tr><td class=style8><input type=radio name=ans1 value=1>$row1[4]";
			//echo "<tr><td class=style8> <input type=radio name=ans1 value=2>$row1[5]";
			//echo "<tr><td class=style8><input type=radio name=ans1 value=3>$row1[6]";
			//echo "<tr><td class=style8><input type=radio name=ans1 value=4>$row1[7]";
			
			
			if($row1[9]==1){
				echo "<tr><td class=style8><input type=radio name=ans1 value=1 checked=checked>$row1[4]";
				} else{
				echo "<tr><td class=style8><input type=radio name=ans1 value=1>$row1[4]";
			}
			
			if($row1[9]==2){
				echo "<tr><td class=style8> <input type=radio name=ans1 value=2 checked=checked>$row1[5]";
				} else{
				echo "<tr><td class=style8> <input type=radio name=ans1 value=2>$row1[5]";
			}
			
			if($row1[9]==3){
				echo "<tr><td class=style8><input type=radio name=ans1 value=3 checked=checked>$row1[6]";
				} else{
				echo "<tr><td class=style8><input type=radio name=ans1 value=3>$row1[6]";
			}
			
			if($row1[9]==4){
				echo "<tr><td class=style8><input type=radio name=ans1 value=4 checked=checked>$row1[7]";
				} else{
				echo "<tr><td class=style8><input type=radio name=ans1 value=4>$row1[7]";
			}

			echo "<input type=hidden name=chng value='$row1[0]'>";
			echo "<tr><td><input type=submit name=submitt value='Change Answer'></form>";
			echo "</table></table>";
}


//test question code
else{
			mysqli_data_seek($rs,$_SESSION[qn]);
			$row= mysqli_fetch_row($rs);
			echo "<form name=myfm method=post action=quiz.php>";
			echo "<table width=100%> <tr> <td width=30>&nbsp;<td> <table border=0>";
			$n=$_SESSION[qn]+1;
			echo "<tR><td><span class=style2>Que ".  $n .": $row[2]</style>";
			echo "<tr><td class=style8><input type=radio name=ans value=1>$row[3]";
			echo "<tr><td class=style8> <input type=radio name=ans value=2>$row[4]";
			echo "<tr><td class=style8><input type=radio name=ans value=3>$row[5]";
			echo "<tr><td class=style8><input type=radio name=ans value=4>$row[6]";
			echo "<tr><td class=style8><input type=hidden name=hid value='$row[0]'>";
		
			if($_SESSION[qn]<mysqli_num_rows($rs)-1)
			echo "<tr><td><input type=submit name=submit value='Next Question'></form>";
			else
			echo "<tr><td><input type=submit name=submit value='Get Result'></form>";
			echo "</table></table>";
}
	
?>
</div>










<div class="testq1">
<div class="style2 space">Change Your Select Answer</div>
<?php
//query for update question 


$rrr=mysqli_query($cn, "SELECT * FROM mst_user where login='$lgn' and pass='$pas' and centre_id='$cd'") or die("not action");
$ft=mysqli_fetch_array($rrr);
$usid=$ft[0];


$cnt=mysqli_query($cn, "SELECT count('sess_id') from mst_useranswer where sess_id='$session_id' and test_id='$usid'") or die("not action");
$cnt1=mysqli_fetch_array($cnt);
$cnt2=$cnt1[0];



for($p=1;$p<=$cnt2;$p++){
	echo '<a href="?qn1='.$p.'" class="btn1">'.' '.$p.' '.'</a>';
	}

if($submitt){
$qqq=mysqli_query($cn, "update mst_useranswer set your_ans='$ans1' where que_id='$chng' and sess_id='$session_id'") or die("not action");
}
?>
</div>

<?php
if(time() - $_SESSION['timestamp'] > 900) { //subtract new timestamp from the old one
    echo"<script>alert('1 Minutes over!');</script>";
    unset($_SESSION['username'], $_SESSION['password'], $_SESSION['timestamp']);
    $_SESSION['logged_in'] = false;
    header("Location:index.php"); //redirect to index.php
    exit;
} else {
    $_SESSION['timestamp'] = time(); //set new timestamp
}
?>





<style>
.btn1{
	width:30px;
	padding:3px 0px;
	display:block;
	text-decoration:none;
	border:1px solid #fff;
	text-align:center;
	float:left;
	margin-left:2px;
	margin-top:2px;
	font-weight:bold;
	box-shadow:0px 0px 5px 1px #7442f4 inset;
	}
.btn1:hover{
	text-decoration:none;
	box-shadow:0px 0px 5px 1px #ea211c inset;
	color:#ea211c;
}


.testq{
	width:70%;
	height:auto;
	float:left;
	}

.testq1{
	width:25%;
	height:auto;
	float:left;
	padding-left:5%;
	}
	
.space{
	margin-bottom:10px;
	}
</style>







</body>
</html>






