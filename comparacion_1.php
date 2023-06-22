<?php
$numero = readline("Ingrese un número: ");

  // Verificar si el número es mayor, menor o igual a 10
if ($numero > 10) {
    echo "El número ingresado es mayor que 10.";
  } elseif ($numero < 10) {
    echo "El número ingresado es menor que 10.";
  } else {
    echo "El número ingresado es igual a 10.";
}

?>