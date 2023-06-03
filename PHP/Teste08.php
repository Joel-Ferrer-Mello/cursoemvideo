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

					$a=10;
					$b=2;
					$j=$a/2;
					for ($i=0;$i<$j;$i++){
					    if ($i % $b == 1) 
						echo "$i";
				}
			?>
			</pre>
		</div>
	</body>	
</html>