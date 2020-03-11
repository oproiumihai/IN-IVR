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
{	$sql = "SELECT `id`, `stare` FROM `alarma_db` ORDER BY `id` DESC LIMIT 1";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
	$s=$row["stare"];
	echo $s;
	} else {
    echo "0";
	}
	$b=shell_exec("gpio read 31");
	$b=trim(preg_replace('/\s\s+/', ' ', $b));
	echo $b;
	$t=shell_exec("gpio read 26");
	$t=trim(preg_replace('/\s\s+/', ' ', $t));
	echo $t;
	if ($t== "1" && $s=="1" ) {
	   shell_exec(" gpio write 6 1 ");
	   shell_exec(' asterisk -rx "originate local/702@dial-originate1 extension s@my-context1" ');
	   shell_exec(' wait 30 ');
	} else {
	   shell_exec(" gpio write 6 0 ");
	}
	if($b=="0")
		shell_exec(" php -q /home/mihai/dezactiveaza_alarma.php");
	sleep(3);
} while(1);



?>