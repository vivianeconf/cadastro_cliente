<?php

$estados = array("Rio Grande do Sul", "Santa Catarina", "São Paulo", "Rio de Janeiro", "Mato Grosso do Sul");
$cidades = array("Erechim", "Fernandópolis", " Porto Alegre", "São Paulo", "Rio de Janeiro", "Passo Fundo");

$erro = 0;

if (!empty($_POST)) {
    
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $cnpj = $_POST['cnpj'] ;
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $logradouro = $_POST['logradouro'];
    $numero = $_POST['numero'];
    $bairro = $_POST['bairro'];
    $cep = $_POST['cep'];
    $cidade = isset($_POST['cidade']) ? $_POST['cidade'] : null;    

    $mensagemErro = "";
    if(empty($nome)){
        $mensagemErro .= "Favor digitar seu nome...<br>"; 
        $erro = 1;
    }
    if(strlen($email)< 8 || strstr($email, '@')== FALSE){
        $mensagemErro .= "Favor digitar o e-mail corretamente...<br>";
        $erro = 1;
    }
    if(empty($bairro)){
        $mensagemErro .= "Favor digitar seu bairro...<br>"; 
        $erro = 1;
    }
    if($cidade == '*'){
        $mensagemErro .= "Favor selecione sua cidade...<br>"; 
        $erro = 1;
    }
}

$nome= ""; $cpf = ""; $cnpj = ""; $email = ""; $telefone = ""; $logradouro = ""; $numero = "";
$cep = ""; $bairro = ""; $estado = ""; $cidade = "";



require 'MainView.php';
