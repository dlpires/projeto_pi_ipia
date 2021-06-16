<?php
    session_start();
    // RECEBENDO O TIPO DE CADASTRO
    $tipo_cadastro = $_POST["tipo_cadastro"];

    require_once('class/Funcionario.php');
    require_once('class/Endereco.php');

    //Funcionario que cadastrou 
    $func = new Funcionario();
    $func->setNome($_SESSION['login']);
    $func->setUsuario($_SESSION['username']);

    //RECEBENDO DADOS DE CADASTRO
    function cadastrar($pessoa){
        
        $endereco = new Endereco();

        $pessoa->setEndereco($endereco);

        //RECEBENDO INFORMAÇÕES DO FORMULÁRIO
        $pessoa->setNome($_POST["nome"]);
        $pessoa->setCpf($_POST["cpf"]);
        $pessoa->setTelefone($_POST["tel"]);
        $pessoa->setRg($_POST["rg"]);

        $pessoa->getEndereco()->setRua($_POST["rua"]);
        $pessoa->getEndereco()->setNumero($_POST["numero"]);
        $pessoa->getEndereco()->setBairro($_POST["bairro"]);
        $pessoa->getEndereco()->setCidade($_POST["cidade"]);
        $pessoa->getEndereco()->setEstado($_POST["estado"]);
        $pessoa->getEndereco()->setCep($_POST["cep"]);

        //$pessoa->cadastrarFuncionario();
    }

    //Verificando se é cadastro de clientes ou de funcionários
    if($tipo_cadastro == "Funcionario"){

        //Instanciando os objetos
        $pessoa = new Funcionario();
        $pessoa->setUsuario($_POST["username"]);
        $pessoa->setSenha($_POST["password"]);

        cadastrar($pessoa);

        //Cadastrando os dados no Banco de dados
        if($func->cadastrarFuncionario($pessoa)){
            header("Location: pages/template.php?title=Cadastro Funcionário&name_page=cadastro_func.php&result_cad=S");
        }
        else{
            header("Location: pages/template.php?title=Cadastro Funcionário&name_page=cadastro_func.php&result_cad=E");
        }
        //print_r($pessoa);
    }
    else{
        require_once("class/Cliente.php");

        //Instanciando os objetos
        $pessoa = new Cliente();

        cadastrar($pessoa);
        
        //Cadastrando os dados no Banco de dados
        if($func->cadastrarCliente($pessoa)){
            header("Location: pages/template.php?title=Cadastro Cliente&name_page=cadastro_cliente.php&result_cad=S");
        }
        else{
            header("Location: pages/template.php?title=Cadastro Cliente&name_page=cadastro_cliente.php&result_cad=E");
        }
        //print_r($pessoa);
    }
?>