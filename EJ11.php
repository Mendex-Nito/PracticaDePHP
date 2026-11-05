<?php
//nombre
$Nombre =$_POST["Nombre"];
//trabajo hora
$Th =$_POST["Th"];
//valor trabajo hora
$Vth =$_POST["Vth"];
//trabajo hora extra
$The =$_POST["The"];
//valor hora extra
$Vhe=$Vth * 1.25;
//salario base
$Sb=$Th*$Vth;
//salario de horas extra
$Sbe=$The*$Vhe;
//salario neto
$Sn= $Sb + $Sbe;


//EY HERMANASOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO FLATA LAS DE DUCCIONES Y LO DEMAS Y LOS OTROS 12 EJERCICIOS, MAL HAY


//========================================================================================
echo "El trabajador ". $Nombre . "<br>";
echo "Recibe un salario base de ". $Sb . "<br>";
echo "Recibe por sus horas extra ". $Sbe ."<br>";
echo "El salario neto es de ". $Sn ."<br>";

?>

<!DOCTYPE html>
<html lang="es">
<body>
    <br>
    <br>
<!-- Un boton para volver xD -->
    <a href="Ej11.html" ><button style="color: black;">Volver</button> </a> 

</body>
</html>