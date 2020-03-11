<?php
$servername = "localhost";
$username = "root";
$password = "1211";
$dbname = "raspberry";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


do
{	$sql = "SELECT `id`, `temperatura_dorita` FROM `temperatura_dorita` ORDER BY `id` DESC LIMIT 1";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
	$tempd=$row["temperatura_dorita"];
	//echo $tempd;
	} else {
    echo "0";
	}
	$centrala=shell_exec("gpio read 4");
	$centrala=trim(preg_replace('/\s\s+/', ' ', $centrala));
	echo $centrala;
	$tempa=shell_exec("php -q /home/mihai/trunktemp.php");
	$tempa=trim(preg_replace('/\s\s+/', ' ', $tempa));
	//$tempa=4;
	echo $tempa;
	if ($tempd < $tempa) {
	   shell_exec(" gpio write 4 0 ");
	} else {
	   shell_exec(" gpio write 4 1 ");
	}
	sleep(6);
} while(1);



?>