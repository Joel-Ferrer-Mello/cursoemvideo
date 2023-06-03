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
					$anos = (int) 43;
					$nome = (string) "Joel";
					echo "$nome tem $anos anos!";
				?>
			</div>
			<div class="operators">
				<?php
					$n1 = $_GET["a"];
					$n2 = $_GET["b"];
					echo "<h5>Valores recebidos como parâmetro na URL: $n1 e $n2</h5>";
					$m = ($n1 + $n2) / 2;
					echo "<br/>A soma vale ". ($n1 + $n2);
					echo "<br/>A subtração vale ". ($n1 - $n2);
					echo "<br/>A multiplicação  vale ". ($n1 * $n2);
					echo "<br/>A divisão vale ". ($n1 / $n2);
					echo "<br/>O módulo vale ". ($n1 % $n2);
					echo "<br/>A média vale $m";
				?>
			</div>
			<a href="funcoesaritmeticas.php">Funções Aritméticas</a>
		</div>
	</body>	
</html>