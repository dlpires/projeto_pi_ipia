<?php
    //CLASSE FORNECEDOR
    class Fornecedor {
        //ATRIBUTOS
        private $cod_fornecedor;
        private $nm_fornecedor;
        private $cnpj;
        private $endereco;

        //GET E SET
        
        public function setCodFornecedor($cod_fornecedor){
            $this->cod_fornecedor = $cod_fornecedor;
        }

        public function getCodFornecedor(){
            return $this->cod_fornecedor;
        }

        public function setNmFornecedor($nm_fornecedor){
            $this->nm_fornecedor = $nm_fornecedor;
        }

        public function getNmFornecedor(){
            return $this->nm_fornecedor;
        }

        public function setCnpj($cnpj){
            $this->cnpj = $cnpj;
        }

        public function getCnpj(){
            return $this->cnpj;
        }

        public function setEndereco($endereco){
            $this->endereco = $endereco;
        }

        public function getEndereco(){
            return $this->Endereco;
        }

        //MÉTODOS

    }
?>