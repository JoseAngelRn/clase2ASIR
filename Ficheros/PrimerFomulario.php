<?php
#RECOGIDA DE VARIABLES
$texto = $_GET["text"];
$opcion = $_GET["opcion"];

if ($opcion <= 1) {
$Fopen = fopen("ficherosprimerFormulario.txt","a") or die ("ERROR");

fwrite($Fopen, $texto. "<br>"); #concatenando un br hacemos un salto de linea, si concatenamos un \n hacemos un espacio
fclose($Fopen);
echo "Se añadió el texto al fichero";
}
else{
    echo "Este es el contenido del documento:"."<br>";
    $Fopen = fopen("ficherosprimerFormulario.txt","r") or die ("ERRROR");
    $peso = filesize("ficherosprimerFormulario.txt");
    
    echo fread($Fopen, $peso);
    fclose($Fopen);
}

?>