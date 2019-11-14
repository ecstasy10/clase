<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 1</title>
</head>

<body>

    <?php

    $dias = array ("Lunes","Martes","Miercoles","Jueves","Viernes");

    $comisiones = ["Lunes" => 200,"Jueves" => 300];

    foreach ($dias as $key => $value) {
        
        if(array_key_exists($value,$comisiones)){

            echo "Comision recibida el <b>$value</b>: <b>$key</b><br>";
        }else{

            echo "El <b>$value</b> no tuviste comision<br>";
        }
    }

    if(in_array(300,$comisiones)){

    echo "<b>Ha recibido la comisión máxima</b>";
    
    }

    ?>

</body>

</html>