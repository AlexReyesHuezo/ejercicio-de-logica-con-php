<?php
/**
 * Ordenar un arreglo de nombres con el método de inserción.
 * @param array $nombres
 * @return array
 * @example $nombre = ["Alexander", "José", "Alicia", "Remedios", "Sofía", "Aureliano", "Amaranta"]; ordenarInsercion($nombres) => ["Alicia", "Alexander", "Amaranta", "José", "Remedios", "Sofía", "Aureliano"]
 */

function ordenarInsercion($nombres){
    for($i = 1; $i < count($nombres); $i++){
        // Guardo el nombre actual en una variable auxiliar.
        $aux = $nombres[$i];
        // Guardo la posición anterior al nombre actual.
        $j = $i - 1;
        // Mientras la posición anterior sea mayor o igual a 0 y el nombre en la posición anterior sea mayor que el nombre actual.
        while($j >= 0 && $nombres[$j] > $aux){
            // Muevo el nombre en la posición anterior a la posición actual.
            $nombres[$j + 1] = $nombres[$j];
            // Decremento la posición anterior, para seguir comparando.
            $j--;
        }
        // Inserto el nombre actual en la posición correcta.
        $nombres[$j + 1] = $aux;
    }
    // Devuelvo el arreglo de nombres ordenado.
    return $nombres;
}

$nombres = ["Alexander", "José", "Alicia", "Remedios", "Sofía", "Aureliano", "Amaranta"];
echo "Lista original: " . implode(", ", $nombres) . PHP_EOL;
echo "Lista ordenada: " . implode(", ", ordenarInsercion($nombres)) . PHP_EOL;
echo PHP_EOL;
?>