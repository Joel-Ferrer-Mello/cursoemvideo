<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="_css/style.css">
		<meta charset="UTF-8"/>
		<title>Exemplos em PHP</title>
	</head>
	<body class="dbody">
		<h1 style="color: white">Exercício:</h1>
		<h5 style="color: white">Uso funções de STRING. strlen (quantidade de caracteres), trim (retira espaços do início e do fim), ltrim, rtrim , quantWords (quantidade de palavras), explode.</h5>
		<div class="operators">
			<?php
				$txt = "   Curso em Vídeo   ";
				$tamanho = strlen ($txt);
				echo "A quantidade de caracteres de: $txt, é $tamanho.<br/>";
				$novo = trim($txt);
				$tamanho = strlen ($novo);
				echo "O trim é: $novo, com $tamanho caracteres.<br/>";
				$quantWords = str_word_count($novo);
				echo "A quantidade de palavras de $novo é $quantWords.<br/>";				
			?>
		</div>
	</body>	
</html>