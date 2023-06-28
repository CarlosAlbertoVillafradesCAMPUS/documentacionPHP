<?php

    $productos = [
        [
            "nombre"=>"David", 
            "edad"=>18
        ],
        [
            "nombre"=>"pedro", 
            "edad"=>21
        ]
    ];


$json = '{"nombre":"David", "edad":18}';
$data = json_decode($json);
?>

<?php


//Función Json_encode y Json_decode 


//* Son funciones que se utilizan para incluir archivos externos de un programa.	//*La función json_encode() en PHP se utiliza para convertir una estructura de datos en PHP en una cadena JSON. 	
?>	

    <?php
        var_dump($productos);
        echo "<br><br>";
        $json = json_encode($productos, JSON_UNESCAPED_UNICODE);
        var_dump($json);

        echo "<br><br>".$data->nombre."<br>";
        echo $data->edad;


        //!En pocas palabras uno es el proceso inverso del otro. json_decode convierta algo a un objeto y json_encode transforma un objeto en un string :D
    ?>
