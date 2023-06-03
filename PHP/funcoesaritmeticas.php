<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="_css/style.css">
		<title></title>
	</head>
	<body>
		<div class="dbody">
			<div class="personal">
				<?php
					echo "Funções Aritméticas em PHP";
				?>
			</div>
			<div class="operators">
				<?php
					$v1 = $_GET["x"];
					$v2 = $_GET["y"];
					echo "<h5>Valores recebidos como parâmetro na URL: $v1 e $v2</h5>";
					$m = ($v1 + $v2) / 2;
					echo "<br/>O valor absoluto de $v2 é ". abs($v2);
					echo "<br/>O valor de $v1<sup>$v2</sup> é ". pow($v1, $v2);
					echo "<br/>A raiz quadrada de $v1 é ". sqrt($v1);
					echo "<br/>O valor arredondado de $v2 é ". round($v2);  // ceil (arrendodnda para cima) and floor (arrendodnda para baixo)
					echo "<br/>A parte inteira de $v2 é ". intval($v2);
					echo "<br/>O valor de $v1 em moeda é €". number_format($v1, 2,",",".");
					echo "<br/>Oferecendo 10% de desconto em $v1 o valor final ficará ". $v1*0.9;
				?>
			</div>
			<a href="tipos.php">Home</a>
		</div>
	</body>	
</html>