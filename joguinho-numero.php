<?php

$chute = 0;
$sorteado = rand(1,100);

while ($chute != $sorteado) 
{

    $chute = (int) readline("Digite um numero: \n");

    if ($chute == $sorteado) 
    {
        print "Você venceu!\n";
    } 
    else 
    {
        if ($chute > $sorteado) 
        {
            print "Você chutou muito alto!\n";
        } 
        else 
        {
            print "Você chutou muito baixo!\n";
        }
    }
}

print "Fin de juego\n";
