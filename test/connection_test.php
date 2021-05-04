<?php
$servername = "localhost";
$username = "root";
$password = "";

// Criando conexão
$conn = new mysqli($servername, $username, $password);

// Verificando a conexão
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

//Fechando a conexão
$conn->close();
?> 