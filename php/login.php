<?php
//PARA NÃO APARECER O ERRO NO NAVEGADOR
@ini_set('display_errors',1);
error_reporting(E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
//========================

include("class/Funcionario.php");

//PEGANDO OS DADOS DE LOGIN
$usuario = $_POST["username"];
$senha = $_POST["password"];

$user = new Funcionario();

$user->setUsuario($usuario);
$user->setSenha($senha);

if($user->validateLogin()){
    header("Location: pages/principal.php?nome={$user->getNome()}");
}
else {
    header("Location: ../index.php?error=Erro de login ou senha!!");
}

?>