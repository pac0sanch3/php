<?php

$letra = readline("Ingrese una letra: ");

if ($letra) {
    $esVocal = ($letra == 'a' || $letra == 'e' || $letra == 'i' || $letra == 'o' || $letra == 'u') ? true : false;

    if ($esVocal) {
      echo "La letra ingresada es una vocal.";
    } else {
      echo "La letra ingresada es una consonante.";
    }
} else {
    echo "No se ingresó una letra válida.";
}
?>




