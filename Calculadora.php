<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <style>
        h2 {
            color: rgb(16, 138, 0);
            font-size: 150%;
        }
        h3 {
            color: rgb(153, 82, 0);
            font-size: 150%;
        }
        strong{
            color: darkslategray;
        }
        fieldset{
            border-style: solid;
            border-width: 4px;
            border-color: lightcoral;
            background-color: lightyellow;
            width:500px;
        }
        </style>
</head>
<body>
    <form>
        <fieldset>
        <legend><h2>Calculadora</h2></legend>
                <label><strong>Número 1</strong></label>
                    <input name="Numero1" type="text" value=""></br>
                <label><strong>Número 2</strong></label>
                    <input name="Número2" type="text" value="">
                </br></br>
                    <button name="" type="button">+</button>
                    <button name="" type="button">-</button>
                    <button name="" type="button">x</button>
                    <button name="" type="button">/</button>
                    <button name="" type="button">%</button>
                    <button name="" type="button">√</button>
                    <button name="" type="button">x²</button>
                    <button name="" type="button">x³</button>
                    <button name="" type="button">xⁿ</button>

                </br></br></br>
                    <input name="" type="submit" value="Resolver">
                </fieldset>
        </form>
<br>
<h3>Resultado:</h3>
<a href="paginainicio.html"><input name="" type="button" value="Página inicio"></a><br>
<?php
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

$prueba1=10;
$prueba2=2;
$prueba3=20;
suma($prueba1,$prueba2);
resta($prueba1,$prueba2);
multiplicacion($prueba1,$prueba2);
division($prueba1,$prueba2);
modulo($prueba1,$prueba2);
raiz_cuadrada($prueba3);
elevar_cuadrado($prueba1);
elevar_cubo($prueba1);
elevar_exponente($prueba1,$prueba2);
fibonacci($prueba3);
?>
</body>
</html>