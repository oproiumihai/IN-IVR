<?php
$servername = "localhost";
$username = "root";
$password = "1211";
$dbname = "raspberry";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT * FROM setari WHERE telefon='".$argv[1]."' LIMIT 1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {

    $row = $result->fetch_assoc();
	if($row['parola'] == $argv[2]){
		echo "1";
	}else{
		echo "0";
	}
	
    
} else {
    echo "0";
}
$conn->close();

?>
