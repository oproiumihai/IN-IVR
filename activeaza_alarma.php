<?php
$servername = "localhost";
$username = "root";
$password = "1211";
$dbname = "raspberry";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = " UPDATE `alarma_db` SET `stare` = '1' WHERE `alarma_db`.`id` = 1 ";

if ($conn->query($sql) === TRUE) {
    echo "Inregistrare efectuata cu succes!";
} else {
    echo "Eroare la inregistrare in baza de date!: " . $conn->error;
}

$conn->close();
?>
