<?php
    //CLASSE PESSOA
    class Pessoa {
        //ATRIBUTOS
        protected $codigo;
        protected $nome;
        protected $cpf;
        protected $telefone;
        protected $endereco;

        public function __construct($codigo, $nome){
            $this->codigo = $codigo;
            $this->nome = $nome;
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

        //MÉTODOS

        protected function mensagem(){
            echo "SOU A SUPER CLASSE PESSOA!!";
            echo "<br>";
        }

    }
?>