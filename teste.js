$(document).ready(function () {
    $('#cpf').hide();
    $('#cnpj').hide();
});

$('#documento').change(function (e) { 
    e.preventDefault();

    var documento_selecionado = $(this).val();
    if (documento_selecionado == 1) {
        $('#cnpj').hide();
        $('#cpf').show();
    } else if (documento_selecionado == 2) {
        $('#cpf').hide();
        $('#cnpj').show();
    }
});

$(document).ready(function () {
    $('#telefone_fixo').hide();
    $('#celular').hide();
});

$('#telefone').change(function (e) { 
    e.preventDefault();

    var telefone_selecionado = $(this).val();
    if (telefone_selecionado == 1) {
        $('#celular').hide();
        $('#telefone_fixo').show();
    } else if (telefone_selecionado == 2) {
        $('#telefone_fixo').hide();
        $('#celular').show();
    }
});

$('#salvar').click(function (e) { 
    e.preventDefault();

    var dadosDoCliente = {
        "nome": $('#nome').val(),
        "documento": $('#documento').val(),
        "cpf": $('#cpf').val(),
        "cnpj": $('#cnpj').val(),
        "email": $('#email').val(),
        "telefone": $('#telefone').val(),
        "telefone_fixo": $('#telefone_fixo').val(),
        "celular": $('#celular').val(),
        "logradouro": $('#logradouro').val(),
        "numero": $('#numero').val(),
        "bairro": $('#bairro').val(),
        "cep": $('#cep').val(),
        "estado": $('#estado').val(),
        "cidade": $('#cidade').val()
    };

    $.ajax({
        type: "post",
        url: "cadastro_cliente.php",
        dataType: "json",
        data: dadosDoCliente,
        success: function (respostaDoPHP) {
            alert(cadastro_cliente.mensagem);
        }
    })
});

$('#cadastrar').click(function(){
    var nome = $("#nome").val();
    var documento = $("#documento").val();
    var email = $("#email").val();
    var telefone = $("#telefone").val();
    var logradouro = $("#logradouro").val();
    var numero = $("#numero").val();
    var cep = $("#cep").val();
    var bairro = $("#bairro").val();
    var estado = $("#estado").val();
    var cidade = $("#cidade").val();

    if(nome == "" || documento == "" || email == "" || telefone == "" || logradouro == "" || numero == "" || 
    cep == "" || bairro == "" || estado == "" || cidade == ""){
        alert("Preencha todos os campos!");
        return true;
    }else{
        alert("Cadastro realizado com sucesso!!");
    }
});