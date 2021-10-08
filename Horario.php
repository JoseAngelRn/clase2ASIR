<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <head>
            <style>
            table,
            th,
            td {
                border: 3px solid lightseagreen;
                width: auto;
                border-collapse: collapse;
                background: lightgoldenrodyellow;
                color: black;
            }
            h4 {
                color: darkred;
            }
            strong{
                color: darkblue;
            }
            </style>
</head>
<body>
    <?php

    echo "<h4><u>Ejercicio horario</u></h4>";
    $dia = date("l");
    $hora = date("G");
    $hora2 = date("G:i");

    switch ($dia) {
        case 'Monday':
            echo "El dia de hoy es: "."<strong>$dia</strong>"."<br>";
            echo "La hora de hoy es: "."<strong>$hora2</strong>"."<br>";
            if ($hora == 8) {
                echo "Estamos en: <strong>Aplicaciones web</strong>"."<br>";
            }
            elseif ($hora == 9) {
                echo "Estamos en: <strong>Aplicaciones web</strong>"."<br>";
            }
            elseif ($hora == 10) {
                echo "Estamos en: <strong>Aplicaciones web</strong>"."<br>";
            }
            elseif ($hora == 11) {
                echo "<strong>Estamos en el recreo</strong>"."<br>";
            }
            elseif ($hora == 12) {
                echo "Estamos en: <strong>Servcios en red</strong>"."<br>";
            }
            elseif ($hora == 13) {
                echo "Estamos en: <strong>Servcios en red</strong>"."<br>";
            }
            elseif ($hora == 14) {
                echo "Estamos en: <strong>Servcios en red</strong>"."<br>";
            }
            else {
                echo "<strong>Estamos en casa"."<br>";
            }

            echo "Y el horario es:
            <table>
            <tr>
                <td>Aplicaciones web</td>
            </tr>
            <tr>
                <td>Aplicaiones web</td>
            </tr>
            <tr>
                <td>Aplicaciones web</td>
            </tr>
            <tr>
                <td>Servcios en red</td>
            </tr>
            <tr>
                <td>Servicios en red</td>
            </tr>
            <tr>
                <td>Servicios en red</td
            </tr>
            </table>"."<br>";
            break;

        case 'Tuesday':
            echo "El dia de hoy es: "."<strong>$dia</strong>"."<br>";
            echo "La hora de hoy es: "."<strong>$hora2</strong>"."<br>";
            if ($hora == 8) {
                echo "Estamos en: <strong>Administracion de S.O</strong>"."<br>";
            }
            elseif ($hora == 9) {
                echo "Estamos en: <strong>Administracion de S.O</strong>"."<br>";
            }
            elseif ($hora == 10) {
                echo "Estamos en: <strong>Administracion de S.O</strong>"."<br>";
            }
            elseif ($hora == 11) {
                echo "<strong>Estamos en el recreo</strong>"."<br>";
            }
            elseif ($hora == 12) {
                echo "Estamos en: <strong>Seguridad informatica</strong>"."<br>";
            }
            elseif ($hora == 13) {
                echo "Estamos en: <strong>Empresas</strong>"."<br>";
            }
            elseif ($hora == 14) {
                echo "Estamos en: <strong>Empresas</strong>"."<br>";
            }
            else {
                echo "<strong>Estamos en casa</strong>"."<br>";
            }

            echo "Y el horario es:  
            <table>
            <tr>
                <td>Administracion de S.O</td>
            </tr>
            <tr>
                <td>Administracion de S.O</td>
            </tr>
            <tr>
                <td>Administracion de S.O</td>
            </tr>
            <tr>
                <td>Seguridad informatica</td>
            </tr>
            <tr>
                <td>Empresas</td>
            </tr>
            <tr>
                <td>Empresas</td>
            </tr>
            </table>"."<br>";
            break;

        case 'Wednesday':
            echo "El dia de hoy es: "."<strong>$dia</strong>"."<br>";
            echo "La hora de hoy es: "."<strong>$hora2</strong>"."<br>";
            if ($hora == 8) {
                echo "Estamos en: <strong>Administracion de S.O</strong>"."<br>";
            }
            elseif ($hora == 9) {
                echo "Estamos en: <strong>Administracion de S.O</strong>"."<br>";
            }
            elseif ($hora == 10) {
                echo "Estamos en: <strong>Administracion de S.O</strong>"."<br>";
            }
            elseif ($hora == 11) {
                echo "<strong>Estamos en el recreo</strong>"."<br>";
            }
            elseif ($hora == 12) {
                echo "Estamos en: <strong>Servicios en red</strong>"."<br>";
            }
            elseif ($hora == 13) {
                echo "Estamos en: <strong>Servicios en red</strong>"."<br>";
            }
            elseif ($hora == 14) {
                echo "Estamos en: <strong>Servicios en red</strong>"."<br>";
            }
            else {
                echo "<strong>Estamos en casa</strong>"."<br>";
            }

            echo "Y el horario es: 
            <table>
            <tr>
                <td>Administracion de S.O</td>
            </tr>
            <tr>
                <td>Administracion de S.O</td>
            </tr>
            <tr>
                <td>Administracion de S.O</td>
            </tr>
            <tr>
                <td>Servicios en red</td>
            </tr>
            <tr>
                <td>Servicios en red</td>
            </tr>
            <tr>
                <td>Servicios en red</td>
            </tr>
            </table>"."<br>";
            break;

        case 'Thursday':
            echo "El dia de hoy es: "."<strong>$dia</strong>"."<br>";
            echo "La hora de hoy es: "."<strong>$hora2</strong>"."<br>";
            if ($hora == 8) {
                echo "Estamos en: <strong>Base de datos</strong>"."<br>";
            }
            elseif ($hora == 9) {
                echo "Estamos en: <strong>Base de datos</strong>"."<br>";
            }
            elseif ($hora == 10) {
                echo "Estamos en: <strong>Base de datos</strong>"."<br>";
            }
            elseif ($hora == 11) {
                echo "<strong>Estamos en el recreo</strong>"."<br>";
            }
            elseif ($hora == 12) {
                echo "Estamos en: <strong>Seguridad informatica</strong>"."<br>";
            }
            elseif ($hora == 13) {
                echo "Estamos en: <strong>Ingles</strong>"."<br>";
            }
            elseif ($hora == 14) {
                echo "Estamos en: <strong>Ingles</strong>"."<br>";
            }
            else {
                echo "<strong>Estamos en casa</strong>"."<br>";
            }

            echo "Y el horario es:  
            <table>
            <tr>
                <td>Base de datos</td>
            </tr>
            <tr>
                <td>Base de datos</td>
            </tr>
            <tr>
                <td>Base de datos</td>
            </tr>
            <tr>
                <td>Seguridad informatica</td>
            </tr>
            <tr>
                <td>Ingles</td>
            </tr>
            <tr>
                <td>Ingles</td>
            </tr>
            </table>"."<br>";
            break;

        case 'Friday':
            echo "El dia de hoy es: "."<strong>$dia</strong>"."<br>";
            echo "La hora de hoy es: "."<strong>$hora2</strong>"."<br>";
            if ($hora == 8) {
                echo "Estamos en: <strong>Ingles</strong>"."<br>";
            }
            elseif ($hora == 9) {
                echo "Estamos en: <strong>Seguridad informatica</strong>"."<br>";
            }
            elseif ($hora == 10) {
                echo "Estamos en: <strong>Seguridad informatica</strong>"."<br>";
            }
            elseif ($hora == 11) {
                echo "<strong>Estamos en el recreo</strong>"."<br>";
            }
            elseif ($hora == 12) {
                echo "Estamos en: <strong>Aplicaciones web</strong>"."<br>";
            }
            elseif ($hora == 13) {
                echo "Estamos en: <strong>Empresas</strong>"."<br>";
            }
            elseif ($hora == 14) {
                echo "Estamos en: <strong>Empresas</strong>"."<br>";
            }
            else {
                echo "<strong>Estamos en casa</strong>"."<br>";
            }

            echo "Y el horario es:  
            <table>
            <tr>
                <td>Ingles</td>
            </tr>
            <tr>
                <td>Seguridad informatica</td>
            </tr>
            <tr>
                <td>Seguridad informatica</td>
            </tr>
            <tr>
                <td>Aplicaciones web</td>
            </tr>
            <tr>
                <td>Empresas</td>
            </tr>
            <tr>
                <td>Empresas</td>
            </tr>
            </table>"."<br>";
            break;

        default:
        echo "El dia de hoy es: "."<strong>$dia<strong>"."<br>";
        echo "La hora de hoy es: "."<strong>$hora2</strong>"."<br>";
            break;
    }
    ?>
     <a href="paginainicio.html"> Volver atras</a>
</body>
</html>