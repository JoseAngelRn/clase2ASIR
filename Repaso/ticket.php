<?php
$Nombre = $_POST["Nombre"];
$Apellidos = $_POST["Apellidos"];
$Edad = $_POST["Edad"];

$fichero = fopen("NuevoArchivo.txt","a+");

if ($fichero == false) {
    echo "Error no se ha creado el fichero "."<br>";
} else {
    echo "Se ha creado el fichero correctamente"."<br>";
    fwrite($fichero, $Nombre."\r\n");
    fwrite($fichero, $Apellidos."\r\n");
    fwrite($fichero, $Edad."\r\n");
    fflush($fichero);
}

$peso_archivo = filesize("NuevoArchivo.txt");
echo fread($fichero, $peso_archivo);
fclose($fichero);

?>