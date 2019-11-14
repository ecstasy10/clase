<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio </title>


</head>

<style>

    p {

        background-color: red;

    }

</style>


<body>


<?php

$precio = 15;


include_once('Funciones.php');


if (isset($_POST["enviar"])) {

    displayForm2($mensaje = "", $precio);

} elseif (isset($_POST["enviar2"])) {

    procesForm($precio);


} else {

    displayForm1($mensaje = "");

}

?>


</body>
</html>