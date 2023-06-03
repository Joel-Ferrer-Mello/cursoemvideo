<!DOCTYPE html>
<html>
	<head>
		<?php
			$y = isset ($_GET["year"])?$_GET["year"]:1900;
			$age = date("Y") - $y;
		?>
		<link rel="stylesheet" href="_css/style.css">
		<meta charset="UTF-8"/>
		<title>Learning PHP</title>
	</head>
	<body class="dbody">
		<?php
			echo "Tu nasceste em $y e terás $age.<br/>";
			if ($age >= 18) {
				$v =  "Com esta idade já pode votar.<br/>";
				$d = "Com esta idade já pode dirigir.<br/>";
			} else {
				if ($age >= 16) {
					$v =  "Com esta idade o voto é opcional.<br/>";
				} else {
					$v =  "Com esta idade NÃO pode votar.<br/>";
				}
				$d = "Com esta idade NÃO pode dirigir.<br/>";
			}
			echo "$v e $d";
		?>
		<br/><a href="exercicioIF.html">Voltar</a>
	</body>	
</html>