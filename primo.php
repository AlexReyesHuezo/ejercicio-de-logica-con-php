<?php
/**
  * Usando una función, calculo si un número es primo o no.
  * La fórmula para saber si un número es primo es la siguiente:
  * Un número primo es aquel que solo es divisible por 1 y por sí mismo: n % 1 == 0 && n % n == 0
  * @param int $n
  * @return bool
  * @example $esPrimo(5) => true
  * @example $esPrimo(10) => false
  * @example $esPrimo(20) => false
*/

// Defino el número a comprobar.
$numero = 7;

// ¿Qué te puedo decir, este código es muy sencillo. ¡Hermoso!
if(esPrimo($numero)){
  echo "$numero Es primo";
}else{
  echo "$numero No es primo";
}

function esPrimo($numero){
  /*
    Comprobamos si es un número valido, ya que sino nos dara un error 500.
    is_numeric() es una función de PHP que determina si una variable es un número o un string numérico.
    Un número valido es un número entero. El error 500 es un error interno del servidor.
  */
  if(!is_numeric($numero))
    return false;
  
  // Si el número es menor o igual a 1, no es primo.
  for ($i = 2; $i < $numero; $i++){
    if (($numero % $i) == 0)
      // No es primo :(
      return false;
  }
  // Es primo :)
  return true;
}
?>