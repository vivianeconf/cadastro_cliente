<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Cadastro de Cliente</title>
<link rel="stylesheet" href="style.css">
</head>
    <body>
        <div>
            <h2>Cadastro de cliente</h2>

            <form action="cadastro_cliente.php" method="post" >

                <label class= "vermelho"><?= isset($mensagem) ? $mensagem : "" ?></label>

                <strong>Nome </strong><br>
                <input id="nome" type="text" name="nome" value="<?php echo "$nome"?>" placeholder="Informe um nome..."/><br><br>

                <strong>Documento </strong> <br>
                <select id="documento" name="documento">
                    <option value="*">Selecione seu documento</option>
                    <option value="1">CPF</option>
                    <option value="2">CNPJ</option>
                </select>

                <input type="text" id="cpf" name="cpf" value="<?php echo "$cpf" ?>" placeholder="Informe o CPF..." size = "11" maxlength = "11" >

                <input type="text" id="cnpj" name="cnpj" value="<?php echo "$cnpj" ?>" placeholder="Informe o CNPJ..." size = "14" maxlength = "14" ><br><br>

                <strong>E-mail </strong><br>
                <input type="email" id="email" name="email" value="<?php echo "$email"?>" placeholder="Informe um e-mail..." ><br><br>

                <strong>Telefone </strong> <br>
                <select id="telefone" name="telefone">
                    <option value="*">Selecione o tipo de telefone</option>
                    <option value="1">Telefone fixo</option>
                    <option value="2">Celular</option>
                </select>
                
                <input type="text" id="telefone_fixo" name="telefone_fixo" value="<?php echo "$telefone_fixo"?>" placeholder="Informe seu telefone fixo..." size = "10" maxlength= "10">

                <input type="text" id="celular" name="celular" value="<?php echo "$celular"?>" placeholder="Informe seu celular..." size = "11" maxlength= "11"><br><br>

                <strong>Logradouro </strong><br>
                <input type="text" id="logradouro" name="logradouro" value="<?php echo "$logradouro" ?>" placeholder="Informe um logradouro..."><br><br>

                <strong>Número </strong><br>
                <input type="text" id="numero" name="numero" value="<?php echo "$numero"?>" placeholder="Informe um número..."><br><br>

                <strong>Bairro </strong><br>
                <input type="text" id="bairro" name="bairro" value="<?php echo "$bairro" ?>" placeholder="Informe um bairro..."  > <br><br>

                <strong>CEP </strong><br>
                <input type="text" id="cep" name="cep" value="<?php echo "$cep" ?>" placeholder="Informe um CEP..." size= "8" maxlength= "8"><br><br>
            
                <strong>Estado </strong><br>
                <select id="estado" name="estado">
                    <option value="*">Escolha o estado</option>
                    <?php foreach ($estados as $i => $estado) {?>
                        <option value="<?= $i ?>"> <?= $estado ?> </option>
                        <?php } ?>
                </select>
                <br><br>

                <strong>Cidade </strong><br>
                <select id="cidade" name="cidade">
                    <option value="*">Escolha a cidade</option>
                    <?php foreach ($cidades as $i => $cidade ) {?>
                        <option value="<?= $i ?>"> <?= $cidade ?> </option>
                        <?php } ?>
                </select>
                <br><br>
                <button  type="submit" value="Submit" class="salvar" id="cadastrar" >Salvar</button>
                <button type= "submit" name="limpar" class="limpar" >Limpar</button>
                <br><br>
            </form>
        </div>    

        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>    
        <script src="teste.js"></script>

    </body>
</html>
