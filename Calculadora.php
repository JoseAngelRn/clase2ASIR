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
    function raiz_cuadrada($num1){
        $res = sqrt($num1);
            print "El resultado es: ".$res."</br>";
        }

#FUNCIÓN ELEVAR AL CUADRADO
    function elevar_cuadrado($num1){
        $res = $num1 * $num1;
            print "El resultado es: ".$res."</br>";
        }

#FUNCIÓN ELEVAR AL CUBO
    function elevar_cubo($num1){
        $res = $num1 * $num1 * $num1;
            print "El resultado es: ".$res."</br>";
        }

#FUNCIÓN ELEVAR A CUALQUIER EXPONENTE
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

#RECOGIDA DE DATOS
$num1 = $_POST["Numero1"];
$num2 = $_POST["Numero2"];
$selector = $_POST["operacion"];
$base = $num1;
$exp = $num2;
$final = $num1;

#REALIZACIÓN DE VARIABLES
switch ($selector) {
    case 'suma':
        suma($num1, $num2);
        break;

    case 'resta':
        resta($num1, $num2);
        break;

    case 'multiplicacion':
        multiplicacion($num1, $num2);
        break;

    case 'division':
        division($num1, $num2);
        break;
    case 'modulo':
        modulo($num1, $num2);
        break;

    case 'raiz_cuadrada':
        raiz_cuadrada($num1);
        break;
    case 'elevar_cuadrado':
        elevar_cuadrado($num1);
        break;
    case 'elevar_cubo':
        elevar_cubo($num1);
        break;
    case 'elevar_exponente':
        elevar_exponente($base,$exp);
        break;
    case 'fibonacci':
        fibonacci($final);
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