<!DOCTYPE html>
<html>
	<head>
		<?php
			$txt = isset ($_GET["t"])?$_GET["t"]:"Texto Genérico";
			$tam = isset ($_GET["tam"])?$_GET["tam"]:"12pt";
			$cor = isset ($_GET["cor"])?$_GET["cor"]:"#000000";
		?>
		<link rel="stylesheet" href="_css/style.css">
		<meta charset="UTF-8"/>
		<title>Learning PHP</title>
		<style>
			span.Texts {
				font-size: <?php echo $tam; ?>;
				color: <?php echo $cor; ?>;
			}
		</style>
	</head>
	<body class="dbody">
		<?php
			echo "<span class='Texts'>$txt</span>";

		?>
		<br/><a href="03exercicio.html">Voltar</a>
	</body>	
</html>