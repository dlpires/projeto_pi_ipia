<?php
    //CLASSE PESSOA
    class Pessoa {
        //ATRIBUTOS
        protected $codigo;
        protected $nome;
        protected $cpf;
        protected $telefone;
        protected $endereco;

        public function __construct($codigo, $nome, $cpf){
            $this->codigo = $codigo;
            $this->nome = $nome;
            $this->cpf = $cpf;
        } 

        //GETTERS E SETTERS
        public function getCodigo(){
            return $this->codigo;
        }

        public function setCodigo($codigo){
            $this->codigo = $codigo;
        }

        public function setNome($nome){
            $this->nome = $nome;
        }

        public function getNome(){
            return $this->nome;
        }

        public function setCpf($cpf){
            $this->cpf = $cpf;
        }

        public function getCpf(){
            return $this->cpf;
        }

        public function setTelefone($telefone){
            $this->telefone = $telefone;
        }

        public function getTelefone(){
            return $this->telefone;
        }

        public function setEndereco($endereco){
            $this->endereco = $endereco;
        }

        public function getEndereco(){
            return $this->endereco;
        }

        //MÉTODOS

        protected function mensagem(){
            echo "SOU A SUPER CLASSE PESSOA!!";
            echo "<br>";
        }

    }
?>