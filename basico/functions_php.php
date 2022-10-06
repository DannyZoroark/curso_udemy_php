<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Funções</title>
	<style type="text/css">

		body{
			background-color: lightcoral;
		}

		h1{
			text-align: center;
			font: bold 28px Arial, Helvetica, sans-serif;
		}

		.container{
			margin: auto;
			width: 70%;
			padding: 20px;
			text-align: center;
			font: normal 20px Arial, Helvetica, sans-serif;
			background-color: lightgreen;
			border-radius: 20px;
		}

		h2{
			color: darkblue;
		}

		p{
			color: blue;
		}

		hr{
			background-color: black;
			margin: 20px 0;
		}

		form{
			display: flex;
			flex-direction: column;
			max-width: 50%;
			margin: auto;
		}

		form input{
			height: 30px;
			border: none;
			outline: none;
			font: normal 20px Arial, Helvetica, sans-serif;
			padding: 8px;
			margin-bottom: 20px;
		}

		form textarea{
			border: none;
			outline: none;
			margin: 20px;
			padding: 8px;
			font: normal 20px Arial, Helvetica, sans-serif;
		}

		form button{
			max-width: 100px;
			align-self: flex-end;
			padding: 8px;
			background-color: lightblue;
		}

	</style>
</head>
<body>
	<h1>Funções do próprio PHP que facilitam nosso trabalho</h1>
	<div class="container">
		<!--               Separação				-->
		<h2>
			subtstr()
		</h2>
			<p>
				Mostra caracteres específicos
			</p>
			<div>
				<?php
					$nome = "Silvio Santos";
					echo substr($nome, 0, 6)."<hr size='4'>";
				?>
			</div>
			<!--               Separação				-->
		<h2>
			strtolower()
		</h2>
			<p>
				Passa a variavel para minusculo
			</p>
			<div>
				<?php
					$nome_dois = "GOKU BLACK AND ZAMASU";
					echo strtolower($nome_dois)."<hr size='4'>";
				?>
			</div>
			<!--               Separação				-->
		<h2>
			strtoupper()
		</h2>
			<p>
				Passa a variavel para maiusculo
			</p>
			<div>
				<?php
					$nome_dois = "GOKU BLACK AND ZAMASU";
					echo strtoupper($nome_dois)."<hr size='4'>";
				?>
			</div>
			<!--               Separação				-->
		<h2>
			strip_tags()
		</h2>
			<p>
				Remove tags html, permitindo só as que desejar
			</p>
			<div>
				<?php
					$mensagem = strip_tags("<h1> Cadastrado com sucesso </h1> <br> <p>Clique aqui e <a href='#'>Saiba Mais</a>!!! </p>", "<a> <br> <p> <style>");
					echo $mensagem."<hr size='4'>";
				?>
			</div>
			<!--               Separação				-->
		<h2>
			str_replace()
		</h2>
			<p>
				Passa a variavel para maiusculo
			</p>
			<div>
				<?php
					$seven = "Homelander, Startlight, Translucent, Maeve, A-Trem, Noir, Deep";
					echo $seven."<br>";
					echo "Atualização dos 7: ".str_replace("Translucent", "StormFront", $seven)."<hr size='4'>";
				?>
			</div>
			<!--               Separação				-->
			<h2>
			explode()
			</h2>
			<p>
				Pega uma string e a quebra em um ponto específio, transformando-a em um array, na quak podemos acessar um de seus indices.
			</p>
			<div>
				<?php
					$usuario = "Luiz Inácio Lula da Silva";
					$usuario_quebrado = explode(" ", $usuario);
					echo $usuario."<br>";
					echo $usuario_quebrado[2]."<hr size='4'>";
				?>
			</div>
			<!--               Separação				-->
			<h2>
				strlen()
			</h2>
				<p>
					Verifica o tamanho de uma string
				</p>

				<div>
					<form action="functions_php.php" method="post">
						<label for="nome">Nome</label>
						<input type="text" name="nome" id="nome">

						<label for="coment">Deixe um comentário:</label>
						<textarea name="coment" id="coment">
							
						</textarea>

						<button type="submit">Enviar</button>
					</form>
				</div>
			<div>
				<?php
					$input_nome = isset($_POST['nome'])?$_POST['nome']:0;
					$input_coment = isset($_POST['coment'])?$_POST['coment']:0;
				
						if(strlen($input_nome) == 0){
						echo "O nome deve conter mais de 5 caracters";
						}else{
							echo "Olá $input_nome";
						}
					
				?>
			</div>
			<!--               Separação				-->
	</div>
</body>
</html>