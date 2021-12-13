<?php

#Esto no se haría así
echo "Pruebaficheros.txt"."<br>";

#Para mostrar el contenido de un fichero
#El numero que aparece al final es lo que pesa el fichero
echo readfile("Pruebaficheros.txt")."<br>";
#Muestra el tamaño del fichero
echo filesize("Pruebaficheros.txt")."<br>";

#APERTURA, LECTURA Y CIERRE DE UN FICHERO
$varFopen = fopen("Pruebaficheros.txt","r") or die ("Manule fuiste un fallo al nacer");
$varpeso = filesize("Pruebaficheros.txt");

echo fread($varFopen, $varpeso);
fclose($varFopen);


?>