<?php
#Función unir vuelos
function combinar($vuelo1,$vuelo2){
    $Combinar_Vuelos= array_merge($vuelo1,$vuelo2);
        print_r($Combinar_Vuelos);
}
#Diferencias entre vuelos
function diferencias($vuelo1,$vuelo2){
    $Diferecias_Vuelos= array_diff($vuelo1,$vuelo2);
        print_r($Diferecias_Vuelos);
}
#Ordena vuelos
function ordenar($vuelo1){
    $Ordena_Vuelos= sort($vuelo1);
        print_r($vuelo1);
}
#Información común
function InfoComun($vuelo1,$vuelo2){
    $Informacion_Comun= array_intersect($vuelo1,$vuelo2);
        print_r($Informacion_Comun);
}

#Recogida de variables
$ = $_POST[""];
$ = $_POST[""];
$selector = $_POST["opciones"];

#ARRAY
$vuelo1 = array();
$vuelo2 = array();


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

?>