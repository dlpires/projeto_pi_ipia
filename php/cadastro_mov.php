<?php
    session_start();
    // RECEBENDO O TIPO DE CADASTRO
    $tipo_cadastro = $_POST["tipo_cadastro"];

    require_once('class/Funcionario.php');
    require_once('class/Produto.php');
    require_once('class/Movimentacao.php');
    //Funcionario que cadastrou
    $func = new Funcionario();
    $func->setNome($_SESSION['login']);
    $func->setUsuario($_SESSION['username']);
    $func->setCodigo($_SESSION['cod_user']);

    //RECEBENDO DADOS DE CADASTRO
    function prepararCadMovimentacao($prod, $func, $qtd, $tipo_mov){

        $mov = new Movimentacao(
            $prod,
            $func,
            date('Y-m-d H:i:s'),
            $qtd,
            $tipo_mov
        );

        return $mov;
    }

    //Verificando se é cadastro de clientes ou de funcionários
    if($tipo_cadastro == "novo_produto"){

        //Instanciando os objetos
        $prod = new Produto($_POST["desc_produto"], 
                            $_POST["preco"],
                            $_POST["estoque_min"],
                            $_POST["estoque_max"], 
                            $_POST["un_medida"]);

        // TIPO 1 = ENTRADA --- TIPO 2 = SAÍDA

        $mov = prepararCadMovimentacao($prod, $func, $_POST["qtd_inicial"], 1);

        //Cadastrando os dados no Banco de dados
        if($func->cadastrarMovimentacao($mov)){
            header("Location: pages/template.php?title=Cadastro Produto&name_page=cadastro_produto.php&result_cad=S");
        }
        else{
            header("Location: pages/template.php?title=Cadastro Produto&name_page=cadastro_produto.php&result_cad=E");
        }
        //print_r($mov);
    }
    else{
        echo "ERRO!!";
    }
    /*else{
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
    }*/
?>