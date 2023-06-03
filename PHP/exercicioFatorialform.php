<!DOCTYPE html>
<html>
	<head>
		<?php
			$vNumber = isset ($_GET["vNumber"])?$_GET["vNumber"]:1;
		?>
		<link rel="stylesheet" href="_css/style.css">
		<meta charset="UTF-8"/>
		<title>Learning PHP</title>
	</head>
	<body class="dbody">		
		<h1 style="color: white">Exercício:</h1>
		<h5 style="color: white">Mostrar e calcular o FATORIAL de um número</h5>
		<?php
			echo "Valor Inicial = $vNumber<br/><br/>";

			$i = $vNumber;
			$fat = 1;
			do {
				$fat = $fat * $i;
				$i--;
			} while	($i >= 1);
			echo "<h3>O fatorial de $vNumber é $fat<br/></h3>";
		?>
		<br/><br/><a href="exercicioDoWhile01.php" class="botao">Voltar</a>
	</body>	
</html>