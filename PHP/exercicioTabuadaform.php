<!DOCTYPE html>
<html>
	<head>
		<?php
			$vNumber = isset ($_GET["vNumber"])?$_GET["vNumber"]:0;
		?>
		<link rel="stylesheet" href="_css/style.css">
		<meta charset="UTF-8"/>
		<title>Learning PHP</title>
	</head>
	<body class="dbody">		
		<h1 style="color: white">Exercício:</h1>
		<?php
			echo "<h5 style='color: white'>Mostrar a TABUADA de $vNumber :<br/></h5>";
			$i = 1;
			do {
				$tabuada = $vNumber * $i;				
				echo "$vNumber x $i =  $tabuada;<br/>";
				$i++;
			} while	($i <= 10);
		?>
		<br/><br/><a href="exercicioTabuada.php" class="botao">Voltar</a>
	</body>	
</html>