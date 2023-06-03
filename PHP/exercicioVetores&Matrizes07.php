<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="_css/style.css">
		<meta charset="UTF-8"/>
		<title>Exemplos em PHP</title>
	</head>
	<body class="dbody">
		<h1 style="color: white">Exercício:</h1>
		<h5 style="color: white">Uso de Vetores e Matrizes. Imprimir vetores. print_r (foco no programador), count, array_pop, array_push, array_shift, array_unshift.</h5>
		<div class="operators">
			<pre>
					<?php
						$v = array ( 	
							0 => 3,
							1 => 23,
							2 => 65,
							3 => 70,
						);
						print_r ($v);
						echo "<br/>Meu vetor tem " . count($v) . " elementos";
						$v[] = 15;  //coloca elemento no final
						print_r ($v);
						echo "<br/>Meu vetor tem " . count($v) . " elementos";
						array_pop($v);
						print_r ($v);
						echo "<br/>Meu vetor tem " . count($v) . " elementos";
						array_push($v, 80);
						print_r ($v);
						echo "<br/>Meu vetor tem " . count($v) . " elementos";						
						array_shift($v);
						print_r ($v);
						echo "<br/>Meu vetor tem " . count($v) . " elementos";	
						array_unshift($v, 3);
						print_r ($v);
						echo "<br/>Meu vetor tem " . count($v) . " elementos";	
					?>
			</pre>
		</div>
	</body>	
</html>