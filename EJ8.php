<?php

$a=$_POST["a"];
$b=$_POST["b"];
$c=$_POST["c"];
$p=($a+$b+$c)/2;
$Ar=($p*($p-$a)*($p-$b)*($p-$c))**0.5;

echo "El area del triangulo es : ". $Ar;



?>

<!DOCTYPE html>
<html lang="es">
<body>
    <br>
    <br>
<!-- Un boton para volver xD -->
    <a href="Ej8.html" ><button style="color: black;">Volver</button> </a> 

</body>
</html>