<?php
$servername = "localhost";
$username = "user";
$password = ""; 
$dbname = "LOGIN"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>