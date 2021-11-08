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

#ARRAYS ESTÁNDAR
print "<br><h3>ARRAY 'ESTÁNDAR'</h3>"."</br>";

    #Forma 1
$numerosP = array(2,4,6,8,10);
print_r($numerosP);
print "</br>";

print "Muestro lo que hay en la posición 3: ".$numerosP[3]."</br>";
print "</br>";

    #El count lo hacemos para saber cuantos números hay
$cuentaNumerosP = count($numerosP);
print "Valor de cuenta ARRAY: ".$cuentaNumerosP."</br>";

    #para no mostar los valor uno a uno usamos el for
for ($i=0; $i < $cuentaNumerosP; $i++) { 
    print "Muestro lo que hay en la posición ".$i.": ".$numerosP[$i]."</br>";
}
print "</br>";

    #Forma 2
$numerosI = [1,3,5,7,9];
print_r($numerosI);
print "</br>";


#ARRAYS ASOCIATIVOS
print "<br><h3>ARRAY 'ASOCIATIVOS'</h3>"."</br>";

$potencias2 = array(1=>2, 2=>4, 3=>8);
$capitales = ["Andalucia"=>"Sevilla", "Madrid"=>"Madrid", "Aragón"=>"Zaragoza","Baleares"=>"Palma de Mayorca"];
print_r($potencias2);
print "</br>";
print_r($capitales);
print "</br>";

    #Añadir elementos a un arrray

$capitales["Cataluña"]="Barcelona";
print_r($capitales);
print "</br>";

$capitales["Andalucia"]="Almeria";
print_r($capitales);
print "</br>";

$cuentaLetras=strlen($capitales["Andalucia"]);
echo $cuentaLetras."</br>";

$notasAsignaruraMigue=["LM"=>0, "FOL"=>4, "PAR"=>3, "ISO"=>0, "FH"=>0, "BB"=>4];
print_r($notasAsignaruraMigue);
print "</br>";
print "</br>";
    #Unión de Arrays

$coches1= array("Seat", "Renault", "Dacia");
$coches2= ["BMW","Audi"];
print_r($coches1);
print "</br>";
print_r($coches2);
print "</br>";

print "Unicón de arrays";
print "</br>";

$union1con2= $coches1+$coches2;
print_r($union1con2);
print "</br>";

$union2con1= $coches2+$coches1;
print_r($union2con1);
print "</br>";
print "</br>";

    #Borrar un elemento
$coches3= array("Seat", "Renault", "Dacia", "BMW", "Audi");
print_r($coches3);
print "</br>";

unset($coches3[1]);
print_r($coches3);
print "</br>";
print "</br>";

#Copiar matrices
$copiaCapitales= $capitales;
print_r($copiaCapitales);
print "</br>";



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