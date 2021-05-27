            <form action="php/cadastro.php" method="post">
                <div class="form-group text-center">
                    <h2>Cadastrar novo funcionário</h2>
                    <small class="form-text text-muted">Cadastre um novo funcionário para acessar o sistema.</small>
                </div>
                <fieldset class="border p-5">
                    <legend class="w-auto">Dados pessoais</legend>
                    <div class="form-group">
                        <label for="name" class="form-check-label text-muted">Nome: </label><br>
                        <input type="text" class="form-control form-control-lg is-invalid" name="name" id="name" placeholder="Nome completo" required/>
                        <div class="invalid-feedback">
                            Campo obrigatório
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="cpf" class="form-check-label text-muted">CPF: </label><br>
                        <input type="text" class="form-control form-control-lg is-invalid" name="cpf" id="cpf" placeholder="Somente os números" required/>
                        <div class="invalid-feedback">
                            Campo obrigatório
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="rg" class="form-check-label text-muted">RG: </label><br>
                        <input type="text" class="form-control form-control-lg is-valid" name="rg" id="rg" placeholder="Somente os números" required/>
                        <div class="valid-feedback">
                            Tudo OK
                        </div>
                    </div>
                </fieldset>
                
                <fieldset class="border p-5">
                    <legend class="w-auto">Dados residênciais</legend>
                    <div class="form-group">
                        <label for="cep" class="form-check-label text-muted">CEP: </label><br>
                        <input type="text" class="form-control form-control-lg" name="cep" id="cep" placeholder="Digite o CEP" required/>
                        <div class="invalid-feedback">
                            Campo obrigatório
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="rua" class="form-check-label text-muted">Rua: </label><br>
                        <input type="text" class="form-control form-control-lg" name="rua" id="rua" readonly required/>
                        <div class="invalid-feedback">
                            Campo obrigatório
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="numero" class="form-check-label text-muted">Numero: </label><br>
                        <input type="text" class="form-control form-control-lg" name="numero" id="numero" required/>
                        <div class="invalid-feedback">
                            Campo obrigatório
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="numero" class="form-check-label text-muted">Bairro: </label><br>
                        <input type="text" class="form-control form-control-lg" name="numero" id="numero" readonly required/>
                        <div class="invalid-feedback">
                            Campo obrigatório
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="cidade" class="form-check-label text-muted">Cidade: </label><br>
                        <input type="text" class="form-control form-control-lg" name="cidade" id="cidade" readonly required/>
                        <div class="invalid-feedback">
                            Campo obrigatório
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="estado" class="form-check-label text-muted">Estado: </label><br>
                        <input type="text" class="form-control form-control-lg" name="estado" id="estado" readonly required/>
                        <div class="invalid-feedback">
                            Campo obrigatório
                        </div>
                    </div>
                </fieldset>

                <fieldset class="border p-5">
                    <legend class="w-auto">Dados do sistema</legend>
                <div class="form-group">
                    <label for="username" class="form-check-label text-muted">Usuário: </label><br>
                    <input type="text" class="form-control form-control-lg" name="username" id="username" placeholder="Login" required/>
                    <div class="invalid-feedback">
                        Campo obrigatório
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="form-check-label text-muted">Senha: </label><br>
                    <input type="password" class="form-control form-control-lg" name="password" id="password" placeholder="Senha" required/>
                    <div class="invalid-feedback">
                        Campo obrigatório
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="form-check-label text-muted">Repetir senha: </label><br>
                    <input type="password" class="form-control form-control-lg" name="password" id="password" placeholder="Repita a senha" required/>
                    <div class="invalid-feedback">
                        Campo obrigatório
                    </div>
                </div>
                </fieldset>
                <?php echo $alert; ?>
                <br>
                <input type="submit" class="btn btn-primary" value="Cadastrar Funcionário">
                <input type="reset" class="btn btn-secondary" value="Limpar">
            </form>
            <br><br>