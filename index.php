<?php

require("./alunos.php");
require("./funcoes.php");


//verificar se novaNota está setada (OK) 
if(isset($_GET["novaNota"])) {
    $nome = $_GET["nomeAluno"];
    $nota = $_GET["novaNota"];
    
    alterarNotaAluno($alunos, $nome, $nota);
}

aprovarReprovar($alunos);

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Nota dos Alunos</title>
    <script src="./script.js" defer></script>
</head>

<body>
    <section>
        <h1>Tabela de Notas</h1>
        <table>
            <tr>
                <th>Nome</th>
                <th>Idade</th>
                <th>Nota</th>
                <th>Situação</th>
            </tr>
            <?php foreach ($alunos as $aluno) : ?>
                <tr onclick="showFormNota('<?= $aluno['nome']?>')">
                    <td><?= $aluno["nome"] ?></td>
                    <td> <?= $aluno["idade"] ?></td>
                    <td> <?= $aluno["nota"] ?></td>
                    <td class="
                    <?= strtolower($aluno["situacao"]) ?> ">
                        <?=
                        isset($aluno["situacao"]) ?
                            $aluno["situacao"] : ""
                        ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </section>
    <div class="container-form-nota">
        <form>
            <input type="number" name="novaNota" placeholder="Digite a nova nota">
            <input type="hidden" id="nomeAluno" name="nomeAluno" />
            <button>Alterar</button>
        </form>
    </div>
</body>

</html>