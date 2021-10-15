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


$prueba1=10;
$prueba2=2;
suma($prueba1,$prueba2);
resta($prueba1,$prueba2);
multiplicacion($prueba1,$prueba2);
division($prueba1,$prueba2);
modulo($prueba1,$prueba2);



?>
</body>
</html>