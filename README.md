# README - Funciones Matemáticas en PHP

Este README proporciona información sobre las funciones matemáticas en PHP. Estas funciones son útiles para realizar operaciones matemáticas comunes, como obtener el valor absoluto, redondear números, calcular potencias, encontrar el valor máximo o mínimo, etc.

## Funciones Matemáticas

A continuación se describen las funciones matemáticas mencionadas en el código:

- `abs($x)`: Retorna el valor absoluto de un número. Devuelve el valor positivo del número dado, eliminando cualquier signo negativo.
- `round($x)`: Transforma un número flotante a un entero redondeando al valor entero más cercano. Si el número está a mitad de camino entre dos enteros, se redondea al número par más cercano.
- `floor($x)`: Transforma un número flotante a un entero hacia abajo. Redondea el número al entero más cercano que sea menor o igual al número dado.
- `ceil($x)`: Transforma un número flotante a un entero hacia arriba. Redondea el número al entero más cercano que sea mayor o igual al número dado.
- `pow($x, $y)`: Retorna el resultado de elevar un número dado a una potencia dada. El primer parámetro `$x` es el número base, y el segundo parámetro `$y` es el exponente.
- `sqrt($x)`: Retorna la raíz cuadrada de un número dado. Devuelve la raíz cuadrada positiva de un número no negativo.
- `max($x, $y, ...)`: Retorna el valor máximo de un conjunto de números. Acepta múltiples argumentos y devuelve el valor más grande entre ellos.
- `min($x, $y, ...)`: Retorna el valor mínimo de un conjunto de números. Acepta múltiples argumentos y devuelve el valor más pequeño entre ellos.
- `pi()`: Retorna el valor de PI (π), que es una constante matemática aproximada a 3.1416.
- `rand()` o `rand($min, $max)`: Retorna un número entero aleatorio. Si no se proporcionan parámetros, retorna un número aleatorio entre 0 y `getrandmax()`. Si se especifican dos parámetros, retorna un número aleatorio entre el valor mínimo `$min` y el valor máximo `$max`.

## Uso

Puedes utilizar estas funciones matemáticas en tu código PHP de la siguiente manera:

```php
phpCopy code<?php

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
```