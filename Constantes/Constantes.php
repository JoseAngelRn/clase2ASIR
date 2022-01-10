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
echo "<br>";

#Añadir valores en arrays normales (Se añade al final)

$Numeros []= 3;

#Modificar un valor del array
$Numeros [0]= 3;

foreach ($Numeros as $Numerito) {
    echo $Numerito . "<br>";
    }
echo "<br>";

#Eliminar un valor de un array
 unset ($Numeros[6]);

 foreach ($Numeros as $Numerito) {
    echo $Numerito . "<br>";
    }
echo "<br>";

#Arrays multidimencionales

$Asir = array(
    array("Nombre" => "Inachio", "Frase" => "Gusano morris"),
    array("Nombre" => "Manule", "Frase" => "Tu padre el muerto"),
    array("Nombre" => "Kerry", "Frase" => "au au au"),
    array("Nombre" => "Migue", "Frase" => "k e echo")
);

print_r ($Asir);
echo "<br>";
echo "<br>";

foreach ($Asir as $Alumno) {
    echo "Frase tipica de ".$Alumno["Nombre"].": ".$Alumno["Frase"]."<br>";
}
echo "<br>";

#Funciones
$Numero1 = 10;
$Numero2 = 4;

function suma($Numero1, $Numero2){
    $res = $Numero1 + $Numero2;
    echo $res;
}
 suma ($Numero1, $Numero2);
 echo "<br>";


 #Funciones con retorno
$Numero1 = 10;
$Numero2 = 4;

function sumar($Numero1, $Numero2){
    $res = $Numero1 + $Numero2;
    return $res;
}
$sumador = sumar($Numero1, $Numero2);
 echo $sumador;
 echo "<br>";

?>