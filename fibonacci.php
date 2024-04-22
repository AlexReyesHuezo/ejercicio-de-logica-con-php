<?php
/*
  Haciendo uso de una función anónima y el operador ternario, calculo la serie de fibonacci de un número dado.
  * La fórmula de la serie de fibonacci es la siguiente:
  * F(n) = F(n-1) + F(n-2)
  * @param int $n
  * @return int
  * @example $fibonacci(5) => 5
  * @example $fibonacci(10) => 55
  * @example $fibonacci(20) => 6765
*/

// Inicializo la variable $generarFibonacci como nula.
$generarFibonacci = null;
// Defino el número a calcular.
$n = 5;

/*
  Asigno a la variable $generarFibonacci una función anónima que recibe un parámetro $n.
  La función se llama a sí misma.
  Uso la palabra use para pasar la variable $generarFibonacci a la función anónima.
  El operador & se usa para pasar la variable por referencia.
*/
$generarFibonacci = function($n) use (&$generarFibonacci){
  return $n <= 1 ?
    // Si el número es menor o igual a 1, retorna el número.
    $n :
    // Si no, retorna la suma de los dos números anteriores. La función se llama a sí misma.
    $generarFibonacci($n - 1) + $generarFibonacci($n - 2);
};

/*
  Muestro los resultados y con PHP_EOL hacemos un salto de línea.
  PHP_EOL es una constante predefinida en PHP, para el salto de línea en diferentes sistemas operativos.
*/
echo "La serie de fibonacci para $n es " . $generarFibonacci(5) . PHP_EOL;

$n = 10;
echo "La serie de fibonacci para $n es " . $generarFibonacci(10) . PHP_EOL;

$n = 20;
echo "La serie de fibonacci para $n es " . $generarFibonacci(20) . PHP_EOL;
?>