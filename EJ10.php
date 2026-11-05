<?php
$cheA=$_POST["cheA"];
$DcheAaPs= $cheA * 9568.71;
//------------------------------
$draG=$_POST["draG"];
$DdraGaff= $draG/22.69;
//------------------------------
$Ps=$_POST["Ps"];
$PsAd=$Ps / 122499;
$PsAli=$Ps / 92.89; 


//---------------------------------------------------------------
echo "Sus chelines equivalen a ".$DcheAaPs ." pesetas" ."<br>";
echo "Sus dracmas griegos equivalen a ".$DdraGaff ." francos franceses" ."<br>";
echo "Sus pesetas equivalen a ".$PsAd ." dólares" ."<br>";
echo "Sus pesetas equivalen a ".$PsAli ."  liras italianas" ."<br>";
?>

<!DOCTYPE html>
<html lang="es">
<body>
    <br>
    <br>
<!-- Un boton para volver xD -->
    <a href="Ej10.html" ><button style="color: black;">Volver</button> </a> 

</body>
</html>