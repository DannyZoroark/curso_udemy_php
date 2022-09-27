<?php
	// Operados Matemáticos
	$soma_ = 1 + 1;
	echo $soma_."<br>";

	$somaMulti = (5+5)*2;
	echo "$somaMulti";

	$soma = 3 + 8;
	$sub = 8 - 3;
	$mult = 3 * 8;
	$div = 10/2;
	$restoDiv = 3%8;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Variáveis Matemáticas</title>
</head>
<body>
	<div>
		<p>3 + 8 = <?php echo $soma; ?></p>
		<p>3 - 8 = <?php echo $sub; ?></p>
		<p>3 X 8 = <?php echo $mult; ?></p>
		<p>10 Divido por 2 = <?php echo $div; ?></p>
		<p>resto da divisão de 8 por 3 = <?php echo $restoDiv; ?></p>
	</div>
</body>
</html>