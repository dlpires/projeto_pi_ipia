<?php
    //INCLUSÃO DA CLASSE PESSOA
    require_once("Pessoa.php");
    require_once(__DIR__."/../db/mysql_crud.php");
    require_once("Endereco.php");
    require_once("Cliente.php");
    require_once("Movimentacao.php");
    require_once("Produto.php");
    
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
            $db->select('Funcionario','*', NULL, "usuario = '{$this->usuario}'", NULL); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions

            //PUXA O RESULTADO DO SELECT
            $res = $db->getResult();

            //print_r($res);

            $db->disconnect();//CHAMA MÉTODO disconnect

            $this->nome = $res[0]['nome_func'];
            $this->cpf = $res[0]["cpf_func"];
            $this->codigo = $res[0]["cod_func"];

            if($res[0]["usuario"] == $this->usuario && $res[0]["senha"] == $this->senha){
                return true;
            } else {
                return false;
            }
        }

        //CONSULTA DA LISTA DE CLIENTES
        public function consultarClientes(){ 
            $db = new Database();
            $db->connect();

            //PEGANDO LISTA DE CLIENTES
            $db->select('Cliente', '*', NULL, NULL);
            $res = $db->getResult();
            
            $lista_clientes = [];

            //LENDO OS RESULTADOS ENCONTRADOS
            for($i = 0; $i < count($res); $i++){
                $cliente = new Cliente();
                
                $cliente->setCodigo($res[$i]["cod_cliente"]);
                $cliente->setNome($res[$i]["nome_cliente"]);
                $cliente->setCpf($res[$i]["cpf_cliente"]);
                $cliente->setTelefone($res[$i]["tel_cliente"]);
                $cliente->setRg($res[$i]["rg_cliente"]);

                //PEGANDO LISTA DE CLIENTES
                $db->select('Endereco', '*', NULL, "cod_endereco = '{$res[$i]["Endereco_codigo_endereco"]}'");
                $res2 = $db->getResult();

                $cliente->setEndereco(new Endereco());
                $cliente->getEndereco()->setCod($res2[0]["cod_endereco"]);
                $cliente->getEndereco()->setRua($res2[0]["rua"]);
                $cliente->getEndereco()->setNumero($res2[0]["numero"]);
                $cliente->getEndereco()->setBairro($res2[0]["bairro"]);
                $cliente->getEndereco()->setCep($res2[0]["cep"]);
                $cliente->getEndereco()->setCidade($res2[0]["cidade"]);
                $cliente->getEndereco()->setEstado($res2[0]["estado"]);

                array_push($lista_clientes, $cliente);
            }

            //FECHANDO CONEXÃO
            $db->disconnect();
            return $lista_clientes;
        }

        //CONSULTA DA LISTA DE CLIENTES
        public function consultarProdutos(){ 
            $db = new Database();
            $db->connect();

            //PEGANDO LISTA DE MOVIMENTACAO
            $db->select('Movimentacao', 'Produto_cod_produto, qtd_produto, tipo_mov', NULL, NULL);
            $res = $db->getResult();
            
            $lista_produtos = [];

            //LENDO OS RESULTADOS ENCONTRADOS
            for($i = 0; $i < count($res); $i++){
                $mov = new Movimentacao();
                
                $mov->setCodigo($res[$i]["cod_cliente"]);
                $mov->setNome($res[$i]["nome_cliente"]);
                $mov->setCpf($res[$i]["cpf_cliente"]);
                $mov->setTelefone($res[$i]["tel_cliente"]);
                $mov->setRg($res[$i]["rg_cliente"]);

                //PEGANDO LISTA DE CLIENTES
                $db->select('Endereco', '*', NULL, "cod_endereco = '{$res[$i]["Endereco_codigo_endereco"]}'");
                $res2 = $db->getResult();

                $mov->setEndereco(new Endereco());
                $mov->getEndereco()->setCod($res2[0]["cod_endereco"]);
                $mov->getEndereco()->setRua($res2[0]["rua"]);
                $mov->getEndereco()->setNumero($res2[0]["numero"]);
                $mov->getEndereco()->setBairro($res2[0]["bairro"]);
                $mov->getEndereco()->setCep($res2[0]["cep"]);
                $mov->getEndereco()->setCidade($res2[0]["cidade"]);
                $mov->getEndereco()->setCod($res2[0]["estado"]);

                array_push($lista_produtos, $prod);
            }

            //FECHANDO CONEXÃO
            $db->disconnect();
            return $lista_produtos;
        }

        public function cadastrarCliente($cliente){
            $db = new Database();
            $db->connect();
            //Inserindo o Endereço
            $db->insert('Endereco',array('rua'=>$cliente->endereco->getRua(),
                                         'numero'=>$cliente->endereco->getNumero(),
                                         'bairro' => $cliente->endereco->getBairro(), 
                                         'cep'=>$cliente->endereco->getCep(), 
                                         'cidade'=>$cliente->endereco->getCidade(), 
                                         'estado'=>$cliente->endereco->getEstado()));

            $res = $db->getResult();

            //Inserindo os dados do Funcionário    
            $result = $db->insert('Cliente',array('nome_cliente'=>$cliente->nome,
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
            $db->insert('Endereco',array('rua'=>$funcionario->endereco->getRua(),
                                         'numero'=>$funcionario->endereco->getNumero(),
                                         'bairro' => $funcionario->endereco->getBairro(), 
                                         'cep'=>$funcionario->endereco->getCep(), 
                                         'cidade'=>$funcionario->endereco->getCidade(), 
                                         'estado'=>$funcionario->endereco->getEstado()));

            $res = $db->getResult();
            //PEGANDO O ID DO ENDEREÇO ADICIONADO --> NÃO NECESSITA MAIS
            /*$db->select('endereco', 'cod_endereco', NULL, NULL, 'cod_endereco DESC', '1');
            $res = $db->getResult();*/
            //print_r($res);

            //Inserindo os dados do Funcionário    
            $result = $db->insert('Funcionario',array('nome_func'=>$funcionario->nome,
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

        //CADASTRAR MOVIMENTAÇÃO
        public function cadastrarMovimentacao($mov){
            //Inserindo o produto na tabela Produto
            $res = $mov->getFuncionario()->cadastrarProduto($mov->getProduto());
            
            //INSTANCIA PARA CONEXÃO BANCO DE DADOS
            $db = new Database();
            $db->connect();

            //Inserindo os dados para cadastro da movimentacao   
            $result = $db->insert('Movimentacao',array('dt_mov'=>$mov->getDataMov(),
                                            'qtd_produto'=>$mov->getQtdProduto(),
                                            'tipo_mov'=>$mov->getTipoMov(),
                                            'Funcionario_cod_func' => $mov->getFuncionario()->getCodigo(),
                                            'Produto_cod_produto' => $res[0]));  // Table name, column names and respective values
            $db->getResult();

            $db->disconnect();//CHAMA MÉTODO disconnect

            return $result;
        }

        //CADASTRAR PRODUTO
        private function cadastrarProduto($prod){
            $db = new Database();
            $db->connect();
            //Inserindo o produto na tabela Produto
            $db->insert('Produto',array('dsc_produto'=>$prod->getDscProduto(),
                                        'vl_unitario'=>$prod->getPreco(),
                                        'estoque_min'=>$prod->getEstMin(),
                                        'estoque_max'=>$prod->getEstMax(),
                                        'un_medida'=>$prod->getUnMedida()));

            $res = $db->getResult();

            $db->disconnect();//CHAMA MÉTODO disconnect

            return $res;
        }

    }
?>