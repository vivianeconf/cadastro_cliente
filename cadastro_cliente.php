<?php

$estados = array("Rio Grande do Sul", "Santa Catarina", "São Paulo", "Rio de Janeiro", "Mato Grosso do Sul");
$cidades = array("Erechim", "Fernandópolis", " Porto Alegre", "São Paulo", "Rio de Janeiro", "Passo Fundo");

$erro = 0;
if (!empty($_POST)) {
                                                /** eh para gravar */
    $eh_para_limpar = isset($_POST["limpar"]) ? true : false; // -> true

    if($eh_para_limpar == false) { // Clicou no gravar

        // Validar se os campos EXISTEM
        $nome = !empty($_POST["nome"]) ? $_POST["nome"] : null;
        $cpf = !empty($_POST["cpf"]) ? $_POST["cpf"] : null;
        $cnpj = !empty($_POST["cnpj"]) ? $_POST["cnpj"] : null;
        $email = !empty ($_POST['email']) ? $_POST["email"] : null ;
        $telefone = !empty($_POST['telefone']) ? $_POST["telefone"] : null;
        $celular = !empty($_POST['celular']) ? $_POST["celular"] : null;
        $logradouro = !empty ($_POST['logradouro']) ? $_POST["logradouro"] : null;
        $numero = !empty ($_POST['numero']) ? $_POST["numero"] : null;
        $bairro = !empty ($_POST['bairro']) ? $_POST["bairro"] : null;
        $cep = !empty ($_POST['cep']) ? $_POST["cep"] : null;
        $estado = isset($_POST['estado']) ? $_POST['estado'] : null; 
        $cidade = isset($_POST['cidade']) ? $_POST['cidade'] : null;    

        // Validar a OBRIGATORIEDADE dos campos
        $mensagem = "";
        $mensagem_verde = "";
    
        if(empty($nome)) {
            $mensagem .= "Favor digitar o seu nome...<br>";
            $erro = 1;
        }
   
        if (empty($cpf) && empty($cnpj)) {
            $mensagem .= "Favor informe pelo menos um documento...<br>";
            $erro = 1;
        }

        if(!empty($cpf) && strlen ($cpf) != 11){
            $mensagem .= "Favor digitar todos os números do CPF...<br>";
            $erro = 1;
        }
        
        if(!empty($cnpj) && strlen ($cnpj) != 14){
            $mensagem .= "Favor digitar todos os números do CNPJ...<br>";
            $erro = 1;
        }            
        
        if(strlen($email)< 8 || strstr($email, '@')== FALSE){
            $mensagem .= "Favor digitar o e-mail corretamente...<br>";
            $erro = 1;
        }
    
        if (empty($telefone) && empty($celular)) {
            $mensagem .= "Favor informar um número de telefone ou celular...<br>";
            $erro = 1;
        }

        if(!empty($telefone) && strlen ($telefone) != 10){
            $mensagem .= "Favor digitar todos os números do telefone...<br>";
            $erro = 1;
        }
        
        if(!empty($celular) && strlen ($celular) != 11){
             $mensagem .= "Favor digitar todos os números do celular...<br>";
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
            $mensagem_verde .= "CADASTRO REALIZADO COM SUCESSO!<br>";
        }

    }
}

if ($erro == 0) {
    $nome= ""; $cpf = ""; $cnpj = ""; $email = ""; $telefone = ""; $celular = ""; $logradouro = ""; $numero = "";
    $cep = ""; $bairro = ""; $estado = ""; $cidade = "";    
}

require 'MainView.php';