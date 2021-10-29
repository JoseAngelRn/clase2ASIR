<?php


#RECOGIDA DE DATOS
$text1 = $_POST["texto1"];
$text2 = $_POST["texto2"];
$text3 = $_POST["texto3"];
$selector = $_POST["operacion"];

#FUNCIÓN CONTAR CARACTERES
function cuentacaracteres($text1){
    $res = strlen($text1);
        print "El número de caracteres es: ".$res."</br>";
}
#FUNCIÓN CONTAR PALABRAS
function cuentapalabras($text1){
    $res = str_word_count($text1);
        print "El número de palabras es: ".$res."</br>";
}
#FUNCIÓN INVERTIR
function invierte($text1){
    $res = strrev($text1);
        print "El texto invertido es: ".$res."</br>";
}
#FUNCIÓN BUSQUEDA
function busqueda($text1,$text2){
    $res = strpos($text1,$text2);
        print "".$res."</br>";
}
#FUNCIÓN REEMPLAZAR
function reemplazar($text1,$text2,$text3){
    $res = str_replace($text1,$text2,$text3);
        print "Palabra reemplazada".$res."</br>";
}

switch ($selector) {
    case 'cuentacaracteres':
        cuentacaracteres($text1);
        break;
    case 'cuentapalabras':
        cuentapalabras($text1);
        break;
    case 'invierte':
        invierte($text1);
        break;

    case 'busqueda':
        busqueda($text1,$text2);
        break;
    case 'reemplazar':
        reemplazar($text1,$text2,$text3);
        break;
    default:
    echo "Elija otra selección";
        break;
}

?>