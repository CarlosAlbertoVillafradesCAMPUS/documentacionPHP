# README - DOCUMENTACION PHP



## **Iteración de Objetos en PHP**

mostramos cómo realizar la iteración de objetos utilizando la sentencia `foreach`. El código muestra cómo crear una clase, instanciarla y luego iterar sus propiedades utilizando el método `iteraVisible()`.

## Uso

El código proporcionado demuestra cómo utilizar la sentencia `foreach` para iterar sobre los miembros de un objeto. Sigue los pasos a continuación para ejecutar el código:

1. Asegúrate de tener PHP instalado en tu sistema.

2. Copia el código PHP proporcionado en un archivo con extensión `.php`, como `iteracion_objetos.php`.

3. Abre una terminal o línea de comandos y navega hasta el directorio donde se encuentra el archivo PHP.

4. Ejecuta el siguiente comando para ejecutar el script:

   ```
   bashCopy code
   php iteracion_objetos.php
   ```

5. Verás la salida en la terminal que muestra la iteración de las propiedades de la clase:

   ```
   makefileCopy codemediante una sentencia foreach es posible realizar la iteración:
   var1 => Valor 1
   var2 => Valor 2
   var3 => Valor 3
   ```

## Código

El código proporcionado consta de las siguientes partes:

1. Definición de la clase `Clase`: Esta clase contiene tres propiedades públicas: `$var1`, `$var2` y `$var3`. Además, tiene un método llamado `iteraVisible()` que utiliza la sentencia `foreach` para iterar sobre las propiedades del objeto e imprimir su clave y valor.

2. Instanciación de la clase: Se crea una instancia de la clase `Clase` utilizando el siguiente código:

   ```
   phpCopy code
   $clase = new Clase();
   ```

3. Iteración de las propiedades del objeto: Se llama al método `iteraVisible()` en la instancia de la clase `Clase` para realizar la iteración de las propiedades del objeto y mostrar su clave y valor en la salida.

   ```
   phpCopy code
   $clase->iteraVisible();
   ```

## Contribución

Si deseas contribuir a este proyecto, sigue estos pasos:

1. Haz un fork de este repositorio y clona tu propia copia en tu máquina local.

2. Crea una nueva rama para tus modificaciones:

   ```
   bashCopy code
   git checkout -b mi-rama
   ```

3. Realiza las modificaciones o mejoras en el código.

4. Asegúrate de documentar cualquier cambio o nueva funcionalidad agregada.

5. Haz commit de tus cambios:

   ```
   bashCopy code
   git commit -m "Descripción de los cambios"
   ```

6. Envía tus cambios al repositorio remoto:

   ```
   bashCopy code
   git push origin mi-rama
   ```

7. Abre una solicitud de extracción (pull request) en el repositorio original y describe tus cambios en detalle.

## Contacto

Si tienes alguna pregunta o sugerencia relacionada con este código, no dudes en contactarme:

- Nombre: [Tu Nombre]
- Email: [Tu Email]

¡Gracias por utilizar este código y contribuir a su mejora!