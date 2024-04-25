<?php
/*
  Invertir un arreglo usando la función array_reverse y sin usarla.
  * @param array $arreglo
  * @return array
  * @example $invertirArreglo([1, 2, 3, 4, 5]) => [5, 4, 3, 2, 1]
  * @example $invertirArreglo(["a", "b", "c", "d", "e"]) => ["e", "d", "c", "b", "a"]
  * @example $invertirArregloSinArrayReverse([1, 2, 3, 4, 5]) => [5, 4, 3, 2, 1]
  * @example $invertirArregloSinArrayReverse(["a", "b", "c", "d", "e"]) => ["e", "d", "c", "b", "a"]
*/

// La función invertirArreglo recibe un parámetro $arreglo.
function invertirArreglo($arreglo){
    // Invierto el arreglo.
    $arregloInvertido = array_reverse($arreglo);
    // Imprimo el arreglo invertido.
    print_r($arregloInvertido);
}

invertirArreglo([1, 2, 3, 4, 5]);
invertirArreglo(["a", "b", "c", "d", "e"]);

// Invertir un arreglo sin usar la función array_reverse.
function invertirArregloSinArrayReverse($arreglo){
    $arregloInvertido = [];
    // Recorro el arreglo. Cada iteración, $i se decrementa en 1. Así el bucle termina cuando $i es igual a 0.
    for($i = count($arreglo) - 1; $i >= 0; $i--){
        // Añado el elemento actual al arreglo invertido.
        $arregloInvertido[] = $arreglo[$i];
    }
    // Imprimo el arreglo invertido.
    print_r($arregloInvertido);
}

invertirArregloSinArrayReverse([1, 2, 3, 4, 5]);
invertirArregloSinArrayReverse(["a", "b", "c", "d", "e"]);
?>