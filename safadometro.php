<?php

$dia = readline("Informe seu dia de nascimento: ");
$mes = readline("Informe seu mes de nascimento: ");
$ano = readline("Informe seu ano de nascimento (em formado aa): ");

safadometro($dia,$mes,$ano);


function safadometro(int $dia, int $mes, int $ano)
{
    $safadeza = somatorio($mes) + ($ano/100) * (50-$dia);
    $anjo = 100 - $safadeza;
    print "Seu nível de safadeza é: $safadeza\n";
    print "Seu nível de anjo é: $anjo\n";
}    

function somatorio($mes)
{
    $soma = 0;

    for($i = $mes; $i > $mes; $i--)
    {
        $soma = $i++;
    }

    return $soma;
}    

