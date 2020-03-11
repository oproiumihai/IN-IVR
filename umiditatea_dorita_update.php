<?php

$servername = "localhost";
$username = "root";
$password = "1211";
$dbname = "raspberry";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO umiditatea_dorita (umiditate_actuala,umiditate_dorita,user) VALUES ( $argv[1] , $argv[2] , $argv[3] )";

if ($conn->query($sql) === TRUE) {
    echo "Înregistrare efectuată cu scucces!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();  
?>
