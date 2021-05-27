<?php
    //PARA NÃO APARECER O ERRO NO NAVEGADOR
    @ini_set('display_errors',1);
    error_reporting(E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
    //========================

    $error_msg = $_GET["error"];

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
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    -->
    <title>Página Inicial</title>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-6">
            <form action="php/login.php" method="post">
                <div class="form-group text-center">
                    <h2>Login</h2>
                    <small class="form-text text-muted">Entre com as suas credenciais para acessar o sistema.</small>
                </div>
                <div class="form-group">
                    <label for="username" class="form-check-label text-muted">Usuário</label><br>
                    <input type="text" class="form-control form-control-lg" name="username" id="username" placeholder="Seu login"/>
                </div>
                <div class="form-group">
                    <label for="password" class="form-check-label text-muted">Senha</label><br>
                    <input type="password" class="form-control form-control-lg" name="password" id="password" placeholder="Sua senha"/>
                </div>
                <div class="form-group">
                    <?php echo $alert; ?>
                    <input type="submit" class="btn btn-primary" value="Login">
                </div>
            </form>
        </div>
    </div>
</div>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>