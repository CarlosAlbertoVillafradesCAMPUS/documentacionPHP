#  README - Namespaces en PHP

Este README proporciona información sobre el uso de namespaces en PHP.

## Namespaces

Un namespace (espacio de nombres) es una forma de encapsular elementos relacionados, como clases, funciones y constantes, dentro de un ámbito específico. Los namespaces se utilizan para evitar conflictos de nombres y organizar de manera estructurada el código en aplicaciones y bibliotecas grandes.

En PHP, la palabra clave `use` se utiliza en la definición de namespaces para importar clases, funciones y constantes desde otros namespaces. Al utilizar `use`, se especifica una ruta corta para acceder a elementos específicos de otros namespaces.

Un ejemplo de uso de namespaces en PHP es el siguiente:

```
phpCopy codeuse App\Clientes;
use App\Detalles;

function my_autoload($clase) {
    var_dump($clase); // El nombre de la clase se muestra como App\Detalles
    $fileClass = explode('\\', $clase);
    var_dump($fileClass); // Se muestra el arreglo de nombres del espacio de nombres
    require __DIR__.'/clases/'.$fileClass[1].'.php';
}

spl_autoload_register("my_autoload");

$detalles = new Detalles;
echo "<br>";
$clientes = new Clientes;
```

En este ejemplo, se importan las clases `Clientes` y `Detalles` desde el espacio de nombres `App`. La función `my_autoload()` se encarga de cargar automáticamente las clases cuando se necesitan. Utiliza la constante mágica `__DIR__` para obtener la ruta absoluta del archivo actual y construye una ruta de archivo utilizando el directorio actual y la carpeta `clases/`. El nombre de la clase se extrae de la variable `$clase` utilizando la función `explode()`.

Es importante destacar que los nombres de las clases y los archivos deben coincidir y seguir la estructura de los namespaces