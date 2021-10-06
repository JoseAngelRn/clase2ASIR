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
            border: 5px solid lightseagreen;
            width: auto;
            border-collapse: collapse;
            background: lightgoldenrodyellow;
            color: black;
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
            echo "El dia de hoy es: ".$dia."<br>";
            echo "La hora de hoy es: ".$hora."<br>";
            if ($hora == 8) {
                echo "Estamos en: Aplicaciones web"."<br>";
            }
            elseif ($hora == 9) {
                echo "Estamos en: Aplicaciones web"."<br>";
            }
            elseif ($hora == 10) {
                echo "Estamos en: Aplicaciones web"."<br>";
            }
            elseif ($hora == 11) {
                echo "Estamos en el recreo"."<br>";
            }
            elseif ($hora == 12) {
                echo "Estamos en: Servcios en red"."<br>";
            }
            elseif ($hora == 13) {
                echo "Estamos en: Servcios en red"."<br>";
            }
            elseif ($hora == 14) {
                echo "Estamos en: Servcios en red"."<br>";
            }
            else {
                echo "Estamos en casa"."<br>";
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
            echo "El dia de hoy es: ".$dia."<br>";
            echo "La hora de hoy es: ".$hora."<br>";
            if ($hora == 8) {
                echo "Estamos en: Administracion de S.O"."<br>";
            }
            elseif ($hora == 9) {
                echo "Estamos en: Administracion de S.O"."<br>";
            }
            elseif ($hora == 10) {
                echo "Estamos en: Administracion de S.O"."<br>";
            }
            elseif ($hora == 11) {
                echo "Estamos en el recreo"."<br>";
            }
            elseif ($hora == 12) {
                echo "Estamos en: Seguridad informatica"."<br>";
            }
            elseif ($hora == 13) {
                echo "Estamos en: Empresas"."<br>";
            }
            elseif ($hora == 14) {
                echo "Estamos en: Empresas"."<br>";
            }
            else {
                echo "Estamos en casa"."<br>";
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
            echo "El dia de hoy es: ".$dia."<br>";
            echo "La hora de hoy es: ".$hora."<br>";
            if ($hora == 8) {
                echo "Estamos en: Administracion de S.O"."<br>";
            }
            elseif ($hora == 9) {
                echo "Estamos en: Administracion de S.O"."<br>";
            }
            elseif ($hora == 10) {
                echo "Estamos en: Administracion de S.O"."<br>";
            }
            elseif ($hora == 11) {
                echo "Estamos en el recreo"."<br>";
            }
            elseif ($hora == 12) {
                echo "Estamos en: Servicios en red"."<br>";
            }
            elseif ($hora == 13) {
                echo "Estamos en: Servicios en red"."<br>";
            }
            elseif ($hora == 14) {
                echo "Estamos en: Servicios en red"."<br>";
            }
            else {
                echo "Estamos en casa"."<br>";
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
            echo "El dia de hoy es: ".$dia."<br>";
            echo "La hora de hoy es: ".$hora."<br>";
            if ($hora == 8) {
                echo "Estamos en: Base de datos"."<br>";
            }
            elseif ($hora == 9) {
                echo "Estamos en: Base de datos"."<br>";
            }
            elseif ($hora == 10) {
                echo "Estamos en: Base de datos"."<br>";
            }
            elseif ($hora == 11) {
                echo "Estamos en el recreo"."<br>";
            }
            elseif ($hora == 12) {
                echo "Estamos en: Seguridad informatica"."<br>";
            }
            elseif ($hora == 13) {
                echo "Estamos en: Ingles"."<br>";
            }
            elseif ($hora == 14) {
                echo "Estamos en: Ingles"."<br>";
            }
            else {
                echo "Estamos en casa"."<br>";
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
            echo "El dia de hoy es: ".$dia."<br>";
            echo "La hora de hoy es: ".$hora."<br>";
            if ($hora == 8) {
                echo "Estamos en: Ingles"."<br>";
            }
            elseif ($hora == 9) {
                echo "Estamos en: Seguridad informatica"."<br>";
            }
            elseif ($hora == 10) {
                echo "Estamos en: Seguridad informatica"."<br>";
            }
            elseif ($hora == 11) {
                echo "Estamos en el recreo"."<br>";
            }
            elseif ($hora == 12) {
                echo "Estamos en: Aplicaciones web"."<br>";
            }
            elseif ($hora == 13) {
                echo "Estamos en: Empresas"."<br>";
            }
            elseif ($hora == 14) {
                echo "Estamos en: Empresas"."<br>";
            }
            else {
                echo "Estamos en casa"."<br>";
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
        echo "El dia de hoy es: ".$dia."<br>";
        echo "La hora de hoy es: ".$hora."<br>";
            break;
    }
    ?>
     <a href="paginainicio.html"> Volver atras</a>
</body>
</html>