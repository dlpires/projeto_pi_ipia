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

<form action="../cadastro_produto.php" method="post" class="needs-validation" novalidate>
    <input type="hidden" name="tipo_cadastro" id="tipo_cadastro" value="novo_produto"/>
    <div class="form-group text-center">
        <h2>Cadastrar novo produto</h2>
        <small class="form-text text-muted">Cadastre um novo produto para ser registrado no sistema.</small><br>
        <?php echo $alert; ?>
    </div>
    <fieldset class="border p-5">
        <legend class="w-auto">Dados do produto</legend>
        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="desc_produto" class="form-check-label text-muted">Descrição: </label><br>
                    <input type="text" class="form-control form-control-lg" name="desc_produto" id="desc_produto" placeholder="Descrição do produto" required/>
                    <div class="invalid-feedback">
                        Por favor, informe a descrição do produto.
                    </div>
                </div>
                <div class="col">
                <label for="preco" class="form-check-label text-muted">Valor unitário: </label><br>
                    <input type="number" class="form-control form-control-lg" name="preco" id="preco" placeholder="Somente número" required/>
                    <div class="invalid-feedback">
                        Por favor, informe um preço.
                    </div>
                </div>
            </div>
            
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="qtd_inicial" class="form-check-label text-muted">Quantidade Inicial: </label><br>
                    <input type="number" class="form-control form-control-lg" name="qtd_inicial" id="qtd_inicial" placeholder="Quantidade inicial" required/>
                    <div class="invalid-feedback">
                        Por favor, informe a quantidade inicial.
                    </div>
                </div>
                <div class="col">
                    <label for="un_medida" class="form-check-label text-muted">Unidade de Medida: </label><br>
                    <select name="un_medida" id="un_medida" class="form-control form-control-lg">
                        <option value="unidades" selected>unidades</option>
                        <option value="kg">KG</option>
                        <option value="metros">metros</option>
                    </select>
                </div>
                <div class="col">
                    <label for="estoque_min" class="form-check-label text-muted">Estoque Mínimo: </label><br>
                    <input type="number" class="form-control form-control-lg" name="estoque_min" id="estoque_min" placeholder="Estoque mínimo" required/>
                    <div class="invalid-feedback">
                        Por favor, informe um número do estoque mínimo do produto.
                    </div>
                </div>
                <div class="col">
                    <label for="estoque_max" class="form-check-label text-muted">Estoque Máximo: </label><br>
                    <input type="number" class="form-control form-control-lg" name="estoque_max" id="estoque_max" placeholder="Estoque máximo" required/>
                    <div class="invalid-feedback">
                        Por favor, informe um número do estoque máximo do produto.
                    </div>
                </div>
            </div>
        </div>
    </fieldset>

    <br>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalCadastro">Cadastrar Produto</button>
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
                Você deseja estar cadastrando este produto?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
                <input type="submit" class="btn btn-primary" value="Sim">
            </div>
            </div>
        </div>
    </div>
</form>
<br><br>