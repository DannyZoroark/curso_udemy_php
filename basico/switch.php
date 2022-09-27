<?php

	$dia = isset($_POST["dia"])?$_POST["dia"]:0;

	switch($dia){
		case 0:
			echo "Insira um dia válido";
			break;
		case 1:
			echo "Dia 1";
			break;
		case 2:
			echo "Dia 2";
			break;
		case 3:
			echo "Dia 3";
			break;
		case 4:
			echo "Dia 4";
			break;
		case 5:
			echo "Dia 5";
			break;				
	}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Teste</title>
</head>
<body>

	<form action="switch.php" method="post">
		<input type="number" name="dia" max="5">
		<input type="submit" value="Enviar">	
	</form>
	
</body>
</html>