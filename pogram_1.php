<?php

$comp=intval(readline("poner un numero: "));



if($comp):

    $operador=($comp>0)? "es positivo":"es negativo";



    echo ("$operador");



else:
    echo("es igual a cero");


endif;


?>