<?php
    //INCLUSÃO DA CLASSE PESSOA
    require_once("Pessoa.php");
    require_once('db/mysql_crud.php');
    require_once("Endereco.php");
    
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

        public function cadastrarCliente($cliente){
            $db = new Database();
            $db->connect();
            //Inserindo o Endereço
            $db->insert('endereco',array('rua'=>$cliente->endereco->getRua(),
                                         'numero'=>$cliente->endereco->getNumero(),
                                         'bairro' => $cliente->endereco->getBairro(), 
                                         'cep'=>$cliente->endereco->getCep(), 
                                         'cidade'=>$cliente->endereco->getCidade(), 
                                         'estado'=>$cliente->endereco->getEstado()));

            $res = $db->getResult();

            //Inserindo os dados do Funcionário    
            $result = $db->insert('cliente',array('nome_cliente'=>$cliente->nome,
                                            'cpf_cliente'=>$cliente->cpf,
                                            'tel_cliente' => $cliente->telefone, 
                                            'rg_cliente'=>$cliente->rg,
                                            'Endereco_codigo_endereco' => $res[0]));  // Table name, column names and respective values
            $db->getResult();

            $db->disconnect();//CHAMA MÉTODO disconnect

            return $result;
        }

        public function cadastrarFuncionario($funcionario){
            $db = new Database();
            $db->connect();
            //Inserindo o Endereço
            $db->insert('endereco',array('rua'=>$funcionario->endereco->getRua(),
                                         'numero'=>$funcionario->endereco->getNumero(),
                                         'bairro' => $funcionario->endereco->getBairro(), 
                                         'cep'=>$funcionario->endereco->getCep(), 
                                         'cidade'=>$funcionario->endereco->getCidade(), 
                                         'estado'=>$funcionario->endereco->getEstado()));

            $res = $db->getResult();
            //print_r($res);
            //PEGANDO O ID DO ENDEREÇO ADICIONADO --> NÃO NECESSITA MAIS
            /*$db->select('endereco', 'cod_endereco', NULL, NULL, 'cod_endereco DESC', '1');
            $res = $db->getResult();*/
            //print_r($res);

            //Inserindo os dados do Funcionário    
            $result = $db->insert('funcionario',array('nome_func'=>$funcionario->nome,
                                            'cpf_func'=>$funcionario->cpf,
                                            'tel_func' => $funcionario->telefone, 
                                            'rg_func'=>$funcionario->rg, 
                                            'usuario'=>$funcionario->usuario, 
                                            'senha'=>$funcionario->senha, 
                                            'cargo' => 'Administrador',
                                            'Endereco_codigo_endereco' => $res[0]));  // Table name, column names and respective values
            $db->getResult();

            $db->disconnect();//CHAMA MÉTODO disconnect

            return $result;
            //print_r($res);

            /*$db->select('funcionario', 'usuario', NULL, "usuario = '{$funcionario->usuario}'");
            $res = $db->getResult();

            //Verificando se o usuario foi cadastrado
            if($res[0]["usuario"] == $funcionario->usuario){
                return true;
            } else {
                return false;
            }*/
            //print_r($res);
        }

    }
?>