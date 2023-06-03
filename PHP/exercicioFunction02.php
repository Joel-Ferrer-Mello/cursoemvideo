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
				function Soma () {
					$vetor_argumentos = func_get_args();
					$quantidade_argumentos = func_num_args();
					$s = 0;
					for ($i=0; $i<$quantidade_argumentos; $i++) {
						$s += $vetor_argumentos[$i];
					}
					return $s;
				}

				$a = 4;
				$b = 5;
				$r = Soma($a,$b);
				echo "A Soma de $a + $b é: $r</br>";
				$a = 45;
				$b = 45;
				$c = 10;
				$d = 25;
				$e = 15;
				$r = Soma($a,$b,$c,$d,$e);
				echo "A Soma de $a + $b + $c + $d + $e é: $r</br>";

			?>
		</div>
	</body>	
</html>