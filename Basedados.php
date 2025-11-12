<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sistema_login";

$conn = new mysqli ($servername, $username, $password, $dbname);

if ($conn->connect_error){
    die("conexão fahada: " . $conn->connect_error);
}
echo "Conexão com sucesso!";

?>