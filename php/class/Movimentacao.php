<?php
    //CLASSE CLIENTE
    class Movimentacao{
        //ATRIBUTOS

        private $cod_mov;
        private $produto;
        private $funcionario;
        private $data_mov;
        private $qtd_produto;
        private $estoque_min;
        private $estoque_max;
        private $tipo_mov;

        //CONSTRUTOR
        public function __construct($produto, $funcionario, $data_mov, $qtd_produto, $estoque_max, $estoque_min, $tipo_mov){
            $this->produto = $produto;
            $this->funcionario = $funcionario;
            $this->data_mov = $data_mov;
            $this->qtd_produto = $qtd_produto;
            $this->estoque_max = $estoque_max;
            $this->estoque_min = $estoque_min;
            $this->tipo_mov = $tipo_mov;
        }

        //GETTERS E SETTERS
        public function setCodMov($cod_mov){
            $this->cod_mov = $cod_mov;
        }

        public function getCodMov(){
            return $this->cod_mov;
        }

        public function setProduto($produto){
            $this->produto = $produto;
        }

        public function getProduto(){
            return $this->produto;
        }

        public function setFuncionario($funcionario){
            $this->funcionario = $funcionario;
        }

        public function getFuncionario(){
            return $this->funcionario;
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