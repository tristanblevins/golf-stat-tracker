
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
<title>View Stats</title>
<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
<?php

	$server = "localhost";
	$username = "root";
	$password = "";
	$dbname = "golfstats";
	$connection = mysqli_connect($server, $username, $password, $dbname);
	
	
	if ($connection) {
	echo "<br><h2>Saved Rounds</h2><br>";
	} else {
	die("Connection failed. Reason: " . mysqli_connect_error());
	}

	$sql = "SELECT * from stat_table";

		
	$result=mysqli_query($connection, $sql) or die ("Bad Query");
	
	echo "<table>";
	echo "<tr><td>Total Greens</td><td>Greens Hit</td><td>Fairways Hit</td><td>Fairways Missed Left</td><td>Fairways Missed Right</td><td>Total Putts</td><td>Putts Per GIR</td><td>Up & Downs</td><td>Total Strokes</td><td>Course Par</td></tr>";
	while($row = mysqli_fetch_assoc($result)) {
		echo "<tr><td>{$row['totalGreens']}</td><td>{$row['greensHit']}</td><td>{$row['fwHit']}</td>
		<td>{$row['fwMissedL']}</td><td>{$row['fwMissedR']}</td><td>{$row['totalPutts']}</td>
		<td>{$row['puttsPerGir']}</td>
		<td>{$row['upAndDowns']}</td><td>{$row['totalStrokes']}</td><td>{$row['coursePar']}</td></tr>";
	}

	
	mysqli_close($connection);
	
?>