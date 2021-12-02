<?php

if (isset($_POST['submit'])) {
    // echo($_POST['selecionar'] . "<br>");
    // echo($_POST['atuacao'] . "<br>");
    // echo($_POST['nome'] . "<br>");
    // echo($_POST['data_nascimento'] . "<br>");
    // echo($_POST['cpf'] . "<br>");
    // echo($_POST['rg'] . "<br>");
    // echo($_POST['o_emissor'] . "<br>");
    // echo($_POST['n_mae'] . "<br>");
    // echo($_POST['n_pai'] . "<br>");
    // echo($_POST['naturalidade'] . "<br>");
    // echo($_POST['endereco'] . "<br>");
    // echo($_POST['especialidade'] . "<br>");
    // echo($_POST['n_conselho'] . "<br>");
    // echo($_POST['telefone'] . "<br>");
    // echo($_POST['e_mail'] . "<br>");

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
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
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

                <p><strong>Local de atuação:</strong></p>
                <div>
                    <input type="radio" id="uti_geral" name="atuacao" value="uti_geral" required>
                    <label for="uti_geral">UTI Geral</label>
                    <br>
                    <input type="radio" id="Enfermarias" name="atuacao" value="Enfermarias" required>
                    <label for="Enfermarias">Enfermarias</label>
                    <br>
                    <input type="radio" id="Administracao" name="atuacao" value="Administracao" required>
                    <label for="uti_geral">UTI Geral</label>
                    <br>
                    <input type="radio" id="uti_geral" name="atuacao" value="uti_geral" required>
                    <label for="Administracao">Administração</label>
                    <br>
                    <input type="radio" id="c_cirurgico" name="atuacao" value="c_cirurgico" required>
                    <label for="c_cirurgico">Centro Cirurgico</label>
                    <br>
                    <input type="radio" id="fca" name="atuacao" value="fca" required>
                    <label for="fca">Famacia/CAF ou almoxaifado</label>
                    <br>
                    <input type="radio" id="Recepções" name="atuacao" value="Recepções" required>
                    <label for="recepcoes">Recepções</label>
                    <br>
                    <input type="radio" id="sesmt" name="atuacao" value="sesmt" required>
                    <label for="sesmt">SESMT</label>
                    <br>
                    <input type="radio" id="cme" name="atuacao" value="cme" required>
                    <label for="cme">CME</label>
                    <br>
                    <input type="radio" id="nutricao" name="atuacao" value="nutricao" required>
                    <label for="nutricao">Nutrição</label>
                    <br>
                    <input type="radio" id="fisio" name="atuacao" value="fisio" required>
                    <label for="fisio">Fisioterapia</label>
                    <br>
                    <input type="radio" id="uti_geral" name="atuacao" value="uti_geral" required>
                    <label for="uti_mediall">UTI's MEDIALL</label>
                    <br>
                    <input type="radio" id="fono" name="atuacao" value="fono" required>
                    <label for="fono">Fonoaudiologia</label>
                    <br>
                    <input type="radio" id="s_social" name="atuacao" value="s_social" required>
                    <label for="s_social">Serviço social</label>
                    <br>
                    <input type="radio" id="s_social" name="atuacao" value="outros" required>
                    <label for="s_social">Outros</label>
                    <br><br><br>
                </div>

                <!-- <div class="input-group flex-nowrap inputBox">
                    <input type="text" class="form-control inputUser">
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br>
                <br> -->

                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label class="labelInput" for="nome"><b>Nome completo</b></label>
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
                    <label for="naturalidade" class="labelInput teste"><b>Naturalidade (cidade onde nasceu)</b></label>
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
<!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>-->

</html>