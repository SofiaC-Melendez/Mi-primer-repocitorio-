 <!DOCTYPE html> 
<html lang="es"> 
<head>
<meta charset="UTF-8">
<title>Valores numericos</title> 
</head>
<body>
<?php 
	$matrizA=[];
	$matrizB=[];
	$matrizC=[];
	$valorA=100;
	$valorB=500;

for ($i=0;$i<3;$i++){
	for($j=0;$j<3;$j++){
		$matrizA[$i][$j]=$valorA;
		$matrizB[$i][$j]=$valorB;
		$matrizC[$i][$j]=$matrizA;
		[$j]+$matrizB[$i][$j];
		$valorA+=10;
		$valorB+=20;
	}
}
echo "matrizA && matrizC <br><br>";
