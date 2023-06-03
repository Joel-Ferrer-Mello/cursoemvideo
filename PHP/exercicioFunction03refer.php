<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="_css/style.css">
		<meta charset="UTF-8"/>
		<title>Exemplos em PHP</title>
	</head>
	<body class="dbody">
		<h1 style="color: white">Exercício:</h1>
		<h5 style="color: white">Uso funções passando uma referência da variável como parâmetro</h5>
		<div class="operators">
			<?php
				function TesteParametro (&$x) {
					$x += 2;
					return $x;
				}

				$a = 4;
				echo "O valor da variável a é $a</br>";				
				$r = TesteParametro($a);
				echo "O resultado agora é $a</br>";
			?>
		</div>
	</body>	
</html>