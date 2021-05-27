<?php
    //PARA NÃO APARECER O ERRO NO NAVEGADOR
    @ini_set('display_errors',1);
    error_reporting(E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
    //========================

    $name_page = $_GET["name_page"];
    $title = $_GET["title"];
    $error_msg = $_GET["error"];

    if($title == ''){
        $title = 'Sistema';
    }

    if($error_msg != ''){
        $alert = "<div class=\"alert alert-danger\" role=\"alert\">{$error_msg}</h1></div>";
    }

    //  INICIANDO A SESSÃO DA PÁGINA
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    
    <!--PACOTES-->
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <!--
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    -->
    <title><?php echo $title; ?></title>
</head>
<body>
    <div class="container justify-content-center">
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-lg navbar-dark bg-info">
                    <a class="navbar-brand" href="?title=Home Page&name_page=principal.php"><img src="../../img/logo.jpg" alt="Logo" class="img-thumbnail"/></a>
                    
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="?title=Home%20Page&name_page=principal.php">Principal<span class="sr-only">(Página atual)</span></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Movimentação
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="?title=Venda&name_page=venda.php">Venda</a>
                                <a class="dropdown-item" href="#">Outra Saida</a>
                                <a class="dropdown-item" href="#">Entrada</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Cadastro
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="?title=Cadastro Funcionário&name_page=cadastro_func.php">Funcionário</a>
                                <a class="dropdown-item" href="#">Cliente</a>
                                <a class="dropdown-item" href="#">Fornecedor</a>
                                <a class="dropdown-item" href="#">Produto</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Consultar
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Funcionário</a>
                                <a class="dropdown-item" href="#">Cliente</a>
                                <a class="dropdown-item" href="#">Fornecedor</a>
                                <a class="dropdown-item" href="#">Produto</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <!--Incluindo a página-->
                <br>
                <?php 
                    if($name_page != ''){ 
                        include $name_page;
                    }
                ?>
            </div>
        </div>
    </div>
    <footer class="container text-center bg-info">
        <div class="row mx-md-n5">
            <div class="col">
                <small class="form-text">Projeto em PHP com os alunos do 3º IPIA - 2021</small>
                <small class="form-text">Etec Pedro Ferreira Alves</small>
            </div>
        </div>
    </footer>
    <script src="../../js/jquery.min.js"></script>
    <script src="../../js/popper.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
</body>
</html>