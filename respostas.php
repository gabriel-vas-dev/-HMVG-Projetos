<?php

include_once('config.php');
$sql = "SELECT * FROM usuarios ORDER BY id DESC";
$result = $conexao->query($sql);
//print_r($result);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/respostas.css" rel="stylesheet" />
    <title>Respostas</title>
    <style>


    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<body>

    <div class="table-responsive">
        <table class="table text-white table-bg">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Ação</th>
                    <th scope="col" style="width: 25%;">nome</th>
                    <th scope="col">Nascimento</th>
                    <th scope="col">CPF</th>
                    <th scope="col">RG</th>
                    <th scope="col">RG Emissor</th>
                    <th scope="col" style="width: 20%;">Nome da Mãe</th>
                    <th scope="col" style="width: 20%;">Nome do Pai</th>
                    <th scope="col">Naturalidade</th>
                    <th scope="col" style="width: 50%;">Endereço</th>
                    <th scope="col">Especialidade</th>
                    <th scope="col">Nº Conselho</th>
                    <th scope="col">Tel.</th>
                    <th scope="col">E-mail</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($user_data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $user_data['id'] . "</td>";
                    echo "<td>" . $user_data['selecionar'] . "</td>";
                    echo "<td> <input onclick='copyCB(this)' readonly value='" . $user_data['nome'] . "' type='text'></td>";
                    echo "<td> <input onclick='copyCB(this)' readonly style='width: 100px;' value='" . $user_data['data_nascimento'] . "' type='text'></td>";
                    echo "<td> <input onclick='copyCB(this)' readonly style='width: 115px;' value='" . $user_data['cpf'] . "' type='text'></td>";
                    echo "<td> <input onclick='copyCB(this)' readonly style='width: 95px;' value='" . $user_data['rg'] . "' type='text'></td>";
                    echo "<td> <input onclick='copyCB(this)' readonly style='width: 95px;' value='" . $user_data['o_emissor'] . "' type='text'></td>";
                    echo "<td> <input onclick='copyCB(this)' readonly value='" . $user_data['n_mae'] . "' type='text'></td>";
                    echo "<td> <input onclick='copyCB(this)' readonly value='" . $user_data['n_pai'] . "' type='text'></td>";
                    echo "<td> <input onclick='copyCB(this)' readonly value='" . $user_data['naturalidade'] . "' type='text'></td>";
                    echo "<td> <input onclick='copyCB(this)' readonly value='" . $user_data['endereco'] . "' type='text'></td>";
                    echo "<td> <input onclick='copyCB(this)' readonly value='" . $user_data['especialidade'] . "' type='text'></td>";
                    echo "<td> <input onclick='copyCB(this)' readonly style='width: 95px;' value='" . $user_data['n_conselho'] . "' type='text'></td>";
                    echo "<td> <input onclick='copyCB(this)' readonly style='width: 125px;' value='" . $user_data['telefone'] . "' type='text'></td>";
                    echo "<td> <input onclick='copyCB(this)' readonly value='" . $user_data['e_mail'] . "' type='text'></td>";
                }
                ?>
            </tbody>
        </table>
    </div>
    <script>
        function copyCB(inputVal) {
            console.log(inputVal.value)
            navigator.clipboard.writeText(inputVal.value);
            // var copyText = document.getElementById("myInput");

            // /* Select the text field */
            // copyText.select();
            // copyText.setSelectionRange(0, 99999); /* For mobile devices */

            /* Copy the text inside the text field */
            // navigator.clipboard.writeText(copyText.value);

            /* Alert the copied text */
            // alert("Copied the text: " + copyText.value);
        }
    </script>
</body>

</html>