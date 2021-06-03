<?php
    // RECEBENDO O TIPO DE CADASTRO
    $tipo_cadastro = $_POST["tipo_cadastro"];

    require_once('class/Funcionario.php');
    require_once('class/Produto.php');
    require_once('class/Movimentacao.php');
    session_start();
    //Funcionario que cadastrou
    $func = new Funcionario;
    $func->setNome($_SESSION['login']);
    $func->setUsuario($_SESSION['username']);
    $func->setCodigo($_SESSION['cod_user']);

    //RECEBENDO DADOS DE CADASTRO
    function cadastrarProduto($mov){
        
        $prod = new Produto();

        //RECEBENDO INFORMAÇÕES DO FORMULÁRIO
        $prod->setDescProduto($_POST["desc_produto"]);
        $prod->setPreco($_POST["preco"]);

        $mov = new Movimentacao(

        );

        $mov->setProduto($prod);

        $mov->getEndereco()->setRua($_POST["rua"]);
        $mov->getEndereco()->setNumero($_POST["numero"]);
        $mov->getEndereco()->setBairro($_POST["bairro"]);
        $mov->getEndereco()->setCidade($_POST["cidade"]);
        $mov->getEndereco()->setEstado($_POST["estado"]);
        $mov->getEndereco()->setCep($_POST["cep"]);

        //$mov->cadastrarFuncionario();
    }

    //Verificando se é cadastro de clientes ou de funcionários
    if($tipo_cadastro == "Funcionario"){

        //Instanciando os objetos
        $mov = new Funcionario();
        $mov->setUsuario($_POST["username"]);
        $mov->setSenha($_POST["password"]);

        cadastrar($mov);

        //Cadastrando os dados no Banco de dados
        if($func->cadastrarFuncionario($mov)){
            header("Location: pages/template.php?title=Cadastro Funcionário&name_page=cadastro_func.php&result_cad=S");
        }
        else{
            header("Location: pages/template.php?title=Cadastro Funcionário&name_page=cadastro_func.php&result_cad=E");
        }
        //print_r($mov);
    }
    else{
        require_once("class/Cliente.php");

        //Instanciando os objetos
        $mov = new Cliente();

        cadastrar($mov);
        
        //Cadastrando os dados no Banco de dados
        if($func->cadastrarCliente($mov)){
            header("Location: pages/template.php?title=Cadastro Cliente&name_page=cadastro_cliente.php&result_cad=S");
        }
        else{
            header("Location: pages/template.php?title=Cadastro Cliente&name_page=cadastro_cliente.php&result_cad=E");
        }
        //print_r($mov);
    }
?>