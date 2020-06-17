<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "saexam1";

// Create connection
$cn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$cn) {
    die("Connection failed: " . mysqli_connect_error());
}


/*
$sql = "SELECT * FROM mst_admin";
$result = mysqli_query($cn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"];
		echo "login id: " . $row["loginid"];
		echo "Password: " . $row["pass"];
		echo "centre name: " . $row["centre_name"];
		echo "centre address: " . $row["centre_address"];
		echo "Phone: " . $row["phone"];
		echo "centre code: " . $row["centre_code"];
    }
} else {
    echo "0 results";
}

mysqli_close($cn);
*/

//$cn=mysql_connect("localhost","root","") or die("Could not Connect My Sql");
//mysql_select_db("saol_exam",$cn)  or die("Could connect to Database");
?>
