<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Select Data</title>

</head>

<body>
<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "golfstats";
$connection = mysqli_connect($server, $username, $password, $dbname);

if ($connection) {
	echo "Connection established! <br>";
} else {
	die("Connection failed. Reason: " . mysqli_connect_error());
}

$sql = "INSERT INTO stat_table (totalGreens, greensHit, greensMissed, fwHit, fwMissedL, fwMissedR, totalPutts, hitGrnPutts, missGrnPutts, upAndDowns, totalStrokes) 
		VALUES 

?>

</body>

</html>