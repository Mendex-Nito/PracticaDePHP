<?php
$Sbase=$_POST["Sbase"];
$Cm1=$_POST["Cm1"];
$Cm2=$_POST["Cm2"];
$Cm3=$_POST["Cm3"];
$Vc10;
$Sfinal;

$Vc10 = ($Cm1+$Cm2+$Cm3) * 0.1 ;

$Sfinal= $Sbase+$Vc10;

echo "Su salari vase es de : ". $Sbase."<br>";
echo "Sus ganancias de comision son : ". $Vc10."<br>";
echo "Su salario mas comicion es : ". $Sfinal."<br>";
?>

<!DOCTYPE html>
<html lang="es">
<body>
    <br>
    <br>
<!-- Un boton para volver xD -->
    <a href="Ej3.html" ><button style="color: black;">Volver</button> </a> 
</body>
</html>
