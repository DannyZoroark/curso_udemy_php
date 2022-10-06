<!DOCTYPE html>
<html lang="pt-Br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Funções Date</title>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}

		.container{
			width: 80%;
			margin: auto;
			padding: 20px;
			background-color: lightblue;
			font-family: Arial, Helvetica, sans-serif;
		}

		.item{
			margin: 20px 0;
		}

		.res__{
			font-size: 20px;
		}

		hr{
			background-color: black;
			margin-top: 10px;
		}

		.text_destaque{
			color: red;
		}

	</style>
</head>
<body>
	<div class="container">
		<!-- Separação -->
		<?php 
			// Setando o tempo para região Brasileira
			date_default_timezone_set("America/Sao_Paulo");
		?>
		<div class="item">
			<h1>Últimos digitos do ano</h1>
			<span class="res__">Função date em php com y minusculo <?php echo date("y")?></span><hr size="6">
		</div>
		<!-- Separação -->
		<div class="item">
			<h1>Ano Completo</h1>
			<span class="res__">Função date em php com Y maiúsculo <?php echo date("Y")?></span><hr size="6">
		</div>
		<!-- Separação -->
		<div class="item">
			<h1>Dia/Mês/Ano: <span class="text_destaque">Day/Month/Year</span></h1>
			<span class="res__">Função date em php d/m/y <?php echo date("d/m/y")?></span><hr size="6">
		</div>
		<!-- Separação -->
		<div class="item">
			<h1>Dia da Semana em inglês</h1>
			<span class="res__">Função date em php com D maiúsculo retorna nome do dia da semana <?php echo date("D")?></span><hr size="6">
		</div>
		<!-- Separação -->
		<div class="item">
			<h1>Dia do mês em numbero sem zero</h1>
			<span class="res__">Função date em php com j dia do mês sem zero a esquerda <?php echo date("j")?></span><hr size="6">
		</div>
		<!-- Separação -->
		<div class="item">
			<h1>Dia do mês em numbero com Zero</h1>
			<span class="res__">Função date em php com d dia do mês com zero a esquerda <?php echo date("d")?></span><hr size="6">
		</div>
		<!-- Separação -->
		<div class="item">
			<h1>Dia do ano de 0-365</h1>
			<span class="res__">Função date em php com z <?php echo date("z")?></span><hr size="6">
		</div>
		<!-- Separação -->
		<div class="item">
			<h1>Nome do mês</h1>
			<span class="res__">Função date em php com F maiúsculo <?php echo date("F")?></span><hr size="6">
		</div>
		<!-- Separação -->
		<h1>Horas</h1>
		<hr size="6">
		<!-- Separação -->
		<div class="item">
			<h1>Tempo com horas, minutos com zero e segundos</h1>
			<span class="res__">Função date em php com h:i:s <?php echo date("h:i:s")?></span><hr size="6">
		</div>
		<!-- Separação -->
	</div>
</body>
</html>