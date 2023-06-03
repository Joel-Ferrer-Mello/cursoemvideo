<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="_css/style.css">
		<meta charset="UTF-8"/>
		<title>Exemplos em PHP</title>
	</head>
	<body class="dbody">
		<h1 style="color: white">Exercício:</h1>
		<h5 style="color: white">Uso funções de STRING. PRINT_R muito útil em períodos de teste. Similares var_dump e var_export</h5>
		<div class="operators">
			<?php
				$vetor1[0] = 4;
				$vetor1[1] = 8;
				$vetor1[2] = 12;
				print_r ($vetor1);
				echo "<br/>";
				$vetor2 = array (3, 7, 6, 2, 1, 9);
				print_r ($vetor2);
			?>
		</div>
	</body>	
</html>