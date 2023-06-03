<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="_css/style.css">
		<meta charset="UTF-8"/>
		<title>Exemplos em PHP</title>
	</head>
	<body class="dbody">
		<h1 style="color: white">Exercício:</h1>
		<h5 style="color: white">Uso funções de STRING. strtolower (minúsculas), strtoupper (MAÍUSCULAS), ucfirst, ucwords, strrev, strpos.</h5>
		<div class="operators">
			<?php
				$name = "Joel Ferrer de Mello";
				$name2 = "taís mello";
				$lastName = "Mello";
				echo "Seu nome é " . strtolower($name);
				echo "<br/>Seu nome é " . strtoupper($name);
				echo "<br/>Utilizando ucfirst em $name2 ficará assim: " . ucfirst($name2);
				echo "<br/>Utilizando ucwords em $name2 ficará assim: " . ucwords($name2);
				echo "<br/>Utilizando strrev em $name2 ficará assim: " . strrev($name2);								
				echo "<br/>A string $lastName foi encontrada na posição: " . strpos($name, $lastName);								
			?>
		</div>
	</body>	
</html>