<?php
function aprovarReprovar(array &$turma)
{

    foreach ($turma as $chave => $aluno) {
        if ($aluno["nota"] < 50) {
            $turma[$chave]["situacao"] = "Reprovado";
        } else {
            $turma[$chave]["situacao"] = "Aprovado";
        }
    }
}
