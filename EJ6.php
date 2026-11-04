<?php
$Nt=$_POST["Nt"];
$Nm=$_POST["Nm"];
$Nf=$_POST["Nf"];
$Pnm;
$Pnf;

$Pnf = ($Nf / $Nt) * 100;
$Pnm = ($Nm / $Nt) * 100;

echo " El porcentaje de mujeres es : ". $Pnf . "%". "<br>";
echo " El porcentaje de hombres es : ". $Pnm . "%";



?>

<!DOCTYPE html>
<html lang="es">
<body>
    <br>
    <br>
<!-- Un boton para volver xD -->
    <a href="Ej6.html" ><button style="color: black;">Volver</button> </a> 

</body>
</html>