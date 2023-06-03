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
		<!-- <h3 style="color: white"></h3> -->
		<?php
			echo "<h5 style='color: white'>Exercício: Mostrar a TABUADA de $vNumber :<br/></h5>";
			$i = 1;
			for ($i=1; $i<=10; $i++) {
				$tabuada = $vNumber * $i;				
				echo "$vNumber x $i =  $tabuada;<br/>";
			}
		?>
		<br/><br/><a href="exercicioTabuada.php" class="botao">Voltar</a>
	</body>	
</html>