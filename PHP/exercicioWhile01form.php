<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="_css/style.css">
		<meta charset="UTF-8"/>
		<title>Learning PHP</title>
	</head>
	<body class="dbody">
		<?php
			$i = 1;
			while ($i <= 5) {
				$v = "num".$i;
				$url = "v".$i;
				$$v = isset($_GET[$url]) ? $_GET[$url] : 0;
				$i++;
			}
			echo "$num1 $num2 $num3 $num4 $num5<br/>";
			
		?>
		<br/><a href="exercicioWhile01.php" class="botao">Voltar</a>
	</body>	
</html>