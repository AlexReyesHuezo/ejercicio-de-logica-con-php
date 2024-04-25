<?php
/**
  * Sumar los números pares de un arreglo.
  * @param array $arreglo
  * @return int
  * @example $sumaPares([1, 2, 3, 4, 5]) => 6
  * @example $sumaPares([2, 4, 6, 8, 10]) => 30
  * @example $sumaPares([1, 3, 5, 7, 9]) => 0
*/

// La función sumaPares recibe un parámetro $arreglo.
function sumaPares($arreglo){
  // Inicializo la variable $suma en 0.
  $suma = 0;
  // Recorro el arreglo.
  foreach($arreglo as $numero){
    // Si el número es par.
    if($numero % 2 == 0){
      // Sumo el número a la variable $suma.
      $suma += $numero;
    }
  }
  // Convierto $arreglo a string para poder imprimirlo en condiciones.
  $arreglo = implode(", ", $arreglo);
  // Imprimo la suma de los números pares.
  echo "La suma de los número pares en el conjunto [$arreglo] es: $suma" . PHP_EOL;
}

sumaPares([1, 2, 3, 4, 5]);
sumaPares([2, 4, 6, 8, 10]);
sumaPares([1, 3, 5, 7, 9]);
?>