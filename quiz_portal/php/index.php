<?php
session_start();
?>
<html>
<head>
<title>Welcome to Students Login</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php
include("header.php");
include("database.php");
extract($_POST);
$cid=123369;
$_SESSION['ccode2']=$cid;

$_SESSION['lgn']=$loginid;//login value
$_SESSION['pas']=$pass;//login pass
$_SESSION['cd']=$cid;//login center id



if(isset($submit))
{
	$sql="SELECT * FROM mst_user WHERE login='$loginid' and pass='$pass' and centre_id='$cid'";
	$rs=mysqli_query($cn, $sql);
	
	if(mysqli_num_rows($rs)<1)
	{
		$found="N";
	}
	else
	{
		$_SESSION[login]=$loginid;
	}
}



if(isset($_SESSION[login]))
{
	header("Location: loggedin.php");   
	exit;
}
?>



<table width="100%" border="0">
  <tr>
    <td align="center" valign="top">
        <font color="#6633CC" size="4" face="Verdana, Geneva, sans-serif">
        <b>Welcome to Online Examination Hub</b>
        </font>
    </td>
    <td>&nbsp;</td>
    <td width="30%" bgcolor="#CC3333"><div align="center" class="style1">User Login </div></td>
  </tr>
  <tr>
    <td align="center" valign="top">
    <img src="image/test_series1.png" width="493">
    <!--<img src="image/paathshala.jpg" width="129" height="100">
    <img src="image/HLPBUTT2.JPG" width="50" height="50">
    <img src="image/BOOKPG.JPG" width="43" height="43">-->
    </td>
    <td>&nbsp;</td>
    <td rowspan="2">
     <form name="form1" method="post" action="">
      <table width="100%" border="0">
      	<tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>

        <tr>
          <td><span class="style2">Login ID </span></td>
          <td><input name="loginid" type="text" id="loginid2"></td>
        </tr>
        
        <tr>
          <td><span class="style2">Password</span></td>
          <td><input name="pass" type="password" id="pass2"></td>
        </tr>
        
       <!-- <tr>
          <td><span class="style2">Center ID</span></td>
          <td><input name="cid" type="text" id="cid2"></td>
        </tr>
        -->
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        
        <tr>
          <td colspan="2"><span class="errors">
            <?php
		  if(isset($found))
		  {
		  	echo "Invalid Username or Password";
		  }
		  ?>
          </span>
          </td>
		</tr>
        
        <tr>
          <td colspan=2 align=center class="errors">
		  <input type="submit" name="submit" id="submit" value="Login">
          </td>
        </tr>
        
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        
        <tr>
          <td colspan="2">
          <div align="center">
          <span class="style4">New User ? <a href="signup.php">Signup Free</a></span>
          </div>
          </td>
		</tr>
      </table>
      <div align="center">
        <img src="image/login1.jpg" width="134" height="128">
        </div>
    </form>
    </td>
  </tr>
  <tr>
    <td>
    <blockquote>
		<p align="left" class="style5"><span class="style7">Welcome to Online exam.
			<br>This Site will provide the test series for various subject of interest. 
			<br>You need to login for the take the online exam.</span></p>
	</blockquote>
    </td>
    <td>&nbsp;</td>
  </tr>
</table>


</body>
</html>
