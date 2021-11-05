<?php

$numeros = array(8, 3, 7, 1);

$suspensos = array("Migue", "Kerry");

$coches = array("Ferrari", "Seat", "BMW", "Opel", "Mercedes");

#PARA MOSTRAR EL CONTENIDO DE UN ARRAY QUE ESTA EN LA POSICIÓN QUE LE INDIQUEMOS
echo $suspensos[0]."</br>";
echo $numeros[3]."</br>";
echo $coches[2]."</br>";

#CONTAR LOS COCHES QUE HAY COCHE
$cuentacoches= count($coches);
echo "Números de coches: ".$cuentacoches."</br>";

#QUE ME DE UN COCHE ALEATORIO
$aleatorio = rand(0, $cuentacoches-1);
echo "Coche aleatorio: ".$coches[$aleatorio]."</br>";

$parada = 0;

while ($parada < 3) {
    $aleatorio = rand(0,4);
    echo $coches[$aleatorio]."</br>";
    $parada++;
}


?>