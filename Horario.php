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

    switch ($dia) {
        case 'Monday':
            echo "El dia de hoy es: ".$dia."<br>";
            echo "Y el horario es:
            <body>
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
                <td>Servios en red</td>
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
            break;
    }
    ?>
     <a href="paginainicio.html"> Volver atras</a>
</body>
</html>