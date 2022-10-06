<?php

	function gravar(string $texto){
		$fp = fopen("teste.txt", "a+"); //abrindo o arquivo
		fwrite($fp, $texto); // escrevendo nele
		fclose($fp); // fechando ele
	}

	gravar("Olá, Mundo", "teste.txt"); //executando a função
?>