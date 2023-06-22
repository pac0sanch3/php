<?php
  $monto = readline("Ingrese el monto total de la compra: ");

  $descuento = 0;

  if ($monto >= 1000):
    $descuento = $monto * 0.1; 
  elseif ($monto >= 500):
    $descuento = $monto * 0.05; 
  endif;

  echo ($descuento > 0) ? "El descuento aplicable es de: $" . $descuento : "No se aplica ningún descuento.";
?>