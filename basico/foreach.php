<?php
	$lista = [
		"aluno 1" => [
			"Nome" => "Daniel",
			"Nota" => 10
		],

		"aluno 2" =>[
			"Nome" => "Gustavo",
			"Nota" => 7
		],

		"aluno 3" =>[
			"Nome" => "Guilherme",
			"Nota" => 2
		],

		"aluno 4" => [
			"Nome" => "Pedro",
			"Nota" => 5
		]
	];

	foreach ($lista as $aluno) {
		foreach($aluno as $chave => $valor){
			echo "$chave: $valor <br>";
		};
		echo "<br>";
	};
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Foreach</title>
</head>
<body>

</body>
</html>