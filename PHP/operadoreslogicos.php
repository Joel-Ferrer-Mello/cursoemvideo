<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="_css/style.css">
		<title></title>
	</head>
	<body>
		<div class="dbody">
			<div class="personal">
				<?php
					$ano = $_GET["an"];
					$idade = 2020 - $ano;
					echo "Quem nasceu em $ano tem idade de $idade anos.";
				?>
			</div>
			<div class="operators">
				<?php
					$tipo = ($idade >= 18 && $idade < 65) ? "OBRIGATÓRIO" : "NÃO OBRIGATÓRIO";
					echo "E desta forma seu voto é $tipo.";
				?>
			</div>
			<a href="tipos.php">Home</a>
		</div>
	</body>	
</html>