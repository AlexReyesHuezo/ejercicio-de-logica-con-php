<?php
/**
 * Ordenar un array de números con el método de la burbuja.
 * @param array $numeros
 * @return array
 * @example $numeros = [5, 3, 8, 8, 5, 5, 1, 7]; ordenarBurbuja($numeros) => [1, 3, 5, 5, 7, 8, 8]
 * @example $numeros = [-9, 8, 7, 6, -5, 0, 4, 3, 2, 1]; ordenarBurbuja($numeros) => [-9, -5, 0, 1, 2, 3, 4, 6, 7, 8]
 */

function ordenarBurbuja($numeros){
    for($i = 0; $i < count($numeros); $i++){
        // Recorro el array de números con una posición menos para no salirme del array.
        for($j = 0; $j < count($numeros) - 1; $j++){
            /*
              Compruebo si el número actual es mayor que el siguiente.
              Cuando dos números son iguales o el número actual es mayor que el siguiente, no se intercambian.
            */
            if($numeros[$j] < $numeros[$j + 1]){
                // Guardo el número actual en una variable auxiliar.
                $aux = $numeros[$j];
                // Intercambio los números.
                $numeros[$j] = $numeros[$j + 1];
                $numeros[$j + 1] = $aux;
            }
        }
    }
    // Devuelvo el array de números ordenado, se devuenve aquí ya que se han finalizado los intercambios y el array está ordenado.
    return $numeros;
}

$numeros = [5, 3, 8, 8, 5, 5, 1, 7];
// Uso la función implode para convertir el array en una cadena de texto y poder imprimirlo en un mejor formato.
echo "Lista original: " . implode(", ", $numeros) . PHP_EOL;
echo "Lista ordenada: " . implode(", ", ordenarBurbuja($numeros)) . PHP_EOL;
echo PHP_EOL;

$numerosReales = [-9, 8, 7, 6, -5, 0, 4, 3, 2, 1];
echo "Lista original: " . implode(", ", $numerosReales) . PHP_EOL;
echo "Lista ordenada: " . implode(", ", ordenarBurbuja($numerosReales)) . PHP_EOL;
?>