<?php
$datosrecogidos = $_GET["texto1"];


#Esto no se haría así
echo "Pruebaficheros.txt"."<br>";

#Para mostrar el contenido de un fichero
#El numero que aparece al final es lo que pesa el fichero
echo readfile("Pruebaficheros.txt")."<br>";
#Muestra el tamaño del fichero
echo filesize("Pruebaficheros.txt")."<br>";

#APERTURA, LECTURA Y CIERRE DE UN FICHERO
$varFopen = fopen("Pruebaficheros.txt","r") or die ("Manule fuiste un fallo al nacer"); #abrir el recurso

$varpeso = filesize("Pruebaficheros.txt"); #Meto el peso en una variable

echo fread($varFopen, $varpeso); #Leer
fclose($varFopen); #Cerrar el recurso

#ESCRIBIR UN FICHERO, IMPORTANTE QUE ESTARIAMOS SOBREESCRIBIENDO EL ARCHIVO(w), con (a) no se sobreescribe
$varFopen = fopen("Pruebaficheros.txt","w") or die ("Manule fuiste un fallo al nacer"); #abrir el recurso
$nuevotexto = "No se en que trabaja el novio de mi hermana";
$nuevotexto2 = $datosrecogidos;

fwrite($varFopen, "Prefiero a mi padre el tuerto mas que el camionero"); #Escribimos el archivo

fclose($varFopen);

?>