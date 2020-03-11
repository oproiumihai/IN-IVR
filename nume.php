<?php
$servername = "localhost";
$username = "root";
$password = "1211";
$dbname = "raspberry";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT nume FROM setari WHERE telefon='".$argv[1]."' LIMIT 1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
   
    $row = $result->fetch_assoc();

		echo $row['nume'];

} else {
    echo "0";
}
$conn->close();

?>
