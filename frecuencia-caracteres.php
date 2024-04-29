<?php
/**
  * Mostrar la frecuencia de caracteres en una cadena.
  * @param string $cadena
  * @return array
  * @example $frecuenciaCaracteres("hola") => ["h" => 1, "o" => 1, "l" => 1, "a" => 1]
  * @example $frecuenciaCaracteres("hola mundo") => ["h" => 1, "o" => 2, "l" => 1, "a" => 1, " " => 1, "m" => 1, "u" => 1, "n" => 1, "d" => 1
*/

// La función frecuenciaCaracteres recibe un parámetro $cadena.
function frecuenciaCaracteres($cadena){
  // Creo un arreglo vacío.
  $frecuencia = [];
  // Recorro la cadena.
  for($i = 0; $i < strlen($cadena); $i++){
    // Transformo la cadena a minúsculas, para que no cuente mayúsculas y minúsculas por separado.
    $cadena = strtolower($cadena);
    // Obtengo el caracter actual.
    $caracter = $cadena[$i];
    // Si el caracter no existe en el arreglo, lo inicializo en 0.
    // La función isset determina si una variable está definida y no es NULL.
    if(!isset($frecuencia[$caracter])){
      $frecuencia[$caracter] = 0;
    }
    // Incremento la frecuencia del caracter.
    $frecuencia[$caracter]++;
  }
  // Imprimo la frecuencia de caracteres.
  print_r($frecuencia);
}

frecuenciaCaracteres("hola");
frecuenciaCaracteres("hola mundo");
frecuenciaCaracteres("Tres tristes tigres comen trigo en un trigal; En tres tristes trastos, tres tristes tigres comen trigo.");
?>