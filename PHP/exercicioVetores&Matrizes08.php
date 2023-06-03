<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="_css/style.css">
		<meta charset="UTF-8"/>
		<title>Exemplos em PHP</title>
	</head>
	<body class="dbody">
		<h1 style="color: white">Exercício:</h1>
		<h5 style="color: white">Uso de Vetores e Matrizes. Funções: sort, rsort, asort, arsort, ksort (organiza de acordo com os índices), krsort.</h5>
		<div class="operators">
			<pre>
					<?php
						$v = array ( 	
							0 => 30,
							1 => 23,
							2 => 5,
							3 => 70,
						);
						print_r ($v);
						sort ($v);
						print_r ($v);
						rsort ($v);
						print_r ($v);
						asort ($v);
						print_r ($v);
						arsort ($v);
						print_r ($v);
					?>
			</pre>
		</div>
	</body>	
</html>