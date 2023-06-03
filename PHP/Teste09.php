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
				  $a = 10;
				  $b = "10";
				  if ($a == $b)
					  print "caso 1";
				  else
					  print "caso 2";

				  if ($a === $b) {
					  print "caso 3";
				  } else {
					  print "caso 4";
				  }
?>
			</pre>
		</div>
	</body>	
</html>