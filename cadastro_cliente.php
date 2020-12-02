<?php

$estados = array("Rio Grande do Sul", "Santa Catarina", "São Paulo", "Rio de Janeiro", "Mato Grosso do Sul");
$cidades = array("Erechim", "Fernandópolis", " Porto Alegre", "São Paulo", "Rio de Janeiro", "Passo Fundo", "Chapecó", 
"Caxias do Sul", "Pelotas", "Gramado", "Canoas", "Florianópolis", "Blumenau", "Itajaí", "Jundiaí",
"Ribeirão Preto", "Bauru", "Niterói", "Petrópolis", "Macaé", "Corumbá", "Campo Grande", "Bonito", "Ponta Porã");

$erro = 0;
if (!empty($_POST)) {
                                                
    $eh_para_limpar = isset($_POST["limpar"]) ? true : false;

    if($eh_para_limpar == false) {

        $nome = !empty($_POST["nome"]) ? $_POST["nome"] : null;
        $documento = !empty($_POST["documento"]) ? $_POST["documento"] : null;
        $cpf = !empty($_POST["cpf"]) ? $_POST["cpf"] : null;
        $cnpj = !empty($_POST["cnpj"]) ? $_POST["cnpj"] : null;
        $email = !empty ($_POST['email']) ? $_POST["email"] : null ;
        $telefone = !empty($_POST["telefone"]) ? $_POST["telefone"] : null;
        $telefone_fixo = !empty($_POST['telefone_fixo']) ? $_POST["telefone_fixo"] : null;
        $celular = !empty($_POST['celular']) ? $_POST["celular"] : null;
        $logradouro = !empty ($_POST['logradouro']) ? $_POST["logradouro"] : null;
        $numero = !empty ($_POST['numero']) ? $_POST["numero"] : null;
        $bairro = !empty ($_POST['bairro']) ? $_POST["bairro"] : null;
        $cep = !empty ($_POST['cep']) ? $_POST["cep"] : null;
        $estado = isset($_POST['estado']) ? $_POST['estado'] : null; 
        $cidade = isset($_POST['cidade']) ? $_POST['cidade'] : null; 
        
        
        $documento = !empty($cpf) ? $cpf : $cnpj;
        $telefone = !empty($telefone_fixo) ? $telefone_fixo : $celular;

        $mensagem = "";
    
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
    
        if (empty($telefone_fixo) && empty($celular)) {
            $mensagem .= "Favor informar um número de telefone fixo ou celular...<br>";
            $erro = 1;
        }

        if(!empty($telefone_fixo) && strlen ($telefone_fixo) != 10){
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

        echo json_encode(array(
            "erro" => $erro,
            "mensagem" => $mensagem
        ));
        return;
    }
}
if ($erro == 0) {
    $nome= ""; $cpf = ""; $cnpj = ""; $email = ""; $telefone_fixo = ""; $celular = ""; $logradouro = ""; 
    $numero = ""; $cep = ""; $bairro = ""; $estado = ""; $cidade = "";    
}

require 'MainView.php';