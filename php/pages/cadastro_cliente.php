<!--PÁGINA - CADASTRO DE FUNCIONÁRIO-->
<?php
    $result_cad = $_GET["result_cad"];

    if($result_cad != ''){
        if($result_cad == 'S'){
            $result = "Cadastro efetuado com sucesso!";
            $alert = "<div class=\"alert alert-success\" role=\"alert\">{$result}</h1></div>";
        }
        else {
            $result = "Erro de cadastro! Verifique com o administrador do sistema.";
            $alert = "<div class=\"alert alert-danger\" role=\"alert\">{$result}</h1></div>";
        }
    }
?>

<form action="../cadastro_pessoa.php" method="post" class="needs-validation" novalidate>
    <input type="hidden" name="tipo_cadastro" id="tipo_cadastro" value="Cliente"/>
    <div class="form-group text-center">
        <h2>Cadastrar novo cliente</h2>
        <small class="form-text text-muted">Cadastre um novo cliente para ser registrado no sistema.</small><br>
        <?php echo $alert; ?>
    </div>
    <fieldset class="border p-5">
        <legend class="w-auto">Dados pessoais</legend>
        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="nome" class="form-check-label text-muted">Nome: </label><br>
                    <input type="text" class="form-control form-control-lg" name="nome" id="nome" placeholder="Nome completo" required/>
                    <div class="invalid-feedback">
                        Por favor, informe um nome.
                    </div>
                </div>
                <div class="col">
                <label for="tel" class="form-check-label text-muted">Telefone: </label><br>
                    <input type="tel" class="form-control form-control-lg" name="tel" id="tel" placeholder="Somente os números" required/>
                    <div class="invalid-feedback">
                        Por favor, informe um telefone.
                    </div>
                </div>
            </div>
            
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="cpf" class="form-check-label text-muted">CPF: </label><br>
                    <input type="text" class="form-control form-control-lg" name="cpf" id="cpf" placeholder="Somente os números" required/>
                    <div class="invalid-feedback">
                        Por favor, informe um cpf válido.
                    </div>
                </div>
                <div class="col">
                    <label for="rg" class="form-check-label text-muted">RG: </label><br>
                    <input type="text" class="form-control form-control-lg" name="rg" id="rg" placeholder="Somente os números" required/>
                    <div class="invalid-feedback">
                        Por favor, informe um rg válido.
                    </div>
                </div>
            </div>
        </div>
    </fieldset>
    
    <fieldset class="border p-5">
        <legend class="w-auto">Dados residênciais</legend>
        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="cep" class="form-check-label text-muted">CEP: </label><br>
                    <input type="text" class="form-control" name="cep" id="cep" placeholder="Digite o CEP" required/>
                    <div class="invalid-feedback">
                        Por favor, informe um CEP válido.
                    </div>
                </div>
                <div class="col">
                    <br>
                    <button type="button" id="searchCEP" class="btn btn-primary btn-lg fas fa-search"></button>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="rua" class="form-check-label text-muted">Rua: </label><br>
                    <input type="text" class="form-control form-control-lg" name="rua" id="rua" readonly required/>
                </div>
                <div class="col">
                    <label for="numero" class="form-check-label text-muted">Numero: </label><br>
                    <input type="number" class="form-control form-control-lg" name="numero" id="numero" required/>
                    <div class="invalid-feedback">
                        Por favor, informe o número do endereço informado.
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="bairro" class="form-check-label text-muted">Bairro: </label><br>
            <input type="text" class="form-control form-control-lg" name="bairro" id="bairro" readonly required/>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="cidade" class="form-check-label text-muted">Cidade: </label><br>
                    <input type="text" class="form-control form-control-lg" name="cidade" id="cidade" readonly required/>
                </div>
                <div class="col">
                    <label for="estado" class="form-check-label text-muted">Estado: </label><br>
                    <input type="text" class="form-control form-control-lg" name="estado" id="estado" readonly required/>
                </div>
            </div>
        </div>
    </fieldset>

    <br>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalCadastro">Cadastrar Cliente</button>
    <input type="reset" class="btn btn-secondary" value="Limpar">

    <!-- Modal Confirmação -->
    <div class="modal fade" id="modalCadastro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Deseja continuar?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Você deseja estar cadastrando este cliente?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
                <input type="submit" class="btn btn-primary" value="Sim">
            </div>
            </div>
        </div>
    </div>
</form>

<!-- Modal Resultado Cadastro -->
<div class="modal fade" id="<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"><?php echo $result; ?></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
        </div>
        </div>
    </div>
</div>
<br><br>