<?php
$servername = "localhost";
$username = "root";
$password = "1211";
$dbname = "raspberry";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = " UPDATE `alarma_db` SET `cod_acces` = '".$argv[1]."' WHERE `alarma_db`.`id` = 1 ";

if ($conn->query($sql) === TRUE) {
    echo "Inregristrare efectuata cu scces!";
} else {
    echo "Eroare la inregistrare" . $conn->error;
}

$conn->close();
?>

