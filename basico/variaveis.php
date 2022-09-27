<?php
	// Variáveis e Comentários
	$nome_completo = "Silvio Santos";
	$idade = 91;
	$altura = 1.82;
	$sexo = 'M';
	$fortuna = 1.900000000000;
	$velho = true;

	echo " Nome: $nome_completo <br>";
	echo "Idade: $idade <br>";
	echo "Sexo: $sexo <br>";
	echo "Altura: $altura <br>";
	echo "Fortuna: $fortuna Bilhão<br>";
	echo "Idoso? $velho <br>";

	echo "<br>".gettype($nome_completo);
	echo "<br>".gettype($idade);
	echo "<br>".gettype($sexo);
	echo "<br>".gettype($altura);
	echo "<br>".gettype($fortuna);
	echo "<br>".gettype($velho);

	// Isto é um comentário
?>