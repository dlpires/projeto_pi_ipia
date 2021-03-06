<?php
    //CLASS ENDERECO
    class Endereco{
        
        //ATRIBUTO
        private $cod_endereco;
        private $rua;
        private $numero;
        private $bairro;
        private $cep;
        private $cidade;
        private $estado;

        //CONSTRUTOR
        /*public function __construct($cep){
            // formatar o cep removendo caracteres nao numericos
            $this->cep = preg_replace("/[^0-9]/", "", $cep);
            $url = "http://viacep.com.br/ws/$this->cep/xml/";
            $xml = simplexml_load_file($url);

            //passando valores do CEP encontrado no objeto
            $this->rua = $xml->logradouro;
            $this->bairro = $xml->bairro;
            $this->cidade = $xml->localidade;
            $this->estado = $xml->uf;
        }*/

        //GETTERS E SETTERS
        public function setCod($cod_endereco){
            $this->cod_endereco = $cod_endereco;
        }

        public function getCod($cod_endereco){
            return $this->cod_endereco;
        }
        
        public function setNumero($numero){
            $this->numero = $numero;
        }

        public function setRua($rua){
            $this->rua = $rua;
        }

        public function setBairro($bairro){
            $this->bairro = $bairro;
        }

        public function setCidade($cidade){
            $this->cidade = $cidade;
        }

        public function setEstado($estado){
            $this->estado = $estado;
        }

        public function getNumero(){
            return $this->numero;
        }

        public function setCep($cep){
            $this->cep = $cep;
        }

        public function getCep(){
            return $this->cep;
        }

        public function getRua(){
            return $this->rua;
        }
        
        public function getBairro(){
            return $this->bairro;
        }

        public function getCidade(){
            return $this->cidade;
        }
        
        public function getEstado(){
            return $this->estado;
        }
    }
?>