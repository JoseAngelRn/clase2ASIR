<?php

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
        print "La palabra está en la posición: ".$res."</br>";
}
#FUNCIÓN REEMPLAZAR
function reemplazar($text3,$text2,$text1){
    $res = str_replace($text3,$text2,$text1);
        print "El nuevo texto es: ".$res."</br>";
}


?>