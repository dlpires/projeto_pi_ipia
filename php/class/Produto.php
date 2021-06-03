<?php
    //CLASSE PRODUTO
    class Produto {
        //ATRIBUTOS
        private $cod_produto;
        private $dsc_produto;
        private $preco;
        
        //CONSTRUTORES

        public function __construct($cod_produto, $dsc_produto, $preco){
            $this->cod_produto = $cod_produto;
            $this->dsc_produto = $dsc_produto;
            $this->preco = $preco;
            //echo "OBJETO CRIADO COM SUCESSOOOO!!!!";
            //echo "<br>";
        }

        public function __destruct(){
            //echo "OBJETO DESTRUIDO!!!";
        }

        // GET E SET
        public function setCodProduto($cod_prod){
            $this->cod_produto = $cod_prod;
        }

        public function getCodProduto(){
            return $this->cod_produto;
        }

        public function setDscProduto($dsc_produto){
            $this->dsc_produto = $dsc_produto;
        }

        public function getDscProduto(){
            return $this->dsc_produto;
        }

        public function setPreco($preco){
            $this->preco = $preco;
        }

        public function getPreco(){
            return $this->preco;
        }

    }
?>