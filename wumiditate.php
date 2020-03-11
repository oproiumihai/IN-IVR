<?php
$servername = "localhost";
$username = "root";
$password = "1211";
$dbname = "raspberry";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$cmd=shell_exec("sudo python xumiditate.py");

$sql = "INSERT INTO Temperatura (Temperatura,Umiditate) VALUES (0,$cmd)";

if ($conn->query($sql) === TRUE) {
    echo "Înregistrare efectuată cu succes!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();  
?>
