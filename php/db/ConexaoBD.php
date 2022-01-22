<?php
    //CLASSE BD --> Conexão com banco de dados - apenas uma instância (Singleton)
    class ConexaoBD{
        //ATRIBUTOS
        private static $instancia = null;
        private $conn;
        
        private $servername = "mariadb1";
        private $username = "root";
        private $password = "root";
        private $banco = "projeto_3_ipia";

        //Construtor: Instanciando o banco de dados
        private function __construct(){
            $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->banco);
            /* OUTRA FORMA
            $this->conn = new PDO("mysql:host={$this->servername};
            dbname={$this->banco}", $this->username,$this->password,
            array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));*/

        }
        
        //Criando a instancia
        public static function getInstance()
        {
            if(!self::$instancia)
            {
            self::$instancia = new ConexaoBD();
            }
        
            return self::$instancia;
        }
        
        //Método para utilizar a conexão
        public function getConnection()
        {
            return $this->conn;
        }
    }
?>