<?php
$Cp1=$_POST["Cp1"];
$Cp2=$_POST["Cp2"];
$Cp3=$_POST["Cp3"];
$Cef=$_POST["Cef"];
$Tf=$_POST["Tf"];
$Cpf = ($Cp1+$Cp2+$Cp3)/3;
$Cpfp = $Cpf * 0.55;
$Cefp = $Cef * 0.3;
$Tfp = $Tf * 0.15;
$NF = $Cpfp + $Cefp + $Tfp; 

echo "Tu nota final es : ". $NF;

?>

<!DOCTYPE html>
<html lang="es">
<body>
    <br>
    <br>
<!-- Un boton para volver xD -->
    <a href="Ej5.html" ><button style="color: black;">Volver</button> </a> 
</body>
</html>