

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
<title>Finish Page</title>
<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
<?php


	$par = 0;
	$fir = 0;
	$fwMissL = 0;
	$fwMissR = 0;
	$totFairways = 0;
	$gir = 0;
	$totGreens = 0;
	$upAndDowns = 0;
	$putts = 0;
	$puttsPerGir = 0;
	$score = 0;
	$server = "localhost";
	$username = "root";
	$password = "";
	$dbname = "golfstats";
	$connection = mysqli_connect($server, $username, $password, $dbname);

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	if (isset($_POST['hiddenPar'])) {
		$par = $_POST['hiddenPar'];
	}
	if (isset($_POST['hiddenFir'])) {
		$fir = $_POST['hiddenFir'];
	}
	if (isset($_POST['hiddenFml'])) {
		$fwMissL = $_POST['hiddenFml'];
	}
	if (isset($_POST['hiddenFmr'])) {
		$fwMissR = $_POST['hiddenFmr'];
	}
	if (isset($_POST['hiddenTotFws'])) {
		$totFairways = $_POST['hiddenTotFws'];
	}
	if (isset($_POST['hiddenGir'])) {
		$gir = $_POST['hiddenGir'];
	}
	if (isset($_POST['hiddenTotGrns'])) {
		$totGreens = $_POST['hiddenTotGrns'];
	}
	if (isset($_POST['hiddenUpAndDowns'])) {
		$upAndDowns = $_POST['hiddenUpAndDowns'];
	}
	if (isset($_POST['hiddenPutts'])) {
		$putts = $_POST['hiddenPutts'];
	}
	if (isset($_POST['hiddenPuttsPerGir'])) {
		$puttsPerGir = $_POST['hiddenPuttsPerGir'];
	}
	if (isset($_POST['hiddenScore'])) {
		$score = $_POST['hiddenScore'];
	}

	
	if ($connection) {
	echo "Connection established! <br>";
	} else {
	die("Connection failed. Reason: " . mysqli_connect_error());
	}

$sql = "INSERT INTO stat_table (totalGreens, greensHit, fwHit, fwMissedL, fwMissedR, totalPutts, puttsPerGir, upAndDowns, totalStrokes, coursePar) 
		VALUES (" . $totGreens . ", " . $gir . ", " . $fir . ", " . $fwMissL . ", " . $fwMissR . ", " . $putts . ", " . $puttsPerGir . ", " . $upAndDowns . ", " . $score . ", " . $par . ");";

		
	mysqli_query($connection, $sql);
	if(mysqli_affected_rows($connection) > 0) {
		echo "Posted successfully!";
	} else {
		echo "Problem posting stats! <br>";
		echo mysqli_error($connection);
	}
	
	mysqli_close($connection);
	
}
?>
<br>
<br>
<br>
<br>
<br>
<p><a href="display_table.php">View Posted Stats</a></p>
<p><a href="index.html">Go Back to App</a></p>

	
	
	
	
	
	
	





</body>
</html>