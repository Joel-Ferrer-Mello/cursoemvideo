<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="_css/style.css">
		<meta charset="UTF-8"/>
		<title>Exemplos em PHP</title>
	</head>
	<body class="dbody">
		<h1 style="color: white">Exercício:</h1>
		<h5 style="color: white">Uso funções de STRING. PRINTF</h5>
		<div class="operators">
			<?php
				$prod = "leite";
				$p = 1.666;
				echo "O preço do $prod é $p.<br/>";
				printf ("O preço do %s é %.2f.", $prod, $p);
			?>
		</div>
	</body>	
</html>