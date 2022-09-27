<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tabuada de 0 a 10 Exercício</title>
</head>
<body>
	<h1>Exercício Praticando Repetição</h1>

	<div>

		<ul>
			<?php
				for($i = 0; $i <= 10; $i++){
					echo "<br>";
					echo "Tabuada do $i <br>";
					for($j = 0; $j <= 10; $j++){
						echo "<br>";
						echo $i." X ".$j." = ".$i*$j;
						echo "<br>";
					}
				}
			?>
		</ul>

	</div>
</body>
</html>