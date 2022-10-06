<!DOCTYPE html>
<html lang="pt-Br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Requisitando Arquivos</title>
</head>
<body>
	<h1>Usando Require e Include</h1>
	<?php
		require("arquivo.php");

		include("arquivo2.php");

		echo "<br> <h3>Podemos chamá-los de novo usando once como requice_once() e include_once </h3>";
	?>
</body>
</html>