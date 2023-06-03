<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="_css/style.css">
		<meta charset="UTF-8"/>
		<title>Exemplos em PHP</title>
	</head>
	<body class="dbody">
		<h1 style="color: white">Exercício:</h1>
		<h5 style="color: white">Uso funções de um arquivo externo, utilizando INCLUDE. Require +parecido, porém se tiver algum problema no arquivo, ou não existir para a execução. O uso do ONCE é para carregar apenas 1 vez.</h5>
		<div class="operators">
			<?php
				// require "funcoes2.php";
				include "funcoes.php";
				ola();
				mostraValor(4);
			?>
		</div>
	</body>	
</html>