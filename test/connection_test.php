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
$sql = "INSERT INTO endereco (rua, numero, bairro, cep, cidade, estado)
        VALUES ('Rua do João', 1111, 'Santa Cruz', '13800-000', 'Mogi-Mirim', 'SP')";

//CADASTRO O ENDEREÇO
$conn->query($sql);

//COMANDO SQL
$sql = "INSERT INTO cliente (nome_cliente, cpf_cliente, tel_cliente, rg_cliente, Endereco_codigo_endereco)
        VALUES ('João', '111.222.333-45', '1999999999', '12.131.452-2', 1)";

//EXECUTANDO COMANDO SQL
if($conn->query($sql) === TRUE){
  echo "Cliente cadastrado com sucesso!!";
}
else {
  echo "Erro ao cadastrar o cliente: " . $conn->error;
}

//Fechando a conexão
$conn->close();
?> 