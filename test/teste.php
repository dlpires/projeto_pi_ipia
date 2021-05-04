<?php
    include("Produto.php");
    include("ItemVenda.php");
    include("Funcionario.php");
    
    //INSTÂNCIA DE UM OBJETO
    $teste_produto = new Produto(1, "Sardinha", 30);
    $teste_produto1 = new Produto(2, "Tilapia", 10);
    $teste_produto2 = new Produto(3, "Pacu", 1000);

    /*$teste_produto->setCodProduto(1);
    $teste_produto->setDscProduto("Salmão");
    $teste_produto->setPreco(20);*/

    $teste_produto1 = NULL;

    echo "<br>";

    echo "Código do Produto -> ", $teste_produto->getCodProduto();
    echo "<br>";
    echo "Descrição do Produto -> ", $teste_produto->getDscProduto();
    echo "<br>";
    echo "Preço -> ", $teste_produto->getPreco();

    $itemVenda = new ItemVenda();

    //UTILIZANDO MÉTODOS GET E SET

    $itemVenda->setProduto($teste_produto);
    $itemVenda->setQtdItem(10);

    echo "<br>";
    
    echo "<br>";
    echo $itemVenda->getQtdItem();
    echo "<br>";
    echo $itemVenda->getProduto()->getDscProduto();


    //TESTE HERANÇA

    $func = new Funcionario(1, "cLeunISE", "edilene", "123456");

    echo "<br>";

    echo "Código do Funcionário -> ", $func->getCodigo();
    echo "<br>";
    echo "Nome do Funcionário -> ", $func->getNome();
    echo "<br>";
    echo "Usuário -> ", $func->getUsuario();


    echo "<br><br>";


?>