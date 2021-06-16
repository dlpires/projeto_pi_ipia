<?php
    echo "<center><h1>Seja Bem-vindo {$_SESSION['username']}!!</h1><br>";
    echo "<small>Sistema criado junto aos alunos do 3º IPIA, da turma do 1º Semestre de 2021!!</small></center><br><br>"
?>

<div id="carousel_exemplo_3" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
    <li data-target="#carousel_exemplo_3" data-slide-to="0" class="active"></li>
    <li data-target="#carousel_exemplo_3" data-slide-to="1"></li>
    <li data-target="#carousel_exemplo_3" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
    <div class="carousel-item active">
        <img class="d-block w-100" src="../../img/slide1.jpg"/>
    </div>
    <div class="carousel-item">
        <img class="d-block w-100" src="../../img/slide2.jpg"/>
    </div>
    <div class="carousel-item">
        <img class="d-block w-100" src="../../img/slide3.jpg"/>
    </div>
    <a class="carousel-control-prev" href="#carousel_exemplo_3" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#carousel_exemplo_3" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Próximo</span>
    </a>
    </div>
</div><br>