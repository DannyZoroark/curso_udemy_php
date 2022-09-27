<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Repetição | FOR</title>
</head>
<body>
	<ul>
		<?php
			define("dois",2);
			for($i = 0; $i <= 10; $i++){
				?>
				<li><?php echo dois." X ".$i." = ".$i*dois ?></li>
				<?php
			}
		?>
	</ul>
</body>
</html>