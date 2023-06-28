<?php 
    //Todo: -> funciones matemáticas
    // abs($x) -> //? Retorna el valor absoluto
    // round($x) -> //? Transforma un número flotante a entero al valor que más se aproxime
    // floor($x) -> //? Transforma un número flotante a entero hacia abajo 4.12 = 4
    // ceil($x) -> //? Transforma un número flotante a entero hacia arriba 4.12  = 5
    // pow($x, $y) -> //? Retorna la potenci//sqrt($x) -> //? Retorna la raiz cuadrad
    // max($x, $y, ...) -> //? Retorna el valor mayor en un arreglo. 
    // min($x, $y, ...) -> //? Lo mismo de max pero el menor
    // pi() -> //? Retorna 3.1416...

    // rand() or rand(1,100) -> //? Retorna un número random entre dos parámetros


// Ejemplo de uso de funciones matemáticas

$x = -5;
$y = 3;

echo "Valor absoluto de $x: " . abs($x) . "\n";
echo "Redondeo de $y: " . round($y) . "\n";
echo "Entero hacia abajo de $y: " . floor($y) . "\n";
echo "Entero hacia arriba de $y: " . ceil($y) . "\n";
echo "Potencia de $x elevado a $y: " . pow($x, $y) . "\n";
echo "Raíz cuadrada de $y: " . sqrt($y) . "\n";
echo "Valor máximo de $x y $y: " . max($x, $y) . "\n";
echo "Valor mínimo de $x y $y: " . min($x, $y) . "\n";
echo "Valor de PI: " . pi() . "\n";
echo "Número aleatorio entre 1 y 100: " . rand(1, 100) . "\n";

 ?>