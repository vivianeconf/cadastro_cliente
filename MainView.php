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
                <label class= "verde"><?= isset($mensagem_verde) ? $mensagem_verde : "" ?></label>

                <strong>Nome </strong><br>
                <input id="campoNome" type="text" name="nome" value="<?php echo "$nome"?>" placeholder="Informe um nome..."/><br><br>

                <strong>CPF </strong> <br>
                <input type="text" name="cpf" value="<?php echo "$cpf" ?>" placeholder="Informe o CPF..." size = "11" maxlength = "11" ><br><br>

                <strong>CNPJ </strong> <br>
                <input type="text" name="cnpj" value="<?php echo "$cnpj" ?>" placeholder="Informe o CNPJ..." size = "14" maxlength = "14" ><br><br>

                <strong>E-mail </strong><br>
                <input type="email" name="email" value="<?php echo "$email"?>" placeholder="Informe um e-mail..." ><br><br>

                <strong>Telefone </strong><br>
                <input type="text" name="telefone" value="<?php echo "$telefone"?>" placeholder="Informe seu telefone..." size = "8" maxlength= "8"><br><br>

                <strong>Celular </strong><br>
                <input type="text" name="celular" value="<?php echo "$celular"?>" placeholder="Informe seu celular..." size = "9" maxlength= "9"><br><br>

                <strong>Logradouro </strong><br>
                <input type="text" name="logradouro" value="<?php echo "$logradouro" ?>" placeholder="Informe um logradouro..."><br><br>

                <strong>Número </strong><br>
                <input type="text" name="numero" value="<?php echo "$numero"?>" placeholder="Informe um número..."><br><br>

                <strong>Bairro </strong><br>
                <input type="text" name="bairro" value="<?php echo "$bairro" ?>" placeholder="Informe um bairro..."  > <br><br>

                <strong>CEP </strong><br>
                <input type="text" name="cep" value="<?php echo "$cep" ?>" placeholder="Informe um CEP..." size= "8" maxlength= "8"><br><br>
            
                <strong>Estado </strong><br>
                <select name="estado">
                    <option value="*">Escolha o estado</option>
                    <?php foreach ($estados as $i => $estado) {?>
                        <option value="<?= $i ?>"> <?= $estado ?> </option>
                        <?php } ?>
                </select>
                <br><br>

                <strong>Cidade </strong><br>
                <select name="cidade">
                    <option value="*">Escolha a cidade</option>
                    <?php foreach ($cidades as $i => $cidade ) {?>
                        <option value="<?= $i ?>"> <?= $cidade ?> </option>
                        <?php } ?>
                </select>
                <br><br>
                <button  type="submit" value="Submit" class="salvar">Salvar</button>
                <button type= "submit" name="limpar" class="limpar">Limpar</button>
                <br><br>
            </form>
        </div>    

    </body>
</html>
