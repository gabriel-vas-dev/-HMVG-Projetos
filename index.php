<?php

if (isset($_POST['submit'])) {
  
    include_once('config.php');

    $selecionar = $_POST['selecionar'];
    $atuacao = $_POST['atuacao'];
    $nome = $_POST['nome'];
    $data_nascimento = $_POST['data_nascimento'];
    $cpf = $_POST['cpf'];
    $rg = $_POST['rg'];
    $o_emissor = $_POST['o_emissor'];
    $n_mae = $_POST['n_mae'];
    $n_pai = $_POST['n_pai'];
    $naturalidade = $_POST['naturalidade'];
    $endereco = $_POST['endereco'];
    $especialidade = $_POST['especialidade'];
    $n_conselho = $_POST['n_conselho'];
    $telefone = $_POST['telefone'];
    $e_mail = $_POST['e_mail'];

    $consulta = mysqli_query($conexao, "SELECT * FROM usuarios where cpf = '$cpf'");
    $linha = mysqli_fetch_assoc($consulta);

    if (empty($linha['cpf'])) {
        $result = mysqli_query($conexao, "INSERT INTO usuarios(selecionar,atuacao,nome,data_nascimento,cpf,rg,o_emissor,n_mae,n_pai,naturalidade,endereco,especialidade,n_conselho,telefone,e_mail)
         VALUES('$selecionar','$atuacao','$nome','$data_nascimento','$cpf','$rg','$o_emissor','$n_mae','$n_pai','$naturalidade','$endereco','$especialidade','$n_conselho','$telefone','$e_mail')");
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/index.css" rel="stylesheet" />
    <title>Formulário | HMVG</title>

</head>

<body>
    <div class="page-logo">

    </div>
    <div class="box">
        <form action="index.php" method="POST">
            <fieldset>
                <legend><strong>Formulário de cadastro de prestadores</strong></legend>
                <br>

                <p>Selecione: </p>

                <div class="form-check">
                    <input class="form-check-input" type="radio" id="criar" name="selecionar" value="criar" required>
                    <label class="form-check-label" for="criar"><b> CRIAR: Nunca tive cadastrado no MV do Metropolitano</b></label>
                </div>

                <input type="radio" id="atualizar" name="selecionar" value="atualizar" required>
                <label for="atualizar"><b>ATUALIZAR: Atualizar cadastro</b></label><br><br>

                <p><strong>Local de atuação:</strong></p><br>
                <div>
                <div class="inputBox">
                    <label for="atuacao" class="labelInput teste"><b>Local de Trabalho</b></label>
                    <select name="atuacao" id="atuacao" class="estados">
                        <option value="AC">UTI Geral</option>
                        <option value="AL">Enfermarias</option>
                        <option value="AP">Administração</option>
                        <option value="AM">Centro Cirurgico</option>
                        <option value="BA">Famacia/CAF</option>
                        <option value="CE">Almoxaifado</option>
                        <option value="DF">Recepções</option>
                        <option value="ES">SESMT</option>
                        <option value="GO">CME</option>
                        <option value="MA">Nutrição</option>
                        <option value="MT">Fisioterapia</option>
                        <option value="MS">Fonoaudiologia</option>
                        <option value="MG">Serviço social</option>
                        <option value="MG">Tecnologia da Informação</option>
                        <option value="PA">Outros</option>
                        </option><br><br><br><br><br>
                    </select>


                </div><br><br>
                </div>


                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required><BR>
                    <label for="nome" class="labelInput"><b>Nome completo</b></label>
                </div><br><br>

                <div class="input-group">
                    <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                    <input type="date" name="data_nascimento" id="data_nascimento" required>
                </div><br><br>

                <div class="inputBox">
                    <input type="number" name="cpf" id="cpf" class="inputUser" required>
                    <label for="cpf" class="labelInput"><b>CPF (Somente Numeros)</b></label>
                </div><br><br>

                <div class="inputBox">
                    <input type="number" name="rg" id="rg" class="inputUser" required>
                    <label for="rg" class="labelInput"><b>RG (Somente Numeros)</b></label>
                </div><br><br>

                <div class="inputBox">
                    <input type="text" name="o_emissor" id="o_emissor" class="inputUser" required>
                    <label for="o_emissor" class="labelInput"><b>Órgão Emissor e UF (Ex: SSP MT)</b></label>
                </div><br><br>

                <div class="inputBox">
                    <input type="text" name="n_mae" id="n_mae" class="inputUser" required>
                    <label for="n_mae" class="labelInput"><b>Nome da Mãe</b></label>
                </div><br><br>

                <div class="inputBox">
                    <input type="text" name="n_pai" id="n_pai" class="inputUser" required>
                    <label for="n_pai" class="labelInput"><b>Nome do Pai</b></label>
                </div> <br><br>

                <div class="inputBox">
                    <label for="naturalidade" class="labelInput teste"><b>Naturalidade (estado onde nasceu)</b></label>
                    <select name="naturalidade" id="naturalidade" class="estados">
                        <option value="AC">Acre-AC</option>
                        <option value="AL">Alagoas-AL</option>
                        <option value="AP">Amapá-AP</option>
                        <option value="AM">Amazonas-AM</option>
                        <option value="BA">Bahia-BA</option>
                        <option value="CE">Ceará-CE</option>
                        <option value="DF">Distrito Federal-DF</option>
                        <option value="ES">Espírito Santo-ES</option>
                        <option value="GO">Goiás-GO</option>
                        <option value="MA">Maranhão-MA</option>
                        <option value="MT">Mato Grosso-MT</option>
                        <option value="MS">Mato Grosso do Sul-MS</option>
                        <option value="MG">Minas Gerais-MG</option>
                        <option value="PA">Pará-PA</option>
                        <option value="PB">Paraíba- PB</option>
                        <option value="PR">Paraná-PR</option>
                        <option value="PE">Pernambuco-PE</option>
                        <option value="PI">Piauí-PI</option>
                        <option value="RJ">Rio de Janeiro-RJ</option>
                        <option value="RN">Rio Grande do Norte-RN</option>
                        <option value="RS">Rio Grande do Sul- RS</option>
                        <option value="RO">Rondônia-RO</option>
                        <option value="RR">Roraima-RR</option>
                        <option value="SC">Santa Catarina- SC</option>
                        <option value="SP">São Paulo- SP</option>
                        <option value="SE">Sergipe-SE</option>
                        <option value="TO">Tocantins-TO</option>
                    </select>


                </div><br><br>

                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput"><b>Endereço completo</b></label>
                </div> <br><br>

                <div class="inputBox">
                    <input type="text" name="especialidade" id="especialidade" class="inputUser" required>
                    <label for="especialidade" class="labelInput"><b>Especialidade</b></label>
                </div><br><br>

                <div class="inputBox">
                    <input type="number" name="n_conselho" id="n_conselho" class="inputUser" required>
                    <label for="n_conselho" class="labelInput"><b>Número do conselho (Somente Numeros)</b></label>
                </div><br><br>

                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput"><b>Telefone para contato (Somente Numeros)</b></label>
                </div><br><br>

                <div class="inputBox">
                    <input type="email" name="e_mail" id="e_mail" class="inputUser" required>
                    <label for="e_mail" class="labelInput"><b>Informe o e-mail para envio de suas credenciais</b></label>
                </div><br><br>

                <input type="submit" name="submit" id="submit" onclick="msg()">
            </fieldset>
        </form>
        <!-- <script>
            function msg() {
                alert("Cadastro enviado com sucesso!!!");
            }
        </script> -->
    </div>
</body>
</html>