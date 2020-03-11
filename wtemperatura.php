<?php

$servername = "localhost";
$username = "root";
$password = "1211";
$dbname = "raspberry";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$t=shell_exec("sudo python xtemperatura.py");
$u=shell_exec("sudo python xumiditate.py");
$sql = "INSERT INTO Temperatura (Temperatura,Umiditate) VALUES ($t,$u)";

if ($conn->query($sql) === TRUE) {
    echo "Înregistrare efectuată cu succes!";
} else {
    echo "Eroare: " . $sql . "<br>" . $conn->error;
}

$conn->close();  
?>
