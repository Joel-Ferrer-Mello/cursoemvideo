<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="_css/style.css">
		<meta charset="UTF-8"/>
		<title>Exemplos em PHP</title>
	</head>
	<body class="dbody">
		<h1 style="color: white">Exercício:</h1>
		<h5 style="color: white">Uso funções de STRING. wordwrap.</h5>
		<div class="operators">
			<?php
				$st = "Durante a aula, veremos também como realizar outras contagens, como por exemplo a contagem regressiva. Outra coisa que vamos aprender durante essa aula de repetição é criar código HTML dinamicamente, utilizando scripts PHP. No exemplo apresentado, vamos criar várias caixas de texto com nomes e etiquetas diferentes usando uma estrutura de repetição em PHP.";
				$r = wordwrap ($st, 40, "<br/>", true);
				echo $r;
			?>
		</div>
	</body>	
</html>