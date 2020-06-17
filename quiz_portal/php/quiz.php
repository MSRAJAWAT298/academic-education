
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
	header("location:quiz.php");



}


if(!isset($_SESSION[sub_id]) || !isset($_SESSION[test_id]))
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
		alert('Right Click is sealed off..')
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
//$session_id=session_id();//create session id
//$_SESSION[session_id]=$session_id;


//create table	
$crt_rbl="CREATE TABLE  `saexam1`.`$session_id` (
`que_id` INT( 99 ) NOT NULL ,
`sess_id` VARCHAR( 99 ) NULL ,
`test_id` VARCHAR( 11 ) NULL ,
`que_des` VARCHAR( 1900 ) NULL ,
`ans1` VARCHAR( 299 ) NULL ,
`ans2` VARCHAR( 299 ) NULL ,
`ans3` VARCHAR( 299 ) NULL ,
`ans4` VARCHAR( 299 ) NULL ,
`true_ans` INT( 11 ) NULL ,
`your_ans` INT( 11 ) NULL

) ENGINE = INNODB";

mysqli_query($cn, $crt_rbl);






?>








<div class="qlength">
<?php
//question length query
$fetch_que_ln1 = mysqli_query($cn, "SELECT count('que_id') FROM mst_question WHERE test_id=$_SESSION[test_id]") or die(mysqli_error());
$ln1 = mysqli_fetch_array($fetch_que_ln1);
echo "Total Question = ".$ln1[0];

?>
</div>


<!--left-->
<div class="left1">
<?php

// save session id value in variable
$mst_useranswer="$session_id";



//update que ans query
if(isset($change_que)){
$update1=mysqli_query($cn, "UPDATE  $mst_useranswer SET your_ans='$ans1' WHERE que_id='$qnoid' and sess_id='$session_id'") or die(mysqli_error());
}//update que ans query


// que save query
if(isset($que_Save2)){

						
				// fetch dave ans query for maching duplicate value	
				$fetch_queans_row1 = mysqli_query($cn, "SELECT * FROM $mst_useranswer WHERE test_id=$_SESSION[test_id] and que_id=$que_id") or die(mysqli_error());
				$rowans1 = mysqli_fetch_array($fetch_queans_row1);
			
				if(!$rowans1[0]==$que_id){
				// que save query
				mysqli_query($cn, "INSERT INTO $mst_useranswer(que_id, sess_id, test_id, que_des, ans1,ans2,ans3,ans4,true_ans,your_ans) VALUES ('$que_id','$session_id', $_SESSION[test_id],'$que1','$ans1','$ans2','$ans3', '$ans4','$tru_ans','$ans')") or die(mysqli_error());
					}
}// que save query


if(isset($que_Save)){
			

				// fetch dave ans query for maching duplicate value	
				$fetch_queans_row1 = mysqli_query($cn, "SELECT * FROM $mst_useranswer WHERE test_id=$_SESSION[test_id] and que_id=$que_id") or die(mysqli_error());
				$rowans1 = mysqli_fetch_array($fetch_queans_row1);
			
				if(!$rowans1[0]==$que_id){
				// que save query
				mysqli_query($cn, "INSERT INTO $mst_useranswer(que_id, sess_id, test_id, que_des, ans1,ans2,ans3,ans4,true_ans,your_ans) VALUES ('$que_id','$session_id', $_SESSION[test_id],'$que1','$ans1','$ans2','$ans3', '$ans4','$tru_ans','$ans')") or die(mysqli_error());
					}
			}





if($_SESSION[sub_id] && $_SESSION[test_id]){


	if($pgqno1){
		
		

		//match que ans table value
		$fetch_queans_row1 = mysqli_query($cn, "SELECT * FROM $mst_useranswer WHERE test_id=$_SESSION[test_id] and que_id=$qid") or die(mysqli_error());
		$rowans1 = mysqli_fetch_array($fetch_queans_row1);



		if($qid==$rowans1[0]){

			$change_ans = mysqli_query($cn, "SELECT * FROM $mst_useranswer WHERE test_id=$_SESSION[test_id] and que_id=$rowans1[0]") or die(mysqli_error());
			$row1 = mysqli_fetch_array($change_ans);


			echo "<form name=myfm method=post action=quiz.php>";
			echo "<table  border=0>";

			echo "<tR><td><span class=style2>Que ".  $pgqno1 .": $row1[3]</style>";
			
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

			echo "<input type=hidden name=qnoid value='$row1[0]'>";
			echo "<tr><td><input type=submit name=change_que value='Change Answer' class='fbtn1'></form>";
			echo "</table>";
			echo "</form>";

			
			

		}
		
		else{
			$qn=$pgqno1;
			//select que ans table
			$fetch_queans_row = mysqli_query($cn, "SELECT * FROM $mst_useranswer WHERE test_id=$_SESSION[test_id]") or die(mysqli_error());
			$rowans = mysqli_fetch_array($fetch_queans_row);
			

			//select que table
			$fetch_que_row = mysqli_query($cn, "SELECT * FROM mst_question WHERE test_id=$_SESSION[test_id]") or die(mysqli_error());
			mysqli_data_seek($fetch_que_row,$qn-1);
			$row = mysqli_fetch_array($fetch_que_row);

			echo "<form name='myfm' method='post' action='quiz.php'>";
			echo "<table width=100% border=0>";
			echo "<tr><td><span class=style2>Que ".  $qn .": $row[2]</style>";
			echo "<tr><td class=style8><input type=radio name=ans value=1>$row[3]";
			echo "<tr><td class=style8> <input type=radio name=ans value=2>$row[4]";
			echo "<tr><td class=style8><input type=radio name=ans value=3>$row[5]";
			echo "<tr><td class=style8><input type=radio name=ans value=4>$row[6]";
			//que value and ans value
			echo "<tr><td class=style8><input type=hidden name=que1 value='$row[2]'>";
			echo "<tr><td class=style8><input type=hidden name=ans1 value='$row[3]'>";
			echo "<tr><td class=style8><input type=hidden name=ans2 value='$row[4]'>";
			echo "<tr><td class=style8><input type=hidden name=ans3 value='$row[5]'>";
			echo "<tr><td class=style8><input type=hidden name=ans4 value='$row[6]'>";
			echo "<tr><td class=style8><input type=hidden name=tru_ans value='$row[7]'>";
			//other
			echo "<tr><td class=style8><input type=hidden name=que_id value='$row[0]'>";
			echo "<tr><td class=style8><input type=hidden name=qnh value='$qn'>";
			echo "<tr><td><input type=submit name=que_Save2 value='save Ans' class='fbtn1'></form>";
			echo "</table>";
			echo "</form>";

		
			}
			
	}


	else{

		$lenght1 = mysqli_query($cn, "SELECT count('que_id') FROM mst_question WHERE test_id=$_SESSION[test_id]") or die(mysqli_error());
		$lenght1a = mysqli_fetch_array($lenght1);


			//create qn query
			if($qnh){

				if($qnh>$lenght1a[0]-1){
					$qn=$lenght1a[0];
				}

				else{
					$qn=$qnh+1;
				}
			  
			}

			else{
			 $qn=1;	
			}

			// fetch que table
			$fetch_que_row = mysqli_query($cn, "SELECT * FROM mst_question WHERE test_id=$_SESSION[test_id]") or die(mysqli_error());
			mysqli_data_seek($fetch_que_row,$qn-1);
			$row = mysqli_fetch_array($fetch_que_row);

		
			//match que ans table value
			$fetch_queans_row2 = mysqli_query($cn, "SELECT * FROM $mst_useranswer WHERE test_id=$_SESSION[test_id] and que_id=$row[0]") or die(mysqli_error());
			$rowans2 = mysqli_fetch_array($fetch_queans_row2);



			if($row[0]==$rowans2[0]){

				$change_ans = mysqli_query($cn, "SELECT * FROM $mst_useranswer WHERE test_id=$_SESSION[test_id] and que_id=$rowans2[0]") or die(mysqli_error());
				$row1 = mysqli_fetch_array($change_ans);


				echo "<form name=myfm method=post action=quiz.php>";
				echo "<table  border=0>";

				echo "<tR><td><span class=style2>Que ".  $qn .": $row1[3]</style>";
				
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


				echo "<input type=hidden name=qnoid value='$row1[0]'>";
				echo "<tr><td class=style8><input type=hidden name=qnh value='$qn'>";

				echo "<tr><td><input type=submit name=change_que value='Change Answer' class='fbtn1'></form>";
				echo "<tr><td><input type=submit name=next value='Next' class='fbtn1'></form>";

				echo "</table>";
				echo "</form>";

			}
			
			else{

			echo "<form name='myfm' method='post' action='quiz.php'>";
			echo "<table width=100% border=0>";
			echo "<tr><td><span class=style2>Que ".  $qn .": $row[2]</style>";
			echo "<tr><td class=style8><input type=radio name=ans value=1>$row[3]";
			echo "<tr><td class=style8> <input type=radio name=ans value=2>$row[4]";
			echo "<tr><td class=style8><input type=radio name=ans value=3>$row[5]";
			echo "<tr><td class=style8><input type=radio name=ans value=4>$row[6]";
			//que value and ans value
			echo "<tr><td class=style8><input type=hidden name=que1 value='$row[2]'>";
			echo "<tr><td class=style8><input type=hidden name=ans1 value='$row[3]'>";
			echo "<tr><td class=style8><input type=hidden name=ans2 value='$row[4]'>";
			echo "<tr><td class=style8><input type=hidden name=ans3 value='$row[5]'>";
			echo "<tr><td class=style8><input type=hidden name=ans4 value='$row[6]'>";
			echo "<tr><td class=style8><input type=hidden name=tru_ans value='$row[7]'>";
			//other
			echo "<tr><td class=style8><input type=hidden name=que_id value='$row[0]'>";
			echo "<tr><td class=style8><input type=hidden name=qnh value='$qn'>";


			echo "<tr><td><input type=submit name=que_Save value='Next Que' class='fbtn1'></form>";
			echo "</table>";
			echo "</form>";

			}


			

			
		}

}








?>
	
</div>


<!--right-->
<div class="right1">
<?php

//show que no 

$queno=1;
//$fetch_que_ln2 = mysqli_query($cn, "SELECT * FROM mst_question WHERE test_id=$_SESSION[test_id]") or die(mysqli_error());
$fetch_que_ln2 = mysqli_query($cn, "SELECT a.que_id, b.que_id, b.test_id, b.your_ans, b.sess_id FROM mst_question as a RIGHT JOIN $mst_useranswer as b ON a.que_id = b.que_id WHERE b.sess_id='$_SESSION[session_id]'") or die(mysqli_error());



while($ln2=mysqli_fetch_array($fetch_que_ln2)){

	if($ln2[3]==0){
		echo '<a href="?pgqno1='.$queno.' & qid='.$ln2[1].'"  class="btn3"  >'.$queno.'</a>';
	}
	else{
	echo '<a href="?pgqno1='.$queno.' & qid='.$ln2[1].'"  class="btn2"  >'.$queno.'</a>';
	}
	
	$queno++;

}	


/////////////////////////////////////////////	

$queno1=1;
//$fetch_que_ln2 = mysqli_query($cn, "SELECT * FROM mst_question WHERE test_id=$_SESSION[test_id]") or die(mysqli_error());
$fetch_que_ln21 = mysqli_query($cn, "SELECT a.que_id, b.que_id, b.test_id,  a.test_id FROM mst_question as a LEFT JOIN $mst_useranswer as b ON a.que_id = b.que_id where a.test_id = '$_SESSION[test_id]'") or die(mysqli_error());


while($ln21=mysqli_fetch_array($fetch_que_ln21)){

	if($ln21[0]!==$ln21[1]){
	echo '<a href="?pgqno1='.$queno1.' & qid='.$ln21[0].'"  class="btn1"  >'.$queno1.'</a>';
	}
	
	$queno1++;

}	


/*
//fetch que table

$fetch_que_ln2 = mysqli_query($cn, "SELECT * FROM mst_useranswer WHERE sess_id='$_SESSION[session_id]'") or die(mysqli_error());

//$ln22=mysqli_fetch_array($fetch_que_ln2);










$fetch_que_ln1 = mysqli_query($cn, "SELECT * FROM mst_question WHERE test_id=$_SESSION[test_id]") or die(mysqli_error());
			
$queno1=1;
while($ln21=mysqli_fetch_array($fetch_que_ln1) || $ln22=mysqli_fetch_array($fetch_que_ln2)){


echo "<a href='?pgqno1=".$queno1." & qid=".$ln21[0]."' class='btn1'  >".$queno1."</a>";

	
//echo "<tr><td class=".($row[7]==1?'tans':'style8').">$row[4]";


	$queno1++;

	}

*/












?>
</div>


<div class="t_sub_btn">
	<a href="result.php" target="_top" class="fbtn1">Save and Result</a>
</div>

<script>setTimeout(function(){window.open("result.php","_top")},1000*59*30);</script>


<style type="text/css">
	.left1{
		max-width: 60%;
		float: left;
		height: auto;
		padding: 20px;
	}

	.right1{
		max-width: 30%;
		float: right;
		height: auto;
		padding: 20px;
	}
	.qlength{
		padding-top: 20px;
	    text-align: center;
	    font-size: 20px;
	    color: #000;
	    font-weight: bold;
	    text-transform: uppercase;
	}



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





.btn2{
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
	box-shadow:0px 0px 5px 1px #107b0a inset;
	}

.btn3{
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
	box-shadow:0px 0px 5px 1px #ea211c inset;
	}

.t_sub_btn{
	text-align: right;
	clear: both;
	padding-right: 50px;
}

.t_sub_btn .fbtn1{
	float: right;
}


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
    margin-bottom: 10px;
}



.fbtn1:hover{
	 text-decoration: none;
	  color: #fff;

	}






</style>

</body>
</html>






