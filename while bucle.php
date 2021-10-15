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

    echo "<h4>Ejemplo de bucle while</h4>"."<br>";
    $numero = 0;
    
    while ($numero <= 10) {
        #Paso 1: Mostrar mi número
        echo "Mi número es: ".$numero."<br>";
        #Paso 2: Actualizar la variable número
        $numero++;
    }
    echo "<strong>Mi cuenta ha terminado.</strong>"."<br>";


    echo "<h4>Ejemplo de bucle while de 5 en 5</h4>"."<br>";
    $numero1 = 0;
    
    while ($numero1 <= 100) {
        #Paso 1: mostrar mi número
        echo "Mi número es: ".$numero1."<br>";
        #Paso 2: Actualizar la variable número
        $numero1+=5; #$numero1=$numero1+5;
    }
    echo "<strong>Mi cuenta ha terminado.</strong>"."<br>";


    echo "<h4>Ejemplo de bucle while numero aleatorios</h4>"."<br>";
    $numero2 = 0;
    $aleatorio = rand(0,100);
    
    while ($numero2 <= $aleatorio) {
        #Paso 1: mostrar mi número
        echo "Mi número aleatorio es: ".$aleatorio."<br>";
        echo "Mi número es: ".$numero2."<br>";
        #Paso 2: Actualizar la variable número
        $numero2++;
    }
    echo "<strong>Mi cuenta ha terminado.</strong>"."<br>"
    ?>
</body>
</html>