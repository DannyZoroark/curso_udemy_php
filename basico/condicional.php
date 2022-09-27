<?php
	// IF,ELSE,ELSEIF

	// Dando uma turbinada no exemplo com mais comandos
	$idade = isset($_POST['idade'])?$_POST['idade']:0;
	$senha = isset($_POST['senha'])?$_POST['senha']:123;

	if($idade > 0){
		if($idade >= 18){
			echo "Maior de idade <br>";
		}else{
			echo "Menor de Idade <br>";
		}
	}

	
		if($senha == 123){
		echo "Senha $senha RIDICULO de seguro <br>";
		}else if($senha == 1234){
			echo "Senha $senha só aumentou um numero mais ridiculo ainda <br>";
		}else{
			echo "Senha: $senha";
		}
	
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Teste</title>
	<style type="text/css">
		
	</style>
</head>
<body>
	<div>
		<form action="ex05.php" method="post">
			<!-- Idade -->
			<label for="idade">Idade:</label>
			<input type="number" name="idade" id="idade">
			<!-- Idade -->
			<!-- Senha -->
			<label for="senha">Senha:</label>
			<input type="password" name="senha" id="senha" placeholder="123...">
			<!-- Senha -->
			<input type="submit" value="Enviar">
		</form>
	</div>
</body>
</html>