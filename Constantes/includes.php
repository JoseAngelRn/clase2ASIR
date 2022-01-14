<?php
# Los 2 enlazan otro archivo pero el require es más restrictivo
# INCLUDE "include2.php";
# REQUIRE "include2.php";
INCLUDE_ONCE "include2.php"; # El INCLUDE_ONCE es lo mismo pero solo muestra una vez el error


echo GRAVEDAD;
echo "<br>";
echo sumar(1, 2);


resta();



?>