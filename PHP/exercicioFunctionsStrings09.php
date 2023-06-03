<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="_css/style.css">
		<meta charset="UTF-8"/>
		<title>Exemplos em PHP</title>
	</head>
	<body class="dbody">
		<h1 style="color: white">Exercício:</h1>
		<h5 style="color: white">Uso funções de STRING. substr_count, substr, str_pad, str_repeat, str_replace.</h5>
		<div class="operators">
			<?php
				$name = "Laura Cotta de Mello de Mello";
				$lastName = "Mello";
				echo "Seu nome é $name";
				$cont = substr_count($name, $lastName);	
				echo "<br/>A palavra $lastName foi encontrada $cont vezes.";								
				$site = "Curso em Vídeo";
				$sub = substr($site, 0, 5);
				echo "<br/>$sub<br/>";
				$novo = str_pad($lastName, 30, " ", STR_PAD_RIGHT);
				print("<br/>Meu sobrenome é $novo e meu primeiro nome Joel");
				$novo = str_pad($lastName, 30, " ", STR_PAD_LEFT);
				print("<br/>Meu sobrenome é $novo e meu primeiro nome Joel");
				$txt = str_repeat($lastName, 10);
				print("<br/>$txt ");
				$novo = str_replace("Cotta", "Ferrer", $name);
				print("<br/>$novo");				
			?>
		</div>
	</body>	
</html>