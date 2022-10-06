<?php
	$nome = isset($_POST['nome'])?$_POST['nome']:"Não informado";
	$email = isset($_POST['email'])?$_POST['email']:"Não informado";
	$senha = isset($_POST['senha'])?$_POST['senha']:"Não Informado";

	$dados = [
		"Nome" => $nome,
		"E-mail" => $email,
		"Senha" => $senha
	];

	if(!$_POST['email'] || !$_POST['senha'] || !$_POST['nome']){
		echo "Informe seus dados";
		if(!$_POST['nome']){
			echo "Informe seu Nome";
		}else if(!$_POST['email']){
			echo "Informe seu email";
		}else if(!$_POST['senha']){
			echo "Informe sua senha";
		};
	}else{
		foreach($dados as $chave => $info){
		echo "$chave = $info <br>";
		};
	};

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulario de Cadastramento</title>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}

		body{
			display: flex;
			font-family: Arial, Helvetica, sans-serif;
			font-weight: bold;
			font-size: 18px;
			flex-direction: column;
			justify-content: center;
			align-items: center;
		}

		.container{
			width: 80%;
			height: 100vh;
			background-color: black;
			display: flex;
			justify-content: center;
			padding: 20px;
		}

		.area{
			display: flex;
			flex-direction: column;
			margin: 10px;
			justify-content: center;
			align-items: center;
			background-color: red;
			width: 80%;
			border-radius: 20px;
			box-shadow: 2px 2px 6px white;
			text-align: center;
		}

		.input__{
			display: flex;
			flex-direction: row;
			padding: 8px;
			margin: 16px;
			border-style: none;
			outline: none;
		}

		.botao{
			padding: 10px;
		}

	</style>
</head>
<body>

	<div class="container">
		<div class="area">
			<form action="index.php" method="post">

				<label for="nome">Nome Completo:</label>
				<input class="input__" type="text" name="nome" id="nome">

				<label for="email">E-mail:</label>
				<input class="input__" type="email" name="email" id="email">

				<label for="senha">Senha</label>
				<input class="input__" type="password" name="senha" id="senha">

				<button class="botao" type="submit">Enviar</button>

			</form>
		</div>
	</div>

</body>
</html>