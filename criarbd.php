<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli ($servername, $username, $password);

if ($conn->connect_error){
    die("conexão fahada: " . $conn->connect_error);
}
echo "Conexão com sucesso!";
$sql = "CREATE DATABASE sistema_login";
if ($conn->query($sql) === TRUE){
    echo" Base de dados criada com sucesso";
}else{
    echo " Erro na criação da base de dados:" . $conn->error;
}
$conn->close();

?>