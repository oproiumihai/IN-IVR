<?php
$servername = "localhost";
$username = "root";
$password = "1211";
$dbname = "raspberry";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT `id`, `stare` FROM `alarma_db` ORDER BY `id` DESC LIMIT 1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    
    $row = $result->fetch_assoc();
    echo $row["stare"];
} else {
    echo "0";
}
$conn->close();

?>