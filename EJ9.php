<?php
$Vh=$_POST["Vh"];
$Nh=$_POST["Nh"];
$Sn=$Vh*$Nh;
$Pd= $Sn * 0.20;
$Sf= $Sn - $Pd;

echo "Su salario base es de : ". $Sn ."$". "<br>";
echo "Se le descontara ". $Pd ."$" ." por concepto de inpuesto" . "<br>";
echo "Su salario neto es de : ". $Sf ."$";

?>

<!DOCTYPE html>
<html lang="es">
<body>
    <br>
    <br>
<!-- Un boton para volver xD -->
    <a href="Ej9.html" ><button style="color: black;">Volver</button> </a> 

</body>
</html>