<?php

$edad=intval(readline("cual es tu edad: "));


if($edad >= 18):
    $pregunta=readline("¿tiene licencia para conducir? digite si o no: \n");
    if($pregunta =="si"):
        echo("Puedes conducir.");

        elseif($pregunta=="no"):
            echo(" Debes tener licencia para conducir");
        
        elseif($pregunta != no and $pregunta != "si"):
            echo ("Repuesta incorrecta");
    endif;

else:
    echo ("no puedes conducir \n");


endif;

?>