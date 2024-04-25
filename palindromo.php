<?php
/**
  * Comprobar si una palabra, frase o número es un palíndromo.
  * Un palíndromo es una palabra, frase o número que se lee igual en un sentido que en otro.
  * @param string $palabra
  * @return string
  * @example $esPalindromo("oso") => "La palabra/frase 'oso' es un palíndromo."
  * @example $esPalindromo("anita lava la tina") => "La palabra/frase 'anita lava la tina' es un palíndromo."
*/

// La función esPalindromo recibe un parámetro $palabra.
function esPalindromo($palabra){
    $palabraOriginal = $palabra;
    $palindromo = true;
    // Convierto la palabra a minúsculas.
    $palabra = strtolower($palabra);
    // Elimino los espacios en blanco.
    $palabra = str_replace(' ', '', $palabra);
    // Elimino los signos de puntuación.
    $palabra = preg_replace('/[^a-z0-9]/', '', $palabra);

    // Recorro la palabra.
    // strlen devuelve la longitud de la cadena.
    for($i = 0; $i < strlen($palabra); $i++){
        // Compruebo si la letra actual es diferente a la letra simétrica.
        if($palabra[$i] != $palabra[strlen($palabra) - $i - 1]){
            // Si las letras no son iguales, la palabra no es un palíndromo.
            $palindromo = false;
            break;
        }
    }

    // Imprimo si la palabra es un palíndromo o no.
    echo $palindromo
    ? "La palabra/frase '$palabraOriginal' es un palíndromo." . PHP_EOL
    : "La palabra/frase '$palabraOriginal' no es un palíndromo." . PHP_EOL;
}

esPalindromo("Mal si le das la fe falsa del Islam");
esPalindromo("oso");

/*
  Ejemplos de palíndromos:
  * oso
  * oro
  * anilina
  * anita lava la tina
  * 12321
  * 12345654321
  * Sé verlas al revés
  * Mal si le das la fe falsa del Islam
  * Allí por la tropa portado, traído a ese paraje de maniobras, una tipa como capitán usar boina me dejara, pese a odiar toda tropa por tal ropilla
  * Yo soy
  * Somos o no somos
*/
?>