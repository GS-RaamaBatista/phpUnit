<?php

define('DURACAO_AULA_TEORICA', 50);
define('DURACAO_AULA_PRATICA', 50);
define('DURACAO_AULA_NOTURNA', 50);
define('HORA_LIMITE_AULAS_50_MINUTOS', '17:00');

function calculaDuracao($dataHora)
{
    $duracao = DURACAO_AULA_TEORICA;
    if (strlen($dataHora) > 9) {
        if (substr($dataHora, 11, 5) >= HORA_LIMITE_AULAS_50_MINUTOS)
            $duracao = DURACAO_AULA_NOTURNA;
    } else {
        if ($dataHora >= HORA_LIMITE_AULAS_50_MINUTOS)
            $duracao = DURACAO_AULA_NOTURNA;
    }
    return ($duracao);
}
