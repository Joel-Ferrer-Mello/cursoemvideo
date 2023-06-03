<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="_css/style.css">
		<meta charset="UTF-8"/>
		<title>Exemplos em PHP</title>
	</head>
	<body class="dbody">
		<h1 style="color: white">Exercício:</h1>
		<h5 style="color: white">Mostrar a Tabuada de um número, usando FOR</h5>
		<div class="operators">
			<form method="get" action="exercicioForTabuadaform.php">
				<?php
					echo "Valor: <input type='number' name='vNumber' max='100'/> <br/>";
				?>
				<br/><input type="submit" class="botao" value="Tabuada"/>
			</form>
		</div>
	</body>	
</html>