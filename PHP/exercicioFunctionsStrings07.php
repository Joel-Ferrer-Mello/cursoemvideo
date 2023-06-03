<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="_css/style.css">
		<meta charset="UTF-8"/>
		<title>Exemplos em PHP</title>
	</head>
	<body class="dbody">
		<h1 style="color: white">Exercício:</h1>
		<h5 style="color: white">Uso funções de STRING. CHR e ORD.</h5>
		<div class="operators">
			<?php
				$letter = chr(67);
				echo "A letra de código 67 é $letter.";
				$cod = ord($letter);
				echo " A letra $letter tem o código $cod";
			?>
		</div>
	</body>	
</html>