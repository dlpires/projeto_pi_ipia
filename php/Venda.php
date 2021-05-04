<?php
    //CLASSE CLIENTE
    class Venda {
        //ATRIBUTOS

        private $cod_venda;
        private $itens;
        private $cliente;
        private $data_venda;
        private $valor_total;

        //CONSTRUTOR
        public function __construct($cod_venda, $itens, $cliente, $data_venda, $valor_total){
            $this->cod_venda = $cod_venda;
            $this->itens = $itens;
            $this->cliente = $cliente;
            $this->data_venda = $data_venda;
            $this->valor_total = $valor_total;
        }

        public function getCodVenda(){
            return $this->cod_venda;
        }

        public function setCodVenda($cod_venda){
            $this->cod_venda = $cod_venda;
        }

        public function getItens(){
            return $this->itens;
        }

        public function setItens($itens){
            $this->itens = $itens;
        }

        public function getCliente(){
            return $this->cliente;
        }

        public function setCliente($cliente){
            $this->cliente = $cliente;
        }

        public function getDataVenda(){
            return $this->data_venda;
        }

        public function setDataVenda($data_venda){
            $this->data_venda = $data_venda;
        }

        public function getValorTotal(){
            return $this->valor_total;
        }

        public function setValorTotal($valor_total){
            $this->valor_total = $valor_total;
        }

        //MÉTODOS

    }

?>