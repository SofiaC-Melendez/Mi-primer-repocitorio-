<!DOCTYPE html> 
<html lang="es"> 
<head>
<meta charset="UTF-8">
<title>Registro de productos</title> 
</head>
<body>
<h2>REGISTRO DE TRES PRODUCTOS</h2>
<!-- Formulario de captura --> 
<form method="POST" action="">    
<?php 
	// Ciclo para mostrar tres renglones de captura
	   for ($i = 0; $i < 2; $i++) { 
	   	   echo "Numeros1:";
	   	   echo "<input type='number' name='Numero1[]'>" . " ";
	   	   echo "Numeros2:"; 
	   	   echo "<input type='number' name='Numero2[]'>" . " ";   
	   	   echo "<br><br>"; } 
  ?>
<button type="submit" name="guardar" value="guardar">
Guardar y calcular </button>

<?php
if (isset($_POST['guardar'])) { 
$Numeros1 = $_POST['Numeros1'];
$Numeros2 = $_POST['Numeros2'];
$Suma = array();
$Resta = array();
$Multiplicsion = array();
$Division = array();
for ($i = 0; $i < 2; $i++) {
$Suma[$i] = $Numeros1[$i] + $Numeros2[$i];

$Resta[$i] = $Numeros2[$i] - $Numeros2[$i];

$Multiplicsion[$i] = $Numeros1[$i] * $Numeros2[$i];

$Division[$i] = $Numeros1[$i] / $Numeros2[$i];}



echo "<h3>ARREGLO DE PRODUCTOS</h3>"; 
for ($i = 0; $i < 3; $i++) {
	echo $Numeros1[$i] . "<br>";
    } 
}
?>