<?php
$nombre = readline("Ingrese un nomero del 1 al 7: ");


switch ($nombre) {
  case 1:
    echo "Lunes";
    break;
  case 2:
    echo "Martes";
    break;
  case 3:
    echo "Miércoles";
    break;
  case 4:
    echo "Jueves";
    break;
  case 5:
    echo "Viernes";
    break;
  case 6:
    echo "Sábado";
    break;
  case 7:
    echo "Domingo";
    break;
  default:
    echo "Número inválido";
}


?>