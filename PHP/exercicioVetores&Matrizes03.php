<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="_css/style.css">
		<meta charset="UTF-8"/>
		<title>Exemplos em PHP</title>
	</head>
	<body class="dbody">
		<h1 style="color: white">Exercício:</h1>
		<h5 style="color: white">Uso de Vetores e Matrizes. Funcções: range (Irá de 5 a 20, pulando de 2 em 2), mostrando na tela com foreach.</h5>
		<div class="operators">
			<pre>
				<table border="1"><tr>
					<?php
						$n = range(5, 20, 2);
						foreach ($n as $v) {
							echo "<td> $v ";
						}
					?>
				</table>
			</pre>
		</div>
	</body>	
</html>