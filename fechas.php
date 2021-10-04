<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Fechas
    <?php
    echo "Hoy es: ".date("l");
    ?>
    </title>
</head>
<body>
    <h2>Ejercicio de tratamiento de fechas</h2>
    <p>Vamos a aprender a tratar fechas en php y funcionalidades</p>
    <br>
    <?php
    echo "vamos a trabajar con fechas"."<br>";
    echo "Hoy es: ".date("l")."<br>";
    echo "La fecha actual es: ".date("j/n/Y")."<br>";


    echo "<br>"."<br>"."<br>";
    
#Ejercicio if

    echo "<h4><u>Ejercicio ejemplo if</u></h4>";
    $hora = date("H");

    echo "La hora es: ".date("H:i:s")."<br>";
    if($hora<15){
        echo "Lo siento, sigo en clases."."<br>";
    }else{
        echo "Estoy en mi casa"."<br>";
    }


    echo "<br>"."<br>"."<br>";

#Ejercicio if-Else

    echo "<h4><u>Ejercicio ejemplo if-else</u></h4>";
    $segundos = date("s");

    if($segundos<10){
        echo "Primeros 10 segundos"."<br>";
        echo "Segundos: ".$segundos;
    }elseif($segundos>50){
        echo "Ultimos 10 segundos"."<br>";
        echo "Segundos: ".$segundos;
    }else{
        echo "Segundos intermedios"."<br>";
        echo "Segundos: ".$segundos;
    }

    echo "<br>"."<br>"."<br>";

#Ejercicio switch

    echo "<h4><u>Ejercicio ejemplo switch</u></h4>";
    $colores = "Rojo";

    switch ($colores) {
        case 'Rojo':
            echo "La sangre es de color: ".$colores."<br>";
            break;

        case 'Verde':
            echo "La Hierba es de color: ".$colores."<br>";
            break;

        case 'Amarillo':
            echo "El sol es de color: ".$colores."<br>";
            break;

        case 'Azul':
            echo "El mar es de color: ".$colores."<br>";
            break;

        default:
            echo "El color ".$colores."No está registrado"."<br>";
            break;
    }
    ?>
    <br><br><br><br>
    <a href="paginainicio.html"> Volver atras</a>
</body>
</html>