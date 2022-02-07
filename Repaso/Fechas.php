<?php

echo date("Y")."<br>";
echo date("D M Y")."<br>";
echo date("d/m/y")."<br>";
echo date("d/m/y h:i:s")."<br>";

#Zonas UTC
echo "Estoy en la zona de: ".date_default_timezone_get()."<br>";
echo "Fecha: ".strftime("%A, %d de %B del %Y - %H:%M:%S")."<br>";

echo "<br>";

date_default_timezone_set("Europe/London");
echo "Estoy en la zona de: ".date_default_timezone_get()."<br>";
echo "Fecha: ".strftime("%A, %d de %B del %Y - %H:%M:%S")."<br>";


?>