<?php

$nombre=readline("ingresar el nombre del trabajador:\n");
$sueldo=readline("ingresar sueldo\n");

$resultado=$sueldo*0.15;
$suma=$sueldo+$resultado;
echo"nombre del trabajador:$nombre\n";
echo"<br>";
echo"sueldo base:$sueldo\n";
echo"<br>";
echo"aumento:$resultado\n";
echo"<br>";
echo"sueldo final:$suma\n";
?>