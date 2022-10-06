<?php 
	//$nomes = array("Goku","Vegeta","Trunks","Broly","Gohan");
	$nomes = ["Naruto", "Itachi", "Sasuke", "Shisui", "Nagato"];
	echo $nomes[1]."<br>";

	echo "Mostrando todos: <br>";
	for($i = 0; $i < count($nomes); $i++){
		echo "Nome: ".$nomes[$i]."<br>";
	}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Array | em PHP</title>
</head>
<body>

</body>
</html>