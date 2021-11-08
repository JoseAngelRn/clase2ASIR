<?php

#BUCLES ANIDADOS DE FORMA INDEPENDIENTES
print "<br><b> BUCLE INDEPENDIENTE</b>"."<br></br>";

for ($inicio = 0; $inicio < 5; $inicio++){ #BUCLE EXTERIOR
    print "<b>Vamos por la interacción (Exterior): ".$inicio."</b></br>";
        for ($inicio2 = 0; $inicio2 < 5; $inicio2++){ #BUBLE INTERIOR
            print "Vamos por la interacción2 (Interior): ".$inicio2."</br>";
        }
}

#BUCLES ANIDADOS DE FORMA INDEPENDIENTES
print "<br><b> BUCLE DEPENDIENTE</b>"."<br></br>";

for ($varexterior = 0; $varexterior < 5; $varexterior++){
    print "<b>Muestra variable exterior: ".$varexterior."</b><br>";
        for ($varinterior = 0; $varinterior < $varexterior; $varinterior++){
            print "Muestra variavle interior: ".$varinterior."<br>";
        }
}


/*
#ARRAY NORMALES
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

#QUE ME DE 3 COCHES ALEATORIAMENTE
$parada = 0;

while ($parada < 3) {
    $aleatorio = rand(0,4);
    echo $coches[$aleatorio]."</br>";
    $parada++;
}

#ORDENAR COCHES
$cochesordenados = sort($coches);
echo "Coches ordcenados: ".$coches[$cochesordenados]."</br>";


#ARRAY ASOCIATIVOS
$alumno = array("Nombre" =>"Migue", "Apellidos" => "Kerry", "Edad" => 25, "EstaAprobado" => false);
echo "El alumno es: ".$alumno["Nombre"]." ".$alumno["Apellidos"]." ".$alumno["Edad"];
*/
?>