<!DOCTYPE html>
<html lang="pt-br">
<body>
<head>
	<meta charset="utf-8">
	<title># Atividade parcial </title>
	<link rel ="shortcut icon" href="logo.ico">
    <link href="css/bootstrap.css" rel="stylesheet"/>
    <link href="css/loja.css" rel="stylesheet"/>
</head>
<body>
<?php

   
   $texto = $_POST['r_texto'];
   $conteudo = $texto."\r\n";
   $arquivo = fopen("ATIVIDADE.TXT","a");
   fwrite($arquivo,$conteudo);

   echo "mensagem salva! $conteudo";

   fclose($arquivo);
   ?>
   <td>
        <form action="copiar.php" method = "post">
          <input type="hidden" name="copiar" >
          <button class="btn btn-danger">Copiar</button> 
        </form>
      </td>
<td>
        <form action="deletar.php" method = "post">
          <input type="hidden" name="deletar" >
          <button class="btn btn-danger">Excluir</button> 
        </form>
        <td>
        <form action="lista.php" method = "post">
          <input type="hidden" name="lista" >
          <button class="btn btn-danger">Listar</button> 
        </form>
        <form action="renomear.php" method = "post">
          <input type="hidden" name="renomear" >
          <button class="btn btn-danger">Renomear para Exercicio01</button> 
        </form>
      </td>
      </td>
   <hr/>
   <a href="index.tml" target="self>voltar"></a>
</body>
</html>
