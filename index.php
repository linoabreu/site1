<?php 
include "servicos/servicoMensagemSessao.php";
?>	
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulário de Inscrição</title>
</head>
<body>
	<p>FORMULÁRIO PARA INSCRIÇÃO DE COMPETIDORES</p>
	<form action="script.php" method="post">
		<?php
			$mensagemSucesso = obterMensagemSucesso();
			if(!empty($mensagemSucesso))
			{
				echo $mensagemSucesso;
			}
			$mensagemErro = obterMensagemErro();
			if(!empty($mensagemErro))
			{
				echo $mensagemErro;
			}
		?>
		<p>Seu nome: <input type="text" name="nome"></p>
		<p>Sua idade: <input type="text" name="idade"></p>
		<p><input type="submit" value="Enviar dados do competidor"></p>
	</form>
</body>
</html>