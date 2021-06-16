// PESQUISA DE ENDEREÇOS
$("#searchCEP").click(function(){
    function limpa_formulário_cep() {
        // Limpa valores do formulário de cep.
        $("#rua").val("");
        $("#bairro").val("");
        $("#cidade").val("");
        $("#estado").val("");
    }

    //Nova variável "cep" somente com dígitos.
    var cep = $("#cep").val().replace(/\D/g, '');

    //Verifica se campo cep possui valor informado.
    if (cep != "") {

        //Expressão regular para validar o CEP.
        var validacep = /^[0-9]{8}$/;

        //Valida o formato do CEP.
        if(validacep.test(cep)) {

            //Preenche os campos com "..." enquanto consulta webservice.
            $("#rua").val("...");
            $("#bairro").val("...");
            $("#cidade").val("...");
            $("#estado").val("...");

            //Consulta o webservice viacep.com.br/
            $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                if (!("erro" in dados)) {
                    //Atualiza os campos com os valores da consulta.
                    $("#rua").val(dados.logradouro);
                    $("#bairro").val(dados.bairro);
                    $("#cidade").val(dados.localidade);
                    $("#estado").val(dados.uf);
                } //end if.
                else {
                    //CEP pesquisado não foi encontrado.
                    limpa_formulário_cep();
                    alert("CEP não encontrado.");
                }
            });
        } //end if.
        else {
            //cep é inválido.
            limpa_formulário_cep();
            alert("Formato de CEP inválido.");
        }
    } //end if.
    else {
        //cep sem valor, limpa formulário.
        limpa_formulário_cep();
    }
});

//VALIDANDO SE CAMPOS ESTÃO PREENCHIDOS
(function() {
    'use strict';
    window.addEventListener('load', function() {
        // Pega todos os formulários que nós queremos aplicar estilos de validação Bootstrap personalizados.
        var forms = document.getElementsByClassName('needs-validation');
        // Faz um loop neles e evita o envio
        var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
            }
            form.classList.add('was-validated');
        }, false);
        });
    }, false);
})();

//ADICIONAR PRODUTOS NA LISTA DE VENDA
$("#addListaVenda").click(function(){
    function limpa_formulário_cep() {
        // Limpa valores do formulário de cep.
        $("#rua").val("");
        $("#bairro").val("");
        $("#cidade").val("");
        $("#estado").val("");
    }
});

//SELECIONAR MÉTODO DE PESQUISA DE CLIENTE NA VENDA
$("#pesquisarCliente").change(function() {
    if($(this).val() == "nome"){
        $('#cod_cliente').attr('readonly','');
        $('#cod_cliente').attr('placeholder','');
        $('#nome_cliente').removeAttr('readonly','');
        $('#nome_cliente').attr('placeholder','Pesquisar por nome');
    }
    else{
        $('#nome_cliente').attr('readonly','');
        $('#nome_cliente').attr('placeholder','');
        $('#cod_cliente').removeAttr('readonly','');
        $('#cod_cliente').attr('placeholder','Pesquisar por código');
    }
});

//SELECIONAR MÉTODO DE PESQUISA DE PRODUTO NA VENDA
$("#pesquisarProduto").change(function() {
    if($(this).val() == "descricao"){
        $('#codigo').attr('readonly','');
        $('#codigo').attr('placeholder','');
        $('#desc').removeAttr('readonly','');
        $('#desc').attr('placeholder','Pesquisar por descrição');
    }
    else{
        $('#desc').attr('readonly','');
        $('#desc').attr('placeholder','');
        $('#codigo').removeAttr('readonly','');
        $('#codigo').attr('placeholder','Pesquisar por código');
    }
});

//BOTAO DETALHES (LISTAS)
$('#btnDetalhes').click(function(){
    $('input').attr('readonly','');
    $('.btnSalvar').hide();
    $('.btnLimpar').hide();
    $('.btnPesquisar').hide();
});

//BOTAO EDITAR (LISTAS)
$('#btnEditar').click(function(){
    $('input').removeAttr('readonly','');
    $('#rua').attr('readonly','');
    $('#bairro').attr('readonly','');
    $('#cidade').attr('readonly','');
    $('#estado').attr('readonly','');
    $('.btnSalvar').show();
    $('.btnLimpar').show();
    $('.btnPesquisar').show();
});