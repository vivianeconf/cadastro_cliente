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
    $celular = $_POST['celular'];
    $logradouro = $_POST['logradouro'];
    $numero = $_POST['numero'];
    $bairro = $_POST['bairro'];
    $cep = $_POST['cep'];
    $estado = isset($_POST['estado']) ? $_POST['estado'] : null; 
    $cidade = isset($_POST['cidade']) ? $_POST['cidade'] : null;    

    $mensagem = "";

    if(empty($_POST["nome"])){
        $mensagem .= "Favor digitar seu nome...<br>"; 
        $erro = 1;
    }
    if(strlen($cpf)!= 11){
        $mensagem .= "Digite todos os campos do CPF<br>";
        $erro = 1;
    }
    if(strlen($cnpj)!= 14){
        $mensagem .= "Favor digitar os 14 números do CNPJ...<br>";
        $erro = 1;
    }

    if(strlen($email)< 8 || strstr($email, '@')== FALSE){
        $mensagem .= "Favor digitar o e-mail corretamente...<br>";
        $erro = 1;
    }
    if(strlen($telefone) != 10){
        $mensagem .= "Favor adicionar todos os 11 digitos do celular...<br>";
        $erro = 1;
    }
    if(strlen($celular) != 11){
        $mensagem .= "Favor adicionar todos os 11 digitos do celular...<br>";
        $erro = 1;
    }
    if(empty($logradouro)){
        $mensagem .= "Favor digitar o logradouro...<br>";
        $erro = 1;
    }
    if(empty($numero)){
        $mensagem .= "Favor digitar o número...<br>";
        $erro = 1;
    }
    if(empty($bairro)){
        $mensagem .= "Favor digitar seu bairro...<br>"; 
        $erro = 1;
    }
    if(strlen($cep) != 8){
        $mensagem .= "Favor digitar o cep...<br>";
        $erro = 1;
    }
    if($estado == '*'){
        $mensagem .= "Favor selecione seu estado...<br>"; 
        $erro = 1;
    }
    if($cidade == '*'){
        $mensagem .= "Favor selecione sua cidade...<br>"; 
        $erro = 1;
    }

    if ($erro == 0) {
        $mensagem = "CADASTRO REALIZADO COM SUCESSO!<br>";
    }
}

if ($erro == 0) {
    $nome= ""; $validarCpfouCnpj = ""; $cpf = ""; $cnpj = ""; $email = ""; $telefone = ""; $celular = ""; $logradouro = ""; $numero = "";
    $cep = ""; $bairro = ""; $estado = ""; $cidade = "";    
}

require 'MainView.php';