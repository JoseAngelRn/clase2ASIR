<?php

#Recogida de variables
if(isset($_POST["vuelo1"]) && isset($_POST["vuelo2"])){
    $selector = $_POST["opciones"];

    $vuelo1 = $_POST["vuelo1"];
        $codigo1 = $vuelo1["Codigo1"]; 
        $ciudadorigen1 = $vuelo1["CiudadOrigen1"];
        $ciudaddestino1 = $vuelo1["CiudadDestino1"];
        $precio1 = $vuelo1["Precio1"];
        $fechasalida1 = $vuelo1["FechaSalida1"];

    $vuelo2 = $_POST["vuelo2"];
        $codigo2 = $vuelo2["Codigo2"]; 
        $ciudadorigen2 = $vuelo2["CiudadOrigen2"];
        $ciudaddestino2 = $vuelo2["CiudadDestino2"];
        $precio2 = $vuelo2["Precio2"];
        $fechasalida2 = $vuelo2["FechaSalida2"];

#Función unir vuelos
function Combinar($vuelo1,$vuelo2){
    $Combinar_Vuelos= array_merge($vuelo1,$vuelo2);
        echo "<b>vuelos unidos: </b></br>";
        print_r($Combinar_Vuelos);
}
#Diferencias entre vuelos
function Diferencias($vuelo1,$vuelo2){
    $Diferecias_Vuelos= array_diff($vuelo1,$vuelo2);
        echo "<b>Diferencias entre vuelos: </b></br>";
        print_r($Diferecias_Vuelos);
}
#Ordena vuelos
function Ordenar($vuelo1,$vuelo2){
    $Combinar_Vuelos2= array_merge($vuelo1,$vuelo2);
    $Ordena_Vuelos= ksort($Combinar_Vuelos2); #Se pude hacer también $Ordena_Vuelos= sort($Combinar_Vuelos2);
        echo "<b>Datos del vuelo ordenado: </b></br>";
        print_r($Combinar_Vuelos2);
}
#Información común
function InfoComun($vuelo1,$vuelo2){
    $Informacion_Comun= array_intersect($vuelo1,$vuelo2);
    echo "<b>Datos en común: </b></br>";
        print_r($Informacion_Comun);
}


#SELECTOR
switch ($selector) {
    case 'CombVuelos':
        Combinar($vuelo1,$vuelo2);
        break;

    case 'DifVuelos':
        Diferencias($vuelo1,$vuelo2);
        break;

    case 'OrdVuelos':
        Ordenar($vuelo1,$vuelo2);
        break;

    case 'InfoComun':
        InfoComun($vuelo1,$vuelo2);
        break;

    default:
        echo "Elija otra opción";
        break;
    }
}
?>