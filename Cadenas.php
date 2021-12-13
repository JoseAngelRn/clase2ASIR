<?php
INCLUDE 'FuncionCadenas.php';

#RECOGIDA DE DATOS
$text1 = $_POST["texto1"];
$text2 = $_POST["texto2"];
$text3 = $_POST["texto3"];
$selector = $_POST["operacion"];

#SWITCH
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
        reemplazar($text3,$text2,$text1);
        break;
    default:
    echo "Elija otra selección";
        break;
}
?>