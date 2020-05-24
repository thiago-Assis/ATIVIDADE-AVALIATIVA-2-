<?php

	// Nome do Arquivo
	$nomeArq = "Exercicio01.txt";
	$arquivo = "C:\localhost\ATP\arquivos/ATIVIDADE.txt";
	$ArqDestino = "C:\localhost\ATP\arquivos/".$nomeArq;

	// Função rename - Copia um arquivo
	if(rename($arquivo,$ArqDestino))
	{
		echo("Arquivo Renomeado c/Sucesso ");
	}
	else{
			echo("Arquivo não Renomeado ");
		}

?>