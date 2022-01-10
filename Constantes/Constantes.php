<?php

#Constantes

$pi = pi();

echo "Numero Pi: ". $pi."<br>";

define ("GRAVEDAD",9.8); #Para que nadie pueda cambiar la variable

echo "Constante de la gravedad: ".GRAVEDAD."<br>";

#Arrays y Tratamiento

$Numeros = array(2,8,4,7,5,GRAVEDAD);

$Cantidad_Numeros = count($Numeros);
$Desordena = shuffle($Numeros); #shuffle para desordenar el array

echo "Cuenta: " .$Cantidad_Numeros."<br>";
echo "Desordena: " .$Desordena."<br>";
print_r ($Numeros)."<br>";
echo "<br>";

for ($i=0; $i < $Cantidad_Numeros; $i++) { 
    echo "Valor de la posición ".$i." : ".$Numeros[$i]."<br>";
}

echo "<br> For each <br>";

#Lo que quiero recorrer/ variable que en la que lo meto

foreach ($Numeros as $Numerito) {
echo $Numerito . "<br>";
}
echo "<br>";

#Array asociativo

$Provincias = array(
    "Andalucia" => "Sevilla",
    "Madrid" => "Madrid",
    "Aragon" => "Zaragoza",
    "Pais vasco" => "Bilbao"
);
print_r ($Provincias);

echo "<br>";

foreach ($Provincias as $Provincita => $Capitalita) {
    echo "La comunidad autonoma es: ".$Provincita." y su capital es: " .$Capitalita."<br>";
}















?>