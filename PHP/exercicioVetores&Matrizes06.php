<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="_css/style.css">
		<meta charset="UTF-8"/>
		<title>Exemplos em PHP</title>
	</head>
	<body class="dbody">
		<h1 style="color: white">Exercício:</h1>
		<h5 style="color: white">Uso de Vetores e Matrizes. Array com diferentes tipos de dados.</h5>
		<div class="operators">
			<pre>
					<?php
						$cad = array ( 	
							"nome" => "Ana",
							"idade" => 23,
							"peso" => 65.5);
						// unset ($v[0]);
						$cad["fuma"] = true;
						foreach($cad as $k => $c) {
							echo "<br/>O campo $k possui conteúdo $c.";	
						}
					?>
			</pre>
		</div>
	</body>	
</html>