<HTML lang="es">
<HEAD>
<meta charset="UTF-8">
<meta NAME="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title> tarea 11</title>
<body>
<?php

$nombre='jose figueroa';
$edad=21;
$beca=3500.50;
$estatus=true;
echo"TIPOS DE VARIABLESs<br>";
echo $nombre.'<br/>';
echo $edad.'<br/>';
echo $beca.'<br/>';
echo $estatus.'<br/>';
echo "concatenacion<br/><br/><br/>";
echo $nombre.' tiene '.$edad.' años de edad y gana '.$beca.'<br/>';

$numer1=20;
$numer2=15;
$suma = $numer1 + $numer2;
$resta=$numer1 - $numer2;
$multi= $numer1 * $numer2;
$div= $numer1 / $numer2;
$rec= $numer1 % $numer2;
$incr= $numer1++;
$decr= $numer1--;

echo 'la suma es '.$suma.'<br/>';
echo ' la resta es '. $resta.' <br/>';
echo'la multiplicacion es '. $resta.'<br/>';
echo 'la division es '.$div.'<br/>';
echo 'el residuo es '.$rec.'<br/>';
echo 'el incremento es '.$incr.'<br/>';
echo 'el decremento es '.$decr.'<br/>';



?>

</body>
</HTML>