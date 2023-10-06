<?php

    $tempoFumado = 0; //anos
    $tempoPerdido = 11; //minutos
    $cigarrosFumadosDia = 0; //dia
    $tempoPerdidoTotal = 0;
    $cigarrosFumadosTotal = 0;

    $tempoFumado = readline("Há quantos anos que você fuma? \n");
    $cigarrosFumadosDia = readline("Quantos cigarros você fuma por dia? \n");

    $cigarrosFumadosTotal = $cigarrosFumadosDia * $tempoFumado * 365 ;
    $tempoPerdidoTotal = $cigarrosFumadosTotal * $tempoPerdido;
    $diasPerdidos = $tempoPerdidoTotal / 60 / 24;

    $diasPerdidos = round($diasPerdidos);

    
    print "Você perdeu $diasPerdidos dias de vida\n";   
