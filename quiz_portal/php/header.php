<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>BRILLIANT CONCEPTS INSTITUTE</title>
<link href="css/decor2.css" rel="stylesheet" type="text/css" />
<link href="css/style1.css" rel="stylesheet" type="text/css" />
</head>

<body>

<?php @$_SESSION[login]; 
	error_reporting(1);
	extract($_POST);
	extract($_GET);


if($review){



	header("Location:signout.php");
}
else{
?>

<div id="id1">BRILLIANT CONCEPTS INSTITUTE</div>
<div id="id2">Online Examination Prepration Practice Center</div>


<div class="nav">
<?php

if(isset($_SESSION[login]))
{
	echo '<div class="nav1 olexam"> Welcome to Online Examination System ! </div>';
	
	echo '<div class="nav2">
	<ul>
	<li><a href="#" style="text-decoration:none; color:#fff;"><b>Welcome '. $_SESSION[login] .'</b></a>
	
	<ul>';

		echo '<li><a href="#" style="text-decoration:none; color:#fff;">Profile</a></li>';

	
	if($_SESSION[session_id]){
		echo '<li><a href="review.php?review1=123" style="text-decoration:none; color:#fff;">Logout</a></li>';
	}

	else{
		echo '<li><a href="signout.php" style="text-decoration:none; color:#fff;">Logout</a></li>';
	}

		

	

	echo '
	</ul>
    </li>
    </ul>
	</div>';
	
	/*echo "<div align=\"right\">
	<strong><blockquote>
	<a href=\"index.php\"> Home </a>|<a href=\"signout.php\">Signout </a>
	</blockquote>
	</strong>			
	</div>";
	*/
}
else
{
	echo "&nbsp;";
}

}
?>



</div>

</body>
</html>