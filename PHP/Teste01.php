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
					for($i=0; $i<=10; $i++){
				        if($i % 3 == 0)
				            continue;
				    echo $i."-";
				}
				echo "Fim"
?>
			</pre>
		</div>
	</body>	
</html>