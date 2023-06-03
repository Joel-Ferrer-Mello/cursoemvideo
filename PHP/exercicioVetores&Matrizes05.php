<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="_css/style.css">
		<meta charset="UTF-8"/>
		<title>Exemplos em PHP</title>
	</head>
	<body class="dbody">
		<h1 style="color: white">Exercício:</h1>
		<h5 style="color: white">Uso de Vetores e Matrizes. Funcções: array, unset (retira uma posição do vetor).</h5>
		<div class="operators">
			<pre>
				<table border="1">
					<?php
						$v = array ( 	3=>5,
										1=>9,
										0=>8,
										7=>7);
						unset ($v[0]);
						print_r($v);
					?>
				</table>
			</pre>
		</div>
	</body>	
</html>