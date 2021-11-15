<?php

#Recogida de variables
if(isset($_POST["vuelo1"]) && isset($_POST["vuelo1"])){
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
function combinar($vuelo1,$vuelo2){
    $Combinar_Vuelos= array_merge($vuelo1,$vuelo2);
        echo "<b>vuelos unidos: </b></br>";
        print_r($Combinar_Vuelos);
}
#Diferencias entre vuelos
function diferencias($vuelo1,$vuelo2){
    $Diferecias_Vuelos= array_diff($vuelo1,$vuelo2);
        echo "<b>Diferencias entre vuelos: </b></br>";
        print_r($Diferecias_Vuelos);
}
#Ordena vuelos
function ordenar($vuelo1){
    $Ordena_Vuelos= sort($vuelo1);
        echo "<b>Datos del vuelo ordenado: </b></br>";
        print_r($vuelo1);
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
        function combinar($vuelo1,$vuelo2);
        break;

    case 'DifVuelos':
        function diferencias($vuelo1,$vuelo2);
        break;

    case 'OrdVuelos':
        function ordenar($vuelo1);
        break;

    case 'InfoComun':
        function InfoComun($vuelo1,$vuelo2);
        break;

    default:
        echo "Elija otra opción";
        break;
    }
}
?>