<?php

echo date("Y")."<br>";
echo date("D M Y")."<br>";
echo date("d/m/y")."<br>";
echo date("d/m/y h:i:s")."<br>";

#Zonas UTC
echo "Estoy en la zona de: ".date_default_timezone_get()."<br>";
echo "Fecha: ".strftime("%A, %d de %B del %Y - %H:%M:%S")."<br>";

echo "<br>";

date_default_timezone_set("Indian/Maldives");
echo "Estoy en la zona de: ".date_default_timezone_get()."<br>";
echo "Fecha: ".strftime("%A, %d de %B del %Y - %H:%M:%S")."<br>";

#07/02/2022 09:00:00
$fechita = mktime("09","00","00","02","07","2022");
echo "<br>";
echo $fechita."<br>";
echo date("d/m/y - h:i:s",$fechita);
echo "<br>";
$fechitaa = mktime(9,0,0,2,7,2022);
echo "<br>";
echo $fechitaa."<br>";
echo date("d/m/y - h:i:s",$fechitaa);

/*
1 minuto = 60 segundos
1 hora = 60*60 = 3600 segundos
1 dia = 24*3600 = 86400 segundos
*/

echo "<br>"."<br>";

#Suma 1 dia y 2 horas
$fechita = $fechita + 86400 + 7200;
echo date("d/m/y - h:i:s",$fechita);

echo "<br>"."<br>";

#Diferencia entre dos fechas
$fecha1 = mktime(9,0,0,2,7,2022);
$fecha2 = mktime(12,0,0,2,9,2022);
$diff = $fecha2 - $fecha1;
$diff_minutos = $diff/60; #Saber la diferencia de los minutos
$diff_horas = $diff/3600; #Saber la diferencia de las horas
$diff_dias = $diff/86400; #Saber la diferencia de los dias



echo "Fecha origen: ".date("d/m/y - h:i:s",$fecha1)."<br>";
echo "Fecha destino: ".date("d/m/y - h:i:s",$fecha2)."<br>";

echo "Faltan: ".$diff_minutos." segundos"."<br>";
echo "Faltan: ".$diff_horas." segundos"."<br>";
echo "Faltan: ".$diff_dias." segundos"."<br>";





?>