<?php

$comp=intval(readline("poner tu nota: "));



if($comp>=90):



    echo("aprobavo sobresaliente");




else:
   $operador=($comp>=60)? "es aprobado":"es reprobado";



   echo ("$operador");


endif;

?>