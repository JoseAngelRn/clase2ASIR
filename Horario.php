<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    echo "<h4><u>Ejercicio horario</u></h4>";
    $dia = date("l");

    switch ($dia) {
        case 'Lunes':
            echo $dia."<br>";
            echo "El horario de hoy es:"."<br>"
            break;

        case 'Martes':
            echo $dia."<br>";
            echo "El horario de hoy es: "."<br>";
            break;

        case 'Miercoles':
            echo $dia."<br>";
            echo "El horario de hoy es: "."<br>";
            break;

        case 'Jueves':
            echo $dia."<br>";
            echo "El horario de hoy es: "."<br>";
            break;

        case 'Viernes':
            echo $dia."<br>";
            echo "El horario de hoy es: "."<br>";
            break;

        default:
        echo $dia."<br>";
            break;
    }
    ?>
</body>
</html>