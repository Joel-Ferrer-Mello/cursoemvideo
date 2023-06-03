<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="_css/style.css">
		<meta charset="UTF-8"/>
		<title>Exemplos em PHP</title>
	</head>
	<body class="dbody">
		<h1 style="color: white">Exercício:</h1>
		<h5 style="color: white">Uso simples de funções</h5>
		<div class="operators">
			<?php
				function Soma ($a, $b) {
					$s = $a + $b;
					return $s;
				}

				$a = 4;
				$b = 5;
				$r = Soma($a,$b);
				echo "A Soma de $a + $b é: $r</br>";
				$a = 45;
				$b = 45;
				$r = Soma(45,45);
				echo "A Soma de $a + $b é: $r</br>";

			?>
		</div>
	</body>	
</html>