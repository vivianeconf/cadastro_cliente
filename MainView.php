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

            <form action="cadastro_cliente.php" method="post" id="formulario">

                <label class= "vermelho"><?= isset($mensagem) ? $mensagem : "" ?></label>

                <strong>Nome </strong><br>
                <input id="PRIMEIRO_NOME" type="text" name="nome" value="<?php echo "$nome"?>" placeholder="Informe um nome..."/><br><br>

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
                <button id="cadastrar" type="submit" value="Submit" class="salvar">Salvar</button>
                <button id="limpar" name="limpar" class="limpar" >Limpar</button>
                <br><br>
            </form>
        </div> 

            <table id="tabela" class="display">
                <h1>Tabela de cidades, estados e CEP disponíveis</h1>
                <button id="novo_registro">Adicione um novo registro</button>
                <thead>
                    <tr>
                        <th>Estado</th>
                        <th>Cidade</th>
                        <th>CEP</th>
                    </tr>
                </thead>
                <tbody>
            <tr>
                <td>Rio grande do Sul</td>
                <td>Erechim</td> 
                <td>99700-000</td>
            </tr>
            <tr>
                <td>Rio grande do Sul</td>
                <td>Passo Fundo</td>
                <td>99001-970</td>
            </tr>
            <tr>
                <td>Santa Catarina</td>
                <td>Chapecó</td>
                <td>89802-200</td>
            </tr>
            <tr>
                <td>Rio Grande do Sul</td>
                <td>Porto Alegre</td>
                <td>90020-180</td>
            </tr>
            <tr>
                <td>Rio Grande do Sul</td>
                <td>Caxias do Sul</td>
                <td>95010-002</td>
            </tr>
            <tr>
                <td>Rio Grande do Sul</td>
                <td>Pelotas</td>
                <td>96010-140</td>
            </tr>
            <tr>
                <td>Rio Grande do Sul</td>
                <td>Gramado</td>
                <td>95670-000</td>
            </tr>
            <tr>
                <td>Rio Grande do Sul</td>
                <td>Canoas</td>
                <td>92310-710</td>
            </tr>
            <tr>
                <td>Santa Catarina</td>
                <td>Florianópolis</td>
                <td>88015-710</td>
            </tr>
            <tr>
                <td>Santa Catarina</td>
                <td>Blumenau</td>
                <td>89010-001</td>
            </tr>
            <tr>
                <td>Santa Catarina</td>
                <td>Itajaí</td>
                <td>88303-001</td>
            </tr>
            <tr>
                <td>São Paulo</td>
                <td>São Paulo</td>
                <td>01034-902</td>
            </tr>
            <tr>
                <td>São Paulo</td>
                <td>Jundiaí</td>
                <td>13201-072</td>
            </tr>
            <tr>
                <td>São Paulo</td>
                <td>Fernandópolis</td>
                <td>15600-000</td>
            </tr>
            <tr>
                <td>São Paulo</td>
                <td>Ribeirão Preto</td>
                <td>14010-000</td>
            </tr>
            <tr>
                <td>São Paulo</td>
                <td>Bauru</td>
                <td>17010-250</td>
            </tr>
            <tr>
                <td>Rio de Janeiro</td>
                <td>Rio de Janeiro</td>
                <td>20040-900</td>
            </tr>
            <tr>
                <td>Rio de Janeiro</td>
                <td>Niterói</td>
                <td>24020-130</td>
            </tr>
            <tr>
                <td>Rio de Janeiro</td>
                <td>Petrópolis</td>
                <td>25620-971</td>
            </tr>
            <tr>
                <td>Rio de Janeiro</td>
                <td>Macaé</td>
                <td>27910-010</td>
            </tr>
            <tr>
                <td>Mato Grosso do Sul</td>
                <td>Corumbá</td>
                <td>79300-030</td>
            </tr>
            <tr>
                <td>Mato Grosso do Sul</td>
                <td>Campo Grande</td>
                <td>79002-190</td>
            </tr>
            <tr>
                <td>Mato Grosso do Sul</td>
                <td>Ponta Porã</td>
                <td>79904-648	</td>
            </tr>
            <tr>
                <td>Mato Grosso do Sul</td>
                <td>Bonito</td>
                <td>79290-000</td>
            </tr>
        </tbody>
            </table>

        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>    
        <script src="teste.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>


    </body>
</html>