<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<title>Learning PHP</title>
	</head>
	<body>
		<?php
			$name = isset($_GET["name"])?$_GET["name"]:"[não informado]"; //evita erro por falta de passagem de parâmetros na URL
			$year = isset($_GET["year"])?$_GET["year"]:0;
			$gender = isset($_GET["gender"])?$_GET["gender"]:"[Sexo não informado]";
			$age = date("Y") - $year;
			echo "$name é $gender e tem $age anos.";
		?>
		<a href="02exercicio.html">Voltar</a>
	</body>	
</html>