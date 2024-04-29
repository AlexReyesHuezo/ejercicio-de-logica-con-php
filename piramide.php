<?php
/**
  * Mostrar una pirámide de asteriscos.
  * @param int $nivel
  * @return void
  * @example $piramide(5) =>
  *     *
  *    ***
  *   *****
  *  *******
  * *********
*/

// La función flecha piramide recibe un parámetro $n que define el número de niveles.
$piramide = function($nivel) {
  // Recorro el rango de 1 a $n.
  for($i = 1; $i <= $nivel; $i++){
    // Imprimo espacios en blanco.
    // La función str_repeat repite una cadena un número determinado de veces.
    echo str_repeat(" ", $nivel - $i);
    // Imprimo asteriscos.
    echo str_repeat("*", 2 * $i - 1);
    // Salto de línea.
    echo PHP_EOL;
  }
};

$piramide(5);
$piramide(10);
$piramide(15);
?>