<?php

$servername = "localhost";
$username = "root";
$password = "1211";
$dbname = "raspberry";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO temperatura_dorita (temperatura_actuala,temperatura_dorita,user) VALUES ( $argv[1] , $argv[2] , $argv[3] )";

if ($conn->query($sql) === TRUE) {
    echo "Noua înregistrare a fost efectuată cu succes!";
} else {
    echo "Eroare la înregistrare " . $sql . "<br>" . $conn->error;
}

$conn->close();  
?>
