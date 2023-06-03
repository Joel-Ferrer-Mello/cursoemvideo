<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="_css/style.css">
		<title></title>
	</head>
	<body>
		<div class="dbody">
			<div class="personal">
				<?php
					$n1 = (int) 43;
					$n2 = 20;
					$tipo = "s";
					echo "N1 = $n1 e N2 = $n2";
				?>
			</div>
			<div class="operators">
				<?php
					$r = ($tipo == "s") ? $n1+$n2 : $n1*$n2;
					echo "<h5>O valor de R é $r</h5>";
					$a = 3;
					$b = 3;
					$r = ($a == $b)?"SIM":"NÃO";
					echo "</br>As variáveis A e B são iguas (==)? $r";
					$b = "3";					
					$r = ($a === $b)?"SIM":"NÃO";
					echo "</br>As variáveis A e B são iguas (===)? $r";
					$nota1 = 5;
					$nota2 = 8;
					$media = ($nota1 + $nota2) / 2;
					$sit = ($media >= 6)?"Aprovado":"Reprovado";
					echo "<br/>A situação do aluno é $sit";
					// echo "<br/>A subtração vale ". ($n1 - $n2);
					// echo "<br/>A multiplicação  vale ". ($n1 * $n2);
					// echo "<br/>A divisão vale ". ($n1 / $n2);
					// echo "<br/>O módulo vale ". ($n1 % $n2);
					// echo "<br/>A média vale $m";
				?>
			</div>
			<a href="tipos.php">Home</a>
		</div>
	</body>	
</html>