<?php

#$variableSuma = $_POST["suma"];
#$variableResta = $_POST["resta"];
#$variableMultiplicacion = $_POST["multiplicacion"];
#$variableDivision = $_POST["division"];
#$variableModulo = $_POST["modulo"];
#$variableRaiz_cuadrada = $_POST["raiz_cuadrada"];
#$variableElevado_cuadrado = $_POST["elevado_cuadrado"];
#$variableElevado_cubo = $_POST["elevado_cubo"];
#$variableElevado_cualquier = $_POST["elevado_cualquier"];

#FUNCIÓN SUMA
function suma($num1,$num2){
    $res = $num1 + $num2;
        print "El resultado es: ".$res."</br>";
    }

#FUNCIÓN RESTA
function resta($num1,$num2){
    $res = $num1 - $num2;
        print "El resultado es: ".$res."</br>";
    }

#FUNCIÓN MULTIPLICACIÓN
function multiplicacion($num1,$num2){
    $res = $num1 * $num2;
        print "El resultado es: ".$res."</br>";
    }

#FUNCIÓN DIVISIÓN
function division($num1,$num2){
    $res = $num1 / $num2;
        print "El resultado es: ".$res."</br>";
    }

#FUNCIÓN MODULO
function modulo($num1,$num2){
    $res = $num1 % $num2;
        print "El resultado es: ".$res."</br>";
    }

#FUNCIÓN RAÍZ CUADRADA
    function raiz_cuadrada($num){
        $res = sqrt($num);
            print "El resultado es: ".$res."</br>";
        }

#FUNCIÓN ELEVAR AL CUADRADO
    function elevar_cuadrado($num){
        $res = $num * $num;
            print "El resultado es: ".$res."</br>";
        }

#FUNCIÓN ELEVAR AL CUBO
    function elevar_cubo($num){
        $res = $num * $num * $num;
            print "El resultado es: ".$res."</br>";
        }

#UNCIÓN ELEVAR A CUALQUIER EXPONENTE
        function elevar_exponente($base,$exp){
            $res = pow($base , $exp); 
            print "El resultado es: ".$res."</br>";
        }

#FUNCÓN FIBONACCI
    function fibonacci($final){
        $contador = 1;
        $num1 = 0;
        $num2 = 1;
        $num3 = 0;

    while ($contador <= $final) {
        $num3 = $num1 + $num2;
        $num1 = $num2;
        $num2 = $num3;
        echo "El resultado es: ".$num3."</br>";
        $contador ++;
        }
    }

#VARIABLES METODO POST
$variableNumero1 = $_POST["Numero1"];
$variableNumero2 = $_POST["Numero2"];
$slector = $_POST["operador"];


#REALIZACIÓN DE VARIABLES
switch ($selector) {
    case '+':
        suma($Num1, $num2);
        break;

    case '-':
        resta($Num1, $num2);
        break;

    case 'x':
        multiplicacion($Num1, $num2);
        break;

    case '/':
        division($Num1, $num2);
        break;

    case '%':
        modulo($Num1, $num2);
        break;

    default:
        break;
}


#PRUEBAS
#$prueba1=10;
#$prueba2=2;
#$prueba3=20;
#suma($prueba1,$prueba2);
#resta($prueba1,$prueba2);
#multiplicacion($prueba1,$prueba2);
#division($prueba1,$prueba2);
#modulo($prueba1,$prueba2);
#raiz_cuadrada($prueba3);
#elevar_cuadrado($prueba1);
#elevar_cubo($prueba1);
#elevar_exponente($prueba1,$prueba2);
#fibonacci($prueba3);
?>