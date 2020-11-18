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

            <form action="cadastro_cliente.php" method="post">

                <?php if ($erro == 1) { ?>
                    <label><?= $mensagemErro ?></label>
                <?php } ?>

                <p class= "trick">Nome: <?p>
                <input id="campoNome" type="text" name="nome" value="<?= $nome ?>" placeholder="Informe um nome...">

                <p class= "trick">CPF: <?p>
                <input type="text" name="cpf" value="<?= $cpf ?>" placeholder="Informe um CPF..." >

                <p class= "trick">CNPJ: <?p>
                <input type="text" name="cnpj" value="<?= $cnpj ?>" placeholder="Informe um CNPJ...">

                <p class= "trick">E-mail: <?p>
                <input type="email" name="email" value="<?= $email ?>" placeholder="Informe um e-mail..." >

                <p class= "trick">Telefone: <?p>
                <input type="text" name="telefone" value="<?= $telefone ?>" placeholder="Informe um telefone..." >

                <p class= "trick">Logradouro: <?p>
                <input type="text" name="logradouro" value="<?= $logradouro ?>" placeholder="Informe um logradouro...">

                <p class= "trick">Número: <?p>
                <input type="text" name="numero" value="<?= $numero ?>" placeholder="Informe um número...">

                <p class= "trick">Bairro: <?p>
                <input type="text" name="bairro" value="<?= $bairro ?>" placeholder="Informe um bairro..."  > 

                <p class= "trick">CEP: <?p>
                <input type="text" name="cep" value="<?= $cep ?>" placeholder="Informe um CEP...">
            
                <p class= "trick">Estado: <?p>
                <select name="estado">
                    <option value="*"></option>
                    <?php foreach ($estados as $i => $estado) {?>
                        <option value="<?= $i ?>"> <?= $estado ?> </option>
                        <?php } ?>
                </select>

                <p class= "trick">Cidade: <?p>
                <select name="cidade">
                    <option value="*"></option>
                    <?php foreach ($cidades as $i => $cidade ) {?>
                        <option value="<?= $i ?>"> <?= $cidade ?> </option>
                        <?php } ?>
                </select>
                <br>
                <br>
                
                <button type="submit">Salvar</button>
            </form>
        </div>    

    </body>
</html>
