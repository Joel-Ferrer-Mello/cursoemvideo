<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="_css/style.css">
		<meta charset="UTF-8"/>
		<title>Exemplos em PHP</title>
	</head>
	<body class="dbody">
		<div class="operators">
			<form method="get" action="exercicioWhile01form.php">
				<?php
					$c = 1;
					while ($c <=5) {
						echo "Valor $c: <input type='number' name='v$c' max='100'/> <br/>";
						$c++;
					}
				?>
				<br/><input type="submit" class="botao" value="Enviar"/>
			</form>
		</div>
	</body>	
</html>