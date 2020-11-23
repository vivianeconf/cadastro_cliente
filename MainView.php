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

                <label><?= isset($mensagem) ? $mensagem : "" ?></label>
                
                <strong>Nome: </strong>
                <input id="campoNome" type="text" name="nome" value="<?php echo "$nome"?>" placeholder="Informe um nome..."/><br><br>

                <strong>CPF: </strong>
                <input type="text" name="cpf" value="<?php echo "$cpf" ?>" placeholder="Informe um CPF..." size = "11" maxlength = "11" ><br><br>

                <strong>CNPJ: </strong>
                <input type="text" name="cnpj" value="<?php echo "$cnpj"?>" placeholder="Informe um CNPJ..." size = "14" maxlength = "14"><br><br>

                <strong>E-mail: </strong>
                <input type="email" name="email" value="<?php echo "$email"?>" placeholder="Informe um e-mail..." ><br><br>

                <strong>Telefone: </strong>
                <input type="text" name="telefone" value="<?php echo "$telefone"?>" placeholder="Informe um telefone..." size = "10" maxlength= "10"><br><br>

                <strong>Celular: </strong>
                <input type="text" name="celular" value="<?php echo "$celular"?>" placeholder="Informe o celular..." size= "11" maxlength= "11" ><br><br>

                <strong>Logradouro: </strong>
                <input type="text" name="logradouro" value="<?php echo "$logradouro" ?>" placeholder="Informe um logradouro..."><br><br>

                <strong>Número: </strong>
                <input type="text" name="numero" value="<?php echo "$numero"?>" placeholder="Informe um número..."><br><br>

                <strong>Bairro: </strong>
                <input type="text" name="bairro" value="<?php echo "$bairro" ?>" placeholder="Informe um bairro..."  > <br><br>

                <strong>CEP: </strong>
                <input type="text" name="cep" value="<?php echo "$cep" ?>" placeholder="Informe um CEP..." size= "8" maxlength= "8"><br><br>
            
                <strong>Estado: </strong>
                <select name="estado">
                    <option value="*"></option>
                    <?php foreach ($estados as $i => $estado) {?>
                        <option value="<?= $i ?>"> <?= $estado ?> </option>
                        <?php } ?>
                </select>
                <br><br>

                <strong>Cidade: </strong>
                <select name="cidade">
                    <option value="*"></option>
                    <?php foreach ($cidades as $i => $cidade ) {?>
                        <option value="<?= $i ?>"> <?= $cidade ?> </option>
                        <?php } ?>
                </select>
                <br>
                <br>
                
                <button type="submit" value="Submit">Salvar</button>
                <button type= "reset" value= "reset">Limpar dados</button>
                <br><br>
            </form>
        </div>    

    </body>
</html>
