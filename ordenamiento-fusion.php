<?php
/**
 * Ordenar un array de palabras con el método de la fusión (merge).
 * @param array $palabras
 * @return array
 * @example $departamentos = ["Ahuachapan", "Santa Ana", "Sonsonate", "La Libertad", "Chalatenango", "San Salvador", "La Paz", "Cuscatlan", "San Vicente", "La Union", "Morazan", "Cabañas", "San Miguel", "Usulutan", "La Union"]; ordenarFusion($departamentos) => ["Ahuachapan", "Cabañas", "Chalatenango", "Cuscatlan", "La Libertad", "La Paz", "La Union", "La Union", "Morazan", "San Miguel", "San Salvador", "San Vicente", "Santa Ana", "Sonsonate", "Usulutan"];
 */

// Función recursiva para ordenar un array de palabras con el método de la fusión.
function ordenarFusion($palabras){
  // Si el array tiene un solo elemento, lo devuelvo tal cual.
  if(count($palabras) <= 1){
    return $palabras;
  }
  // Obtingo el punto medio del array.
  $mitad = count($palabras) / 2;
  // Divido el array en dos partes.
  $izquierda = array_slice($palabras, 0, $mitad);
  $derecha = array_slice($palabras, $mitad);
  // Ordeno las dos partes recursivamente.
  $izquierda = ordenarFusion($izquierda);
  $derecha = ordenarFusion($derecha);
  // Fusionan las dos partes ordenadas.
  return fusion($izquierda, $derecha);
}

// Función para fusionar dos arrays ordenados (el verdadero motor).
function fusion($izquierda, $derecha){
  $resultado = [];
  // Mientras haya elementos en los dos arrays.
  while(count($izquierda) > 0 && count($derecha) > 0){
    // Comparo el primer elemento de cada array.
    if($izquierda[0] < $derecha[0]){
      // Agrego el elemento menor al array resultado.
      $resultado[] = array_shift($izquierda);
    }else{
      // Agrego el elemento menor al array resultado.
      $resultado[] = array_shift($derecha);
    }
  }
  // Agrego los elementos restantes de los dos arrays.
  while(count($izquierda) > 0){
    $resultado[] = array_shift($izquierda);
  }
  while(count($derecha) > 0){
    $resultado[] = array_shift($derecha);
  }
  return $resultado;
}

$departamentos = ["Ahuachapan", "Santa Ana", "Sonsonate", "La Libertad", "Chalatenango", "San Salvador", "La Paz", "Cuscatlan", "San Vicente", "La Union", "Morazan", "Cabañas", "San Miguel", "Usulutan", "La Union"];
// Si, para que se vea como una lista hermosa, uso varios PHP_EOL para que haya los saltos de línea adecuados.
echo "Lista original: " . PHP_EOL . implode(PHP_EOL, $departamentos) . PHP_EOL;
echo PHP_EOL;
echo "Lista ordenada: " . PHP_EOL . implode(PHP_EOL, ordenarFusion($departamentos));
?>