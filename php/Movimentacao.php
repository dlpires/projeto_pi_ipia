<?php
    //CLASSE CLIENTE
    class Movimentacao{
        //ATRIBUTOS

        private $cod_mov;
        private $venda;
        private $data_mov;
        private $qtd_produto;
        private $estoque_min;
        private $estoque_max;
        private $tipo_mov;

        //CONSTRUTOR
        public function __construct($cod_mov, $venda, $data_mov, $qtd_produto, $estoque_max, $estoque_min){
            $this->cod_mov = $cod_mov;
            $this->venda = $venda;
            $this->data_mov = $data_mov;
            $this->qtd_produto = $qtd_produto;
            $this->estoque_max = $estoque_max;
            $this->estoque_min = $estoque_min;
        }

        //GETTERS E SETTERS
        public function setCodMov($cod_mov){
            $this->cod_mov = $cod_mov;
        }

        public function getCodMov(){
            return $this->cod_mov;
        }

        public function setVenda($venda){
            $this->venda = $venda;
        }

        public function getVenda(){
            return $this->venda;
        }

        public function setDataMov($data_mov){
            $this->data_mov = $data_mov;
        }

        public function getDataMov(){
            return $this->data_mov;
        }

        public function setQtdProduto($qtd_produto){
            $this->qtd_produto = $qtd_produto;
        }

        public function getQtdProduto(){
            return $this->qtd_produto;
        }

        public function setEstoqueMax($estoque_max){
            $this->estoque_max = $estoque_max;
        }

        public function getEstoqueMax(){
            return $this->estoque_max;
        }

        public function setEstoqueMin($estoque_min){
            $this->estoque_min = $estoque_min;
        }

        public function getEstoqueMin(){
            return $this->estoque_min;
        }

        public function setTipoMov($tipo_mov){
            $this->tipo_mov = $tipo_mov;
        }

        public function getTipoMov(){
            return $this->tipo_mov;
        }

        //MÉTODOS

    }
?>