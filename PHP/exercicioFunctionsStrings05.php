<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="_css/style.css">
		<meta charset="UTF-8"/>
		<title>Exemplos em PHP</title>
	</head>
	<body class="dbody">
		<h1 style="color: white">Exercício:</h1>
		<h5 style="color: white">Uso funções de STRING. EXPLODE e IMPLODE, JOIN (igual implode).</h5>
		<div class="operators">
			<?php
				$site = "Curso em Vídeo";
				$vetor = explode (" ", $site);
				print_r ($vetor);
				echo "<br/>";
				$texto = implode("#", $vetor);
				print($texto);
			?>
		</div>
	</body>	
</html>