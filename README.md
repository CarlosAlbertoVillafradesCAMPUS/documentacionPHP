# README - Polimorfismo y Autoload en PHP

Este README proporciona información sobre el polimorfismo y el autoload en PHP.

## Polimorfismo

El polimorfismo es un concepto de la programación orientada a objetos que permite tratar objetos de diferentes clases de manera uniforme, utilizando una interfaz común. En PHP, se puede lograr el polimorfismo mediante el uso de interfaces y clases abstractas.

El polimorfismo permite definir una interfaz común para un conjunto de clases relacionadas, lo que facilita el intercambio y la manipulación de objetos de diferentes tipos sin necesidad de conocer la implementación específica de cada clase.

## Autoload

El autoload es una técnica para cargar automáticamente las clases cuando son necesarias, sin tener que incluir manualmente los archivos de clase en cada punto del código donde se necesitan. En PHP, el autoloading se basa en la función `spl_autoload_register()`, que permite registrar una o varias funciones de autoload.

La función `spl_autoload_register()` se utiliza para registrar una función que se ejecutará automáticamente cuando se encuentre una clase que aún no ha sido cargada. La función de autoload puede estar definida en el propio archivo o en un archivo separado.

Un ejemplo de una función de autoload en PHP es la siguiente:

```
phpCopy codefunction my_autoload($clase){
    require __DIR__.'/clases/'.$clase.'.php';
}
spl_autoload_register('my_autoload');
```

En este ejemplo, la función `my_autoload()` se encarga de cargar automáticamente las clases cuando se necesitan. La función busca los archivos de clase en el directorio `clases/` y utiliza la constante mágica `__DIR__` para obtener la ruta absoluta del archivo actual.

Es importante destacar que los nombres de los archivos de clase deben coincidir con los nombres de las clases que contienen.