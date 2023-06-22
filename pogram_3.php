<?php

$num=intval(readline("ingrese un numero: "));


$operador=($num %3==0 and $num %5==0)? "es divisible por 3 y 5":"no es divisible por 3 y 5";


echo ("$operador");


?>