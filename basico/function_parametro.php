<?php
	$salario = 1569.76;
	$valorAjuste = 0;

	function AjustarSalario($sal, &$valorAjuste){// & só na funcão
		$valorAjuste = 300.00;

		return ($sal + $valorAjuste); 
	}

	$valorFinal = AjustarSalario($salario, $valorAjuste);// aqui não precisa

	echo "O valor ajustado é de $valorFinal com aumento de $valorAjuste";
?>