<?php

$estados = array("Rio Grande do Sul", "Santa Catarina", "São Paulo", "Rio de Janeiro", "Mato Grosso do Sul");
$cidades = array("Erechim", "Fernandópolis", " Porto Alegre", "São Paulo", "Rio de Janeiro", "Passo Fundo");

$erro = 0;
session_start ();

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
    $estado = isset($_POST['estado']) ? $_POST['estado'] : null; 
    $cidade = isset($_POST['cidade']) ? $_POST['cidade'] : null;    

    $mensagemErro = "";
    $mensagemFinalizada = "";

    $_SESSION['nome']=$_POST['nome'];
    $_SESSION['cpf']=$_POST['cpf'];
    $_SESSION['cnpj']=$_POST['cnpj'];
    $_SESSION['email']=$_POST['email'];
    $_SESSION['telefone']=$_POST['telefone'];
    $_SESSION['logradouro']=$_POST['logradouro'];
    $_SESSION['numero']=$_POST['numero'];
    $_SESSION['bairro']=$_POST['bairro'];
    $_SESSION['cep']=$_POST['cep'];
    $_SESSION['estado']=$_POST['estado'];
    $_SESSION['cidade']=$_POST['cidade'];


    if(empty($nome)){
        $mensagemErro .= "Favor digitar seu nome...<br>"; 
        $erro = 1;
    }
    if(empty($cpf)){
        $mensagemErro .= "Favor digitar os 11 números do CPF...<br>";
        $erro = 1;
    }
    if(empty($cnpj) == 14){
        $mensagemErro .= "Favor digitar os 14 números do CNPJ...<br>";
        $erro = 1;
    }
    if(strlen($email)< 8 || strstr($email, '@')== FALSE){
        $mensagemErro .= "Favor digitar o e-mail corretamente...<br>";
        $erro = 1;
    }
    if(empty($logradouro)){
        $mensagemErro .= "Favor digitar o logradouro...<br>";
        $erro = 1;
    }
    if(empty($numero)){
        $mensagemErro .= "Favor digitar o número...<br>";
        $erro = 1;
    }
    if(empty($cep)){
        $mensagemErro .= "Favor digitar o cep...<br>";
        $erro = 1;
    }
    if(empty($bairro)){
        $mensagemErro .= "Favor digitar seu bairro...<br>"; 
        $erro = 1;
    }
    if($estado == '*'){
        $mensagemErro .= "Favor selecione seu estado...<br>"; 
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
