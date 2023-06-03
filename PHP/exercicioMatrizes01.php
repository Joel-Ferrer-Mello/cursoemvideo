<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="_css/style.css">
		<meta charset="UTF-8"/>
		<title>Exemplos em PHP</title>
	</head>
	<body class="dbody">
		<h1 style="color: white">Exercício:</h1>
		<h5 style="color: white">Uso Matrizes, que será criada usando Vetores. Será um vetor de vetor.</h5>
		<div class="operators">
			<pre>
					<?php
						$matriz = array (
							array(6,4,8),
							array(4,9,8),
							array(3,2,8),
						);
						print_r($matriz);
						$matriz[0][1] = $matriz[2][0];
						print_r($matriz);						
					?>
			</pre>
		</div>
	</body>	
</html>