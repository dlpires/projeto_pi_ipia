<?php
    include("Produto.php");
    include("ItemVenda.php");
    
    //INSTÂNCIA DE UM OBJETO
    $teste_produto = new Produto();
    $teste_produto1 = new Produto();
    $teste_produto2 = new Produto();

    $teste_produto->setCodProduto(1);
    $teste_produto->setDscProduto("Salmão");
    $teste_produto->setPreco(20);

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


?>