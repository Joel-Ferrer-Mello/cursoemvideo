<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="_css/style.css">
		<meta charset="UTF-8"/>
		<title>Exemplos em PHP</title>
	</head>
	<body class="dbody">
		<h1 style="color: white">Exercício:</h1>
		<h5 style="color: white">Criar um contador personalizável</h5>
		<div class="operators">
			<form method="get" action="exercicioWhile02form.php">
				<?php
					echo "Início: <input type='number' name='vBegin' max='100'/> <br/>";
					echo "Início: <input type='number' name='vEnd' max='100'/> <br/>";
					echo "Incremento: <input type='number' name='Inc' max='100'/> <br/>";
				?>
				<br/><input type="submit" class="botao" value="Enviar"/>
			</form>
		</div>
	</body>	
</html>