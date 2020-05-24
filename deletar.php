<?php

	$arquivo = "C:\localhost\ATP/ATIVIDADE.txt";
	$ArqDestino = "C:\localhost\ATP/ATIVIDADE-02.txt";

	copy($arquivo,$ArqDestino);


	if(unlink($arquivo))
	{
		echo("Arquivo Apagado c/Sucesso :-)");
	}
	else{
			echo("Arquivo Apagado :-(");
		}

?>