<?php

$comp=readline("poner un numero: ");

$operador=(($comp %4==0 and $comp %100!=0) or ($comp %400 == 0))? "es un año bisiesto":"no es un año bisiesto";

echo("$operador");


?>