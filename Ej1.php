<?php

//declaramos la variavle y su resultado es = al metodo usado en el html y los parametros son el [Name=""] del input 
$Ed1 = $_POST["Ed1"];
$Ed2 = $_POST["Ed2"];
$Ed3 = $_POST["Ed3"];
//se usa la formula para promediar  (A+B+C)/D = X 
$EdFinalBoss = ($Ed1 + $Ed2 + $Ed3) / 3;


//Con Echo convocamos las variables, no olvidar concatenar con los . ni olvidar el ; PORFAVOR
echo "Edad 1: " . $Ed1 . "<br>";
echo "Edad 2: " . $Ed2 . "<br>"; 
echo "Edad 3: " . $Ed3 . "<br>";
echo "Promedio " . $EdFinalBoss ;
//aqui se cierra el php
?>


<!DOCTYPE html>
<html lang="es">
<body>
    <br>
    <br>
<!-- Un boton para volver xD -->
    <a href="Ej1.html" ><button style="color: black;">Volver</button> </a> 

</body>
</html>


