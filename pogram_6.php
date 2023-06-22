<?php

$comp=intval(readline("poner tu nota: "));



if($nota >=0 and $nota <=59):
    echo("reprobado.");
    elseif($nota >=60 and $nota <=69):
        echo("aprobado");
    elseif($nota >=70 and $nota <79):
        echo("regular");
    elseif($nota >=80 and $nota <=89):
        echo("bueno");            
    elseif($nota >=90 and $nota <=100):
        echo("exelente"); 
    
else:
    echo("numero invalido");

endif;

?>