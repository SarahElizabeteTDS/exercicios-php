<?php

	$visitante = "Anônimo";

	//$visitante = readline("Olá visitante! Informe seu nome: ");
	$visitante = $_REQUEST['visitante'];
	
	print "Bem vindo(a) $visitante!\n";
	
?>
