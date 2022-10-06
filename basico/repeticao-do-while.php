<?php
	$i = 0;

	do{
		echo "Valor: $i <br>";
		$i++;
	}while($i<=10);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Repetição com Do While</title>
</head>
<body>
	<ul>
		<?php
		echo "iniciando Contagem regressiva";
			$j = 10;
			do{
				?>
				<li><?php echo "Valor: $j <br>"; ?></li>
				<?php
				$j--;
				}while($j>=0);
			?>
	</ul>
</body>
</html>