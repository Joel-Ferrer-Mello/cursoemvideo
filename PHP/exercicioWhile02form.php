<!DOCTYPE html>
<html>
	<head>
		<?php
			$vBegin = isset ($_GET["vBegin"])?$_GET["vBegin"]:0;
			$vEnd = isset ($_GET["vEnd"])?$_GET["vEnd"]:1;
			$Inc = isset ($_GET["Inc"])?$_GET["Inc"]:0;
		?>
		<link rel="stylesheet" href="_css/style.css">
		<meta charset="UTF-8"/>
		<title>Learning PHP</title>
	</head>
	<body class="dbody">		
		<h1 style="color: white">Exercício:</h1>
		<h5 style="color: white">Criar um contador personalizável</h5>
		<?php
			echo "Valor Inicial = $vBegin, Valor Final = $vEnd, Incremento = $Inc<br/><br/>";

			$i = $vBegin;
			while ($i <= $vEnd) {
				// $contagem = "num".$i;
				// $url = "v".$i;
				echo "$i, ";
				$i = $i + $Inc;
			}			
		?>
		<br/><br/><a href="exercicioWhile02.php" class="botao">Voltar</a>
	</body>	
</html>