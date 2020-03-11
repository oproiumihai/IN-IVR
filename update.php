<?php
$servername = "localhost";
$username = "root";
$password = "1211";
$dbname = "raspberry";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "UPDATE setari SET parola=$argv[2] WHERE telefon='".$argv[1]."' LIMIT 1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
   
    $row = $result->fetch_assoc();	
    
}
$conn->close();

?>
