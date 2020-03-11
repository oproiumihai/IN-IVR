<?php
$servername = "localhost";
$username = "root";
$password = "1211";
$dbname = "raspberry";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$flag="0";

do
{	$sql = "SELECT `id`, `stare` FROM `inundatie` ORDER BY `id` DESC LIMIT 1";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
	    $row = $result->fetch_assoc();
		$s=$row["stare"];
		echo $s;
	} else {
	    echo "0";
	}
	$i=shell_exec("gpio read 0");
	$i=trim(preg_replace('/\s\s+/', ' ', $i));
	echo $i;
	if($s == "1" && $i == "1" && $flag == "0")
	{
		$flag="1";

		if( $flag == "1"){
			shell_exec(' asterisk -rx "originate local/701@dial-originate1 extension s@my-context1" ');
		}
	}

	if( $s != "1" || $i != "1" ){
		$flag="0";
	}

	sleep(3);
} while(1);

?>
