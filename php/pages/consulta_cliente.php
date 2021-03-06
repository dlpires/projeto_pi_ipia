<?php
    include_once("../class/Funcionario.php");

    $func = new Funcionario();
    
    //Consulta de clientes
    $lista_clientes = $func->consultarClientes();
    //print_r($lista_clientes);
?>
<div class="row text-center">
    <div class="col">
        <h2>Lista de Clientes</h2>
        <small class="form-text text-muted">Consulte, Edite e Exclua os usuários já cadastrados.</small><br>
        <?php echo $alert; ?>
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Código</th>
                <th scope="col">Nome</th>
                <th scope="col">CPF</th>
                <th scope="col">Telefone</th>
                <th scope="col">RG</th>
                <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
        <?php //ESCREVENDO RESULTADO NA TABELA
            $i = 0;
            foreach($lista_clientes as $cliente){ ?>
                <tr>
                    <th scope="row"><?php echo $i; ?></th>
                    <td><?php echo $cliente->getCodigo(); ?></td>
                    <td><?php echo $cliente->getNome(); ?></td>
                    <td><?php echo $cliente->getCpf(); ?></td>
                    <td><?php echo $cliente->getTelefone(); ?></td>
                    <td><?php echo $cliente->getRg(); ?></td>
                    <td>
                        <button id="btnDetalhes" type="button" class="btn btn-secondary" data-toggle="modal" data-target="#modalDetalhes<?php echo $cliente->getCodigo(); ?>" data-placement="top" title="Detalhes">
                            <span class="fas fa-align-justify"></span>
                        </button>
                        <button id="btnEditar" type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalEditar<?php echo $cliente->getCodigo(); ?>" data-placement="top" title="Editar">
                            <span class="fas fa-edit"></span>
                        </button>
                        <button id="btnExcluir" type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalExcluir<?php echo $cliente->getCodigo(); ?>" data-placement="top" title="Excluir">
                            <span class="fas fa-eraser"></span>
                        </button>
                    </td>
                </tr>
                <!-- Modal Detalhes -->
                <div class="modal fade" id="modalDetalhes<?php echo $cliente->getCodigo(); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Detalhes</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <?php include("form_cliente.php"); ?>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        </div>
                        </div>
                    </div>
                </div>
                <!-- Modal Editar -->
                <div class="modal fade" id="modalEditar<?php echo $cliente->getCodigo(); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Editar</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <?php include("form_cliente.php"); ?>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        </div>
                        </div>
                    </div>
                </div>
        <?php 
                //CONTADOR DE LISTA
                $i = $i + 1;    
            }  
        ?>
            </tbody>
        </table>
    </div>
</div>
<br>