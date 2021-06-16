<form action="../cadastro_pessoa.php" method="post" class="needs-validation" novalidate>
    <input type="hidden" name="tipo_cadastro" id="tipo_cadastro" value="Cliente"/>
    <fieldset class="border p-5">
        <legend class="w-auto">Dados pessoais</legend>
        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="nome" class="form-check-label text-muted">Nome: </label><br>
                    <input type="text" class="form-control form-control-lg" name="nome" id="nome" placeholder="Nome completo" value="<?php echo $cliente->getNome(); ?>" required/>
                    <div class="invalid-feedback">
                        Por favor, informe um nome.
                    </div>
                </div>
                <div class="col">
                <label for="tel" class="form-check-label text-muted">Telefone: </label><br>
                    <input type="tel" class="form-control form-control-lg" name="tel" id="tel" placeholder="Somente os números" value="<?php echo $cliente->getTelefone(); ?>" required/>
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
                    <input type="text" class="form-control form-control-lg" name="cpf" id="cpf" placeholder="Somente os números" value="<?php echo $cliente->getCpf(); ?>" required/>
                    <div class="invalid-feedback">
                        Por favor, informe um cpf válido.
                    </div>
                </div>
                <div class="col">
                    <label for="rg" class="form-check-label text-muted">RG: </label><br>
                    <input type="text" class="form-control form-control-lg" name="rg" id="rg" placeholder="Somente os números" value="<?php echo $cliente->getCpf(); ?>" required/>
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
                    <input type="text" class="form-control" name="cep" id="cep" placeholder="Digite o CEP" value="<?php echo $cliente->getEndereco()->getCep(); ?>" required/>
                    <div class="invalid-feedback">
                        Por favor, informe um CEP válido.
                    </div>
                </div>
                <div class="col">
                    <br>
                    <button type="button" id="searchCEP" class="btn btn-primary btn-lg fas fa-search btnPesquisar"></button>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="rua" class="form-check-label text-muted">Rua: </label><br>
                    <input type="text" class="form-control form-control-lg" name="rua" id="rua" value="<?php echo $cliente->getEndereco()->getRua(); ?>" readonly required/>
                </div>
                <div class="col">
                    <label for="numero" class="form-check-label text-muted">Numero: </label><br>
                    <input type="number" class="form-control form-control-lg" name="numero" id="numero" value="<?php echo $cliente->getEndereco()->getNumero(); ?>" required/>
                    <div class="invalid-feedback">
                        Por favor, informe o número do endereço informado.
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="bairro" class="form-check-label text-muted">Bairro: </label><br>
            <input type="text" class="form-control form-control-lg" name="bairro" id="bairro" value="<?php echo $cliente->getEndereco()->getBairro(); ?>" readonly required/>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="cidade" class="form-check-label text-muted">Cidade: </label><br>
                    <input type="text" class="form-control form-control-lg" name="cidade" id="cidade" value="<?php echo $cliente->getEndereco()->getCidade(); ?>" readonly required/>
                </div>
                <div class="col">
                    <label for="estado" class="form-check-label text-muted">Estado: </label><br>
                    <input type="text" class="form-control form-control-lg" name="estado" id="estado" value="<?php echo $cliente->getEndereco()->getEstado(); ?>" readonly required/>
                </div>
            </div>
        </div>
    </fieldset>

    <br>
    <button type="button" class="btn btn-primary btnSalvar" data-toggle="modal" data-target="#modalCadastro">Salvar</button>
    <input type="reset" class="btn btn-secondary btnLimpar" value="Limpar">

    <!-- Modal Confirmação -->
    <div class="modal fade" id="modalCadastro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Deseja continuar?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Você deseja estar alterando os dados deste cliente?
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