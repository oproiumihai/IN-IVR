<?php

$servername = "localhost";
$username = "root";
$password = "1211";
$dbname = "raspberry";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "SELECT `ID`, `Umiditate`, `Timestamp` FROM `Temperatura` ORDER BY `Timestamp` DESC LIMIT 1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo  $row["Umiditate"] ;

    }
} else {
    echo "0 results";
}
$conn->close();

?>
