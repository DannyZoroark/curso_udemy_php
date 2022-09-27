<!DOCTYPE html>
<html lang="pt-Br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Repetição | While</title>
	<style type="text/css">
	</style>
</head>
<body>
	<div>
		<?php
			$count = 0;
			echo "Iniciando contagem <br>";
			while($count <= 10){
				echo "<br>".$count;
				$count++;
			}
		?>
	</div>

	<span>
		<?php
			$count_ = 10;
			echo "<br>Inciando Contagem regressiva <br>";
			while($count_ >= 0){
				echo "<br> $count_";
				$count_--;
			} 
		?>
	</span>

</body>
</html>