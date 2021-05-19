<?php
$servername = "localhost";
$username = "root";
$password = "";
$banco = "projeto_3_ipia";

// Criando conexão
$conn = new mysqli($servername, $username, $password, $banco);

// Verificando a conexão
if ($conn->connect_error) {
  die("Conexão com erro: " . $conn->connect_error);
}
echo "<h1>Conectou corretamente!!!</h1>";

//COMANDO SQL Para cadastrar o endereço
$sql = "DELETE FROM endereco WHERE cod_endereco = 3";

//EXECUTANDO COMANDO SQL
if($conn->query($sql) === TRUE){
  echo "Registro deletado com sucesso!!";
}
else {
  echo "Erro ao executar a Query: " . $conn->error;
}

//Fechando a conexão
$conn->close();
?> 