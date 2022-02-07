<?php

#Comprobación de si existe el fichero

# para subir un nivel y encontrar un documento ../nombrearchivo
if (file_exists("pruebafichero.txt") == true) {
    echo "El fichero existe"."<br>";
} else {
    echo "No está el fichero"."<br>";
}

#Crear un fichero

#La a significa de solo escritura, puntero al final
$fichero = fopen("NuveoArchivo.txt","a");
#Comrpobación
if ($fichero == false) {
    echo "Error no se ha creado el fichero "."<br>";
} else {
    echo "Se ha creado el fichero correctamente"."<br>";
}
#Cerrar el fichero
fclose($fichero);

#w escritura y lectura, el puntero al principio recomendable
$fichero2 = fopen("NuveoArchivo.txt", "w+");
#Comrpobación
if ($fichero2 == false) {
    echo "Error no se ha creado el fichero "."<br>";
} else {
    fwrite($fichero2, "Miguel Romero Perez\r\n");
    fwrite($fichero2, "Manuel Martinez Barranco\r\n");
}
#Cerrar el fichero
fclose($fichero2);




?>