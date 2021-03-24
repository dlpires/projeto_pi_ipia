<?php
    //CLASSE ITEM VENDA
    class ItemVenda {
        //ATRIBUTOS
        private $produto;
        private $qtd_item;

        //GETS E SETS

        public function setProduto($produto){
            $this->produto = $produto;
        }

        public function getProduto(){
            return $this->produto;
        }

        public function setQtdItem($qtd_item){
            $this->qtd_item = $qtd_item;
        }

        public function getQtdItem(){
            return $this->qtd_item;
        }

        //MÉTODOS

    }
?>