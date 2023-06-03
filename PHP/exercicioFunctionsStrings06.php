<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="_css/style.css">
		<meta charset="UTF-8"/>
		<title>Exemplos em PHP</title>
	</head>
	<body class="dbody">
		<h1 style="color: white">Exercício:</h1>
		<h5 style="color: white">Uso funções de STRING. str_split (cada caracter ocupará uma posição no vetor).</h5>
		<div class="operators">
			<?php
				$name = "Joel Mello";
				$vetor = str_split ($name);
				print_r ($vetor);
			?>
		</div>
	</body>	
</html>