<?php
$host="localhost";
$username="id4832393_root";
$password="12345";
$dbname="id4832393_contact";
//create a connection
$conn = new mysqli($host,$username,$password,$dbname);
//cheak connection
if($conn->connect_error){
	die("could not connect......." . $conn->connect_error);
}
#echo "connected.....";


		$fname=$_POST['name'];
		$sub=$_POST['subject'];
		$email=$_POST['email'];
		$mess=$_POST['subject'];
		
#//=============================E-MAIL SENDING FUNCTION==============//
$to="contact-us@ourkarigar.com";
$subject="Someone try to to contact you ";
$message= "CoustomerName:-  $fname\nEmail:-$email\nMessage:-$mess";

#========================Q U E R Y======================================//

 $sql="insert into contacts (fname,email,subject,message) values ('$fname','$email','$sub','$mess')";

if($conn->query($sql)===TRUE)
{
  if(mail($to,$subject,$message,$headers))
{
$to=$email;
$subject="Thanks for contact us";
$message= "Thanks for being awesome!
We have received your message and would like to thank you for writing to us.
If your inquiry is urgent, please use the telephone number (7000636149) to talk to one of our staff members. Otherwise, we will reply by email as soon as possible.
Talk to you soon,
Signature:-ok(ourkarigar.com)";
$headers ="From: ourKarigar PVT. LTD COMPANY<contact-us@ourkarigar.com>";
  if(mail($to,$subject,$message,$headers))
{

    echo '<script type="text/javascript">alert("Form send successfull,waiting for the response our team contact you very soon.");window.location=\'index.html\';</script>';
}
else{
    echo '<script type="text/javascript">alert("Form send successfull,waiting for the response our team contact you very soon.");window.location=\'index.html\';</script>';

}
	 
}
else
{
    
echo '<script type="text/javascript">alert("Form not successfull , please try again");window.location=\'index.php\';</script>';

}
	 
}
else{
	echo "Error:" .$sql . " <br>" . $conn->error;
}

$conn->close();
?>
