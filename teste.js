  
// Quando a página é carregada, ocultamos os dois campos: cpf e cnpj.
$(document).ready(function () {
    $('#cpf').hide();
    $('#cnpj').hide();
});

// Quando o tipo for selecionado, mostramos o campo adequado
$('#tipo').change(function (e) { 
    e.preventDefault();

    var tipoSelecionado = $(this).val();
    console.log("O tipo selecionado foi: " + tipoSelecionado);
    if (tipoSelecionado == 1) {
        $('#cnpj').hide();
        $('#cpf').show();
    } else if (tipoSelecionado == 2) {
        $('#cpf').hide();
        $('#cnpj').show();
    } else {
        $('#cpf').hide();
        $('#cnpj').hide();        
        alert("Você precisa selecionar alguma coisa!");
    }
});

// Quando o botão for pressionado, enviaremos um ajax para o PHP
$('submit').click(function (e) { 
    e.preventDefault();

    var dadosDoCliente = {
        "tipo": $('#tipo').val(),
        "cpf": $('#cpf').val(),
        "cnpj": $('#cnpj').val()
    };

    $.ajax({
        type: "post",
        url: "cadastro_cliente.php",
        dataType: "json",
        data: dadosDoCliente
    });    
});


