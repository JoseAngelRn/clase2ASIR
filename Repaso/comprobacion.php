<?php

# Campos requeridos
if (! empty($_POST)) {
    if (isset($_POST["Nombre"]) && isset($_POST["Apellidos"])) {
        echo "Por favor, introduzca información. Nombre y apellidos";
    } else {
        
        echo "Nombre: ".$_POST["Nombre"]."<br>";
        echo "Apellidos: ".$_POST["Apellidos"]."<br>";
    }
} else {
    echo "Por favor, introduzca información. Reinicia";
}





?>