<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="_css/style.css">
		<meta charset="UTF-8"/>
		<title>Exemplos em PHP</title>
	</head>
	<body class="dbody">
		<h1 style="color: white">Exercício:</h1>
		<h5 style="color: white">Uso de Vetores e Matrizes. Funcções: array, mostrando na tela com foreach.</h5>
		<div class="operators">
			<pre>
				<table border="1"><tr>
					<?php
						$n = array ( 	0=>5,
										1=>9,
										2=>8,
										3=>7);
							
						foreach ($n as $v) {
							echo "<td> $v ";
						}
					?>
				</table>
			</pre>
		</div>
	</body>	
</html>