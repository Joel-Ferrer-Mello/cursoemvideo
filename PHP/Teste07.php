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
					function f($v, $n) {
						if ($n <= 0) return 1;
							else
							return $v[$n-1] * f($v, $n-2) + 1;
						}
						$a = array(0,1,2,3);
						print (f($a, 4));				
				?>
			</pre>
		</div>
	</body>	
</html>