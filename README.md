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
README - Programación Orientada a Objetos (POO) en PHP
Este README proporciona información sobre la programación orientada a objetos (POO) en PHP.

Programación Orientada a Objetos (POO)
La programación orientada a objetos (POO) es un paradigma de programación que se basa en el concepto de "objetos". Los objetos son entidades que representan conceptos del mundo real y que pueden tener propiedades (atributos) y realizar acciones (métodos).

En PHP, la POO es ampliamente utilizada y permite la creación de objetos a partir de clases. Una clase es una plantilla o un molde que define las propiedades y comportamientos que tendrán los objetos que se creen a partir de ella.

Los principales conceptos de la programación orientada a objetos son:

Clase: Es una plantilla o definición que describe las características y comportamientos de los objetos que se pueden crear a partir de ella.
Objeto: Es una instancia de una clase. Representa un individuo o entidad específica y tiene sus propias propiedades y comportamientos.
Atributos: Son las propiedades o características de un objeto. Definen el estado de un objeto y se representan mediante variables en la clase.
Métodos: Son las acciones o comportamientos que un objeto puede realizar. Representan las operaciones que pueden realizarse con un objeto y se definen como funciones en la clase.
Principios de la POO
Encapsulación
La encapsulación es el principio que establece que los atributos y métodos relacionados deben agruparse en una clase para poder ocultar detalles internos y mostrar solo ciertas cosas, o una interfaz pública. Esto se logra con la definición de niveles de acceso como "público" (public), "privado" (private) o "protegido" (protected) para los atributos y métodos.

Herencia
La herencia es un mecanismo para crear nuevas clases en base a clases existentes. La clase que se utiliza como base para la creación de otra se denomina "clase padre" o "superclase", y la nueva clase se llama "clase hija" o "subclase". La herencia permite la reutilización de código y la creación de relaciones jerárquicas entre las clases. Las clases hijas heredan los métodos y propiedades públicas de la clase padre. El método constructor siempre es heredado de manera pública.

Polimorfismo
El polimorfismo es la capacidad de un objeto de tomar diferentes formas o comportarse de diferentes maneras según el contexto. Esto significa que varias clases pueden heredar de una misma clase base y cada una de ellas puede tener su propia implementación del método heredado. Por ejemplo:

php
Copy code
// Clase base
class Animal {
    public function hacerSonido() {
        echo "El animal hace un sonido genérico.";
    }
}

// Clase derivada
class Perro extends Animal {
    public function hacerSonido() {
        echo "El perro ladra.";
    }
}

// Clase derivada
class Gato extends Animal {
    public function hacerSonido() {
        echo "El gato maulla.";
    }
}

// Crear objetos de las clases derivadas
$animal = new Animal();
$perro = new Perro();
$gato = new Gato();

// Llamar al método hacerSonido() de cada objeto
$animal->hacerSonido(); // Imprime "El animal hace un sonido genérico."
$perro->hacerSonido(); // Imprime "El perro ladra."
$gato->hacerSonido(); // Imprime "El gato maulla."
En este ejemplo, se muestra cómo diferentes objetos creados a partir de las clases derivadas (Perro y Gato) pueden tener comportamientos distintos al llamar al mismo método hacerSonido() heredado de la clase base Animal. Esto se logra gracias al polimorfismo.
```