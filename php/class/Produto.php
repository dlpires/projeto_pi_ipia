<?php
    //CLASSE PRODUTO
    class Produto {
        //ATRIBUTOS
        private $cod_produto;
        private $dsc_produto;
        private $preco;
        private $estoque_min;
        private $estoque_max;
        private $un_medida;
        
        //CONSTRUTORES

        public function __construct($dsc_produto, $preco, $estoque_min, $estoque_max, $un_medida){
            $this->dsc_produto = $dsc_produto;
            $this->preco = $preco;
            $this->estoque_max = $estoque_max;
            $this->estoque_min = $estoque_min;
            $this->un_medida = $un_medida;
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

        public function setEstMin($estoque_min){
            $this->estoque_min = $estoque_min;
        }

        public function getEstMin(){
            return $this->estoque_min;
        }

        public function setEstMax($estoque_max){
            $this->estoque_max = $estoque_max;
        }

        public function getEstMax(){
            return $this->estoque_max;
        }

        public function setUnMedida($un_medida){
            $this->un_medida = $un_medida;
        }

        public function getUnMedida(){
            return $this->un_medida;
        }

    }
?>