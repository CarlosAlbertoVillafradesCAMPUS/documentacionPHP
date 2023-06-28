<?php 
// Iteración de objetos

echo "mediante una sentencia foreach es posible realizar la itereción:\n";

class Clase {
    public $var1 = "Valor 1";
    public $var2 = "Valor 2";
    public $var3 = "Valor 3";

    function iteraVisible(){
        foreach($this as $clave => $valor){
            print "$clave => $valor \n";
        }
    }
}

//Instanciamos
$clase = new Clase();

//Iteramos
$clase ->iteraVisible();