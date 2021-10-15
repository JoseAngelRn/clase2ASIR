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
    echo "<h4>Ejemplo de bucle For</h4>"."<br>";

    for ($cuenta = 0; $cuenta < 10 ; $cuenta ++) {
        #Paso 1: Acción
        echo "Muestra la cuenta: ".$cuenta."<br>";
}
    echo "<br>"."<br>";


#EJEMPLO DE FUNCIÓN
    $esMayor = true;

    function persona ($nombre, $edad){
        echo "Su nombre es: ".$nombre."<br>";
    if ($edad % 2 == 0) {
        echo "Su edad es: par"."<br>";
    }
    else {
        echo"Su edad es: impar"."<br>";
    }
}
#LLAMAMOS A LA FUNCIÓN
    persona("Manulon", 22);
    persona("Manulen", 91);
    persona("Manulin", 27);
    persona("Manule", 45);
    
    echo "<br>"."<br>";
#EJEMPLO DE ARRAYS
    $alumnos = array("Inachio","Paaaco","Mígue","ADAM","Manule","Ívam");
        echo "Hay ".count($alumnos)." alumnos"."<br>";
    $selecAleatorio = rand (0 , 5);

    echo "El alumno es: ".$alumnos[$selecAleatorio];
    ?>
</body>
</html>