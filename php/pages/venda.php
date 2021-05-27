<div class="row">
    <div class="col">
    <form action="php/cad_venda.php" method="post">
        <div class="form-group text-center">
            <h2>Nova Venda</h2>
            <small class="form-text text-muted">Insira os dados de uma nova venda.</small>
        </div>
        <fieldset class="border p-5">
            <legend class="w-auto">Dados do Cliente</legend>
            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label for="nome_cliente" class="form-check-label text-muted">Nome: </label><br>
                        <input type="text" class="form-control form-control-lg" name="nome_cliente" id="nome_cliente" placeholder="Pesquisar por nome" required/>
                    </div>
                    <div class="col">
                        <label for="cod_cliente" class="form-check-label text-muted">Código: </label><br>
                        <input type="text" class="form-control form-control-lg" name="cod_cliente" id="cod_cliente" placeholder="Pesquisar por código" required/>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="cpf_cliente" class="form-check-label text-muted">CPF: </label><br>
                        <input type="text" class="form-control form-control-lg" name="cpf_cliente" id="cpf_cliente" required disabled/>
                    </div>
                    <div class="col">
                        <label for="tel_cliente" class="form-check-label text-muted">Telefone: </label><br>
                        <input type="text" class="form-control form-control-lg" name="tel_cliente" id="tel_cliente" required disabled/>
                    </div>
                </div>
            </div>
        </fieldset>
        <fieldset class="border p-5">
            <legend class="w-auto">Item de Venda</legend>
            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label for="desc" class="form-check-label text-muted">Descrição: </label><br>
                        <input type="text" class="form-control form-control-lg" name="desc" id="desc" placeholder="Pesquisar pela descrição" required/>
                    </div>
                    <div class="col">
                        <label for="codigo" class="form-check-label text-muted">Código: </label><br>
                        <input type="text" class="form-control form-control-lg" name="codigo" id="codigo" placeholder="Pesquisar por código" required/>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="qtd_prod_atual" class="form-check-label text-muted">Quantidade Atual: </label><br>
                        <input type="text" class="form-control form-control-lg" name="qtd_prod_atual" id="qtd_prod_atual" required disabled/>
                    </div>
                    <div class="col">
                        <label for="est_max" class="form-check-label text-muted">Estoque Máximo: </label><br>
                        <input type="text" class="form-control form-control-lg" name="est_max" id="est_max" required disabled/>
                    </div>
                    <div class="col">
                        <label for="est_min" class="form-check-label text-muted">Estoque Mínimo: </label><br>
                        <input type="text" class="form-control form-control-lg" name="est_min" id="est_min" required disabled/>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="qtd_prod" class="form-check-label text-muted">Quantidade: </label><br>
                        <input type="text" class="form-control form-control-lg" name="qtd_prod" id="qtd_prod" required/>
                    </div>
                    <div class="col">
                        <label for="vl_unit" class="form-check-label text-muted">Valor Unitário: </label><br>
                        <input type="text" class="form-control form-control-lg" name="vl_unit" id="vl_unit" required disabled/>
                    </div>
                    <div class="col">
                        <label for="vl_total" class="form-check-label text-muted">Valor Total: </label><br>
                        <input type="text" class="form-control form-control-lg" name="vl_total" id="vl_total" required disabled/>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <button class="btn btn-success" onclick="">Adicionar Item</button>
                        <button class="btn btn-info" onclick="">Limpar</button>
                    </div>
                </div>
                <br><br>
                <div class="row">
                    <div class="col">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Código</th>
                                <th scope="col">Descrição</th>
                                <th scope="col">Quantidade</th>
                                <th scope="col">Valor Unitário</th>
                                <th scope="col">Valor Total</th>
                                <th scope="col">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <th scope="row">1</th>
                                <td>00013</td>
                                <td>Salmão</td>
                                <td>2 KG</td>
                                <td>R$ 50,00</td>
                                <td>R$ 100,00</td>
                                <td>
                                    <button type="button" class="btn btn-primary">
                                        <span class="fas fa-edit"></span>
                                    </button>
                                    <button type="button" class="btn btn-danger">
                                        <span class="fas fa-eraser"></span>
                                    </button>
                                </td>
                                </tr>
                                <tr>
                                <th scope="row">2</th>
                                <td>00114</td>
                                <td>Brahma Duplo Malte - 350ml</td>
                                <td>12 latas</td>
                                <td>R$ 3,00</td>
                                <td>R$ 36,00</td>
                                <td>
                                    <button type="button" class="btn btn-primary">
                                        <span class="fas fa-edit"></span>
                                    </button>
                                    <button type="button" class="btn btn-danger">
                                        <span class="fas fa-eraser"></span>
                                    </button>
                                </td>
                                </tr>
                                <tr>
                                <th scope="row">3</th>
                                <td>00200</td>
                                <td>Mouse USB - Multilaser</td>
                                <td>1 unidade</td>
                                <td>R$ 20,00</td>
                                <td>R$ 20,00</td>
                                <td>
                                    <button type="button" class="btn btn-primary">
                                        <span class="fas fa-edit"></span>
                                    </button>
                                    <button type="button" class="btn btn-danger">
                                        <span class="fas fa-eraser"></span>
                                    </button>
                                </td>
                                </tr>
                                <tr>
                                <th scope="row"></th>
                                <td></td>
                                <td></td>
                                <td></td>
                                <th>Valor da Compra</th>
                                <th style="color: red">R$ 156,00</th>
                                <td></td>
                                </tr>
                            </tbody>
                            </table>
                    </div>
                </div>
            </div>
        </fieldset>
        <br>
        <br>
        <div class="form-group text-center">
            <div class="row">
                <div class="col">
                    <input type="submit" class="btn btn-primary btn-lg" value="Confirmar Venda">
                    <input type="reset" class="btn btn-secondary btn-lg" value="Limpar">
                    <button type="cancel" class="btn btn-danger btn-lg" onclick="">Cancelar</button>
                </div>
            </div>
        </div>
    </form>
    </div>
</div>
