<?php
    //INCLUSÃO DA CLASSE PESSOA
    include("Pessoa.php");
    
    //CLASSE FUNCIONÁRIO
    class Funcionario extends Pessoa {
        //ATRIBUTOS
        private $usuario;
        private $senha;

        //CONSTRUTOR 1 (SEM CHAMAR A SUPERCLASSE)

        /*public function __construct($codigo, $nome, $usuario, $senha){
            $this->codigo = $codigo;
            $this->nome = $nome;
            $this->usuario = $usuario;
            $this->senha = $senha;
            echo "<br>";
            echo "<br>";
            $this->mensagem();
        }*/

        //CONSTRUTOR 2 (CHAMANDO A SUPERCLASSE)

        public function __construct($codigo, $nome, $cpf, $usuario, $senha){
            parent::__construct($codigo, $nome, $cpf);
            $this->usuario = $usuario;
            $this->senha = $senha;
            echo "<br>";
            echo "<br>";
            //ACESSANDO O MÉTODO DA CLASSE PAI
            parent::mensagem();
            //ACESSANDO O MÉTODO DA CLASSE FILHA
            self::mensagem();
        }
        
        public function setUsuario($usuario){
            $this->usuario = $usuario;
        }

        public function getUsuario(){
            return $this->usuario;
        }

        public function setSenha($senha){
            $this->usuario = $usuario;
        }

        public function getSenha(){
            return $this->senha;
        }

        //MÉTODOS

        public function mensagem(){
            echo "EU SOU A SUBCLASSE FUNCIONARIO!!!";
            echo "<br>";
        }

    }
?>