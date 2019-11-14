<?php

    if ($_POST["nbr"] == null)
        echo "No ha introducido numero";
    else
    {

    $div = $_POST["nbr"] % 12;

    $num = ["cero", "uno", "dos", "tres", "cuatro",
     "cinco", "seis", "siete", "ocho", "nueve", "once"];

    echo "El resto de dividir ".$_POST["nbr"]." entre 12 es: ".$num[$div];
    }
?>