<?php

$dia = $_REQUEST['campoDia'];
$mes = $_REQUEST['campoMes'];
$ano = $_REQUEST['campoAno'];

safadometro($dia,$mes,$ano);


function safadometro(int $dia, int $mes, int $ano)
{
    $safadeza = somatorio($mes) + ($ano/100) * (50-$dia);
    $anjo = 100 - $safadeza;
    print "Seu nível de safadeza é: {$safadeza}%\n";
    print "Seu nível de anjo é: {$anjo}%\n";
}    

function somatorio(int $mes)
{
    $soma = 0;

    for($i = $mes; $i > $mes; $i--)
    {
        $soma = $i++;
    }

    return $soma;
}    

