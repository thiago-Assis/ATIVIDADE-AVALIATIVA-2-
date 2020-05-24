<?php

  // Nome do Arquivo
  $arquivo = "C:\localhost\ATP\arquivos/ATIVIDADE.txt";
  $ArqDestino = "C:\localhost\ATP\arquivos/ATIVIDADE-COPIA.txt";

  // Função copy - Copia um arquivo
  if(copy($arquivo,$ArqDestino))
  {
    echo("Arquivo Copiado c/Sucesso :-)");
  }
  else{
      echo("Arquivo Não Copiado :-(");
    }

?>