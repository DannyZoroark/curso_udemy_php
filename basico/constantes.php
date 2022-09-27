<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Constantes</title>
</head>
<body>
	<?php
		// Constantes = Variáveis sem alteração na execução
		define("min",20); // Primeiro seu nome e depois seu valor
		define("max",40);

		$idade = 19;

		echo "MIN: ".min."<br>";
		echo "MÁX: ".max."<br>";
		echo "Idade:".$idade."<br><br>";

		if($idade >= min && $idade <= max){
			echo "Acesso Liberado <br>";
		}else{
			echo "Acesso Negado <br>";
		}

		echo "Versão do PHP: ".PHP_VERSION;
	?>
</body>
</html>