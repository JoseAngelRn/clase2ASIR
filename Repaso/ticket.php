<?php
$Nombre = $_POST["Nombre"];
$Apellidos = $_POST["Apellidos"];
$Edad = $_POST["Edad"];

$fichero = fopen("NuevoArchivo.txt","w+");

if ($fichero == false) {
    echo "Error no se ha creado el fichero "."<br>";
} else {
    echo "Se ha creado el fichero correctamente"."<br>";
    fwrite($fichero, $Nombre);
    fwrite($fichero, $Apellidos);
    fwrite($fichero, $Edad);
    fflush($fichero);
}


echo readfile("NuevoArchivo.txt")."<br>";
fclose($fichero);

?>