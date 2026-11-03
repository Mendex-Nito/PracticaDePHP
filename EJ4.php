<?php

$Vc=$_POST["Vc"];
$Vcf;


$Vcr = $Vc * 0.15;
$Vcf = $Vc - $Vcr;


echo"El valor final a pagar es : ". $Vcf; 

?>

<!DOCTYPE html>
<html lang="es">
<body>
    <br>
    <br>
<!-- Un boton para volver xD -->
    <a href="Ej4.html" ><button style="color: black;">Volver</button> </a> 

</body>
</html>