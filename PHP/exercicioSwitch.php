<!DOCTYPE html>
<html>
	<head>
		<?php
			$n = isset ($_GET["num"])?$_GET["num"]:0;
			$o = isset ($_GET["oper"])?$_GET["oper"]:1;
		?>
		<link rel="stylesheet" href="_css/style.css">
		<meta charset="UTF-8"/>
		<title>Learning PHP</title>
	</head>
	<body class="dbody">
		<?php
			switch ($o) {
				case 1:
					$r = $n * 2;
					break;
				case 2:
					$r = $n ** 3;
					break;
				case 3:
					$r = sqrt($n);  // $n ^ (1/2);
					break;
			}

			echo "O resultado da operação solicitada foi $r <br/>";
			
		?>
		<br/><a href="exercicioSwitch.html">Voltar</a>
	</body>	
</html>