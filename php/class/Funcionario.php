<?php
    //INCLUSÃO DA CLASSE PESSOA
    include("Pessoa.php");
    include('db/mysql_crud.php');
    
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

        /*public function __construct($codigo, $nome, $cpf, $usuario, $senha){
            parent::__construct($codigo, $nome, $cpf);
            $this->usuario = $usuario;
            $this->senha = $senha;
            echo "<br>";
            echo "<br>";
            //ACESSANDO O MÉTODO DA CLASSE PAI
            parent::mensagem();
            //ACESSANDO O MÉTODO DA CLASSE FILHA
            self::mensagem();
        }*/
        
        public function setUsuario($usuario){
            $this->usuario = $usuario;
        }

        public function getUsuario(){
            return $this->usuario;
        }

        public function setSenha($senha){
            $this->senha = $senha;
        }

        public function getSenha(){
            return $this->senha;
        }

        //MÉTODOS

        public function mensagem(){
            echo "EU SOU A SUBCLASSE FUNCIONARIO!!!";
            echo "<br>";
        }

        //MÉTODO PARA VALIDAR O LOGIN
        public function validateLogin(){
            $db = new Database();//INSTANCIA OBJETO BD
            $db->connect();//CHAMA MÉTODO connect

            //CHAMA O MÉTODO select
            $db->select('funcionario','*', NULL, "usuario = '{$this->usuario}'", NULL); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions

            //PUXAO RESULTADO DO SELECT
            $res = $db->getResult();

            //print_r($res);

            $db->disconnect();//CHAMA MÉTODO disconnect

            $this->nome = $res[0]['nome_func'];
            $this->cpf = $res[0]["cpf_func"];

            if($res[0]["usuario"] == $this->usuario && $res[0]["senha"] == $this->senha){
                return true;
            } else {
                return false;
            }
        }

        public function insert(){

        }

    }
?>