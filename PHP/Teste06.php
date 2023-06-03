<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="_css/style.css">
		<meta charset="UTF-8"/>
		<title>Exemplos em PHP</title>
	</head>
	<body class="dbody">
		<h1 style="color: white">Exercício:</h1>
		<h5 style="color: white">TESTE</h5>
		<div class="operators">
			<pre>
			<?php 
				$x = 4;
				$y = &$x;
				$z = ++ $y;
				echo "X=$x Y=$y Z=$z";
			?>
			</pre>
		</div>
	</body>	
</html>