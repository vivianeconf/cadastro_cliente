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

$( "#formulario" ).submit(function(e ) {
    e.preventDefault();
    
    var nome = $('#PRIMEIRO_NOME').val(); // Viviane
    var documento = $('#documento').val(); // 1
    var cpf = $('#cpf').val(); // 0910910910
    var cnpj = $('#cnpj').val();
    var email = $('#email').val();
    var telefone = $('#telefone').val();
    var telefone_fixo = $('#telefone_fixo').val();
    var celular = $('#celular').val();
    var logradouro = $('#logradouro').val();
    var numero = $('#numero').val();
    var bairro = $('#bairro').val();
    var cep = $('#cep').val();
    var estado = $('#estado').val();
    var cidade = $('#cidade').val();

    if(nome == "" || documento == "" || email == "" || telefone == "" || logradouro == "" || numero == "" || 
    cep == "" || bairro == "" || estado == "" || cidade == ""){
        alert("Preencha todos os campos!");
        return true;
    }

    var usuarioDigitouEssasParada = {
        "nome": nome,
        "documento": documento,
        "cpf": cpf,
        "cnpj": cnpj,
        "email": email,
        "telefone": telefone,
        "telefone_fixo": telefone_fixo,
        "celular": celular,
        "logradouro": logradouro,
        "numero": numero,
        "bairro": bairro,
        "cep": cep,
        "estado": estado,
        "cidade": cidade
    };

    $.ajax({
        type: "post",
        url: "cadastro_cliente.php",
        dataType: "json",
        data: usuarioDigitouEssasParada,
        success: function (respostaDoPHP) { 
            // comunicou-se com sucesso com o backend
            var erro = respostaDoPHP["erro"];
            if (erro == 1) {
                alert(respostaDoPHP["mensagem"]);
            } else if (erro == 0) {
                alert("Cadastro realizado com sucesso!");
            }
        }
    });
});

$('#limpar').click(function(e){
    e.preventDefault();

    alert("Todos os campos preenchidos serão apagados.");
    $('#formulario')[0].reset();
});

$(document).ready(function() {
    var t = $('#tabela').DataTable(
        {'searching': false}
    );

        $("#formulario").submit(function(){
            t.row.add( [
                $('#PRIMEIRO_NOME').val(),
                $('#documento').val(),
                $('#email').val(),
                $('#telefone').val(),
                $('#cep').val(),
                $('#logradouro').val(),
                $('#numero').val(),
                $('#bairro').val(),
                $('#estado').val(),
                $('#cidade').val()
            ] ).draw( false );
        });
} );

$('#buscar_cep').click(function(e){
    e.preventDefault();

    var cep = $('#cep').val();

    $.ajax({
        type: "get",
        url: "http.php?cep=" + cep,
        dataType: "json",
        success: function (cep) {             
            $('#logradouro').val(cep.rua);
            $('#cidade').val(cep.cidade);
            $('#estado').val(cep.uf);
            $('#bairro').val(cep.distrito);
        }
    });
});