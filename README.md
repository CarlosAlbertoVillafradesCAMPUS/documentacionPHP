# README - Estructuras de Control y Funciones Definidas por el Usuario en PHP

Este README proporciona información sobre las estructuras de control y las funciones definidas por el usuario en PHP.

## Estructuras de Control

Las estructuras de control en PHP son similares a las de JavaScript e incluyen las siguientes:

- `if`: Se utiliza para realizar una condición y ejecutar un bloque de código si se cumple la condición.
- `for`: Se utiliza para ejecutar un bloque de código un número específico de veces.
- `foreach`: Se utiliza para iterar sobre los elementos de un array o una colección.
- `switch`: Se utiliza para realizar diferentes acciones basadas en diferentes condiciones.
- `while`: Se utiliza para ejecutar un bloque de código mientras se cumple una condición.
- `do-while`: Se utiliza para ejecutar un bloque de código al menos una vez y luego repetirlo mientras se cumpla una condición.
- `match`: Es una estructura de control nueva que es similar a `switch`, pero compara por identidad y es más estricta.

## Control de Excepciones

El control de excepciones en PHP permite manejar errores o situaciones inesperadas que pueden ocurrir durante la ejecución del programa. Puedes utilizar bloques `try`, `catch` y `finally` para capturar y manejar las excepciones.

## Funciones Definidas por el Usuario

Las funciones definidas por el usuario en PHP son bloques de código reutilizables que se pueden llamar en diferentes partes del programa. Permiten que el código sea modular y reutilizable. Las funciones en PHP se definen utilizando la palabra reservada `function`.

```php
phpCopy codefunction funcionDePrueba($num1, $num2){
    echo $num1 + $num2;
}

funcionDePrueba(3, 4);
```

Además de las funciones normales, PHP también permite funciones anónimas, funciones variables y funciones flecha para mayor flexibilidad en la definición de funciones.

```php
phpCopy code// Ejemplo de función variable
$saludo = function($nombre){
    echo "Hola, " . $nombre;
};

$saludo("mundo");
```