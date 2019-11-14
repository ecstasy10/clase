<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 2</title>

    <style>
        table,
        td {

            border: #b2b2b2 0.5px outset;
            border: #b2b2b2 0.5px inset;
        }

        #fondo {

            background-color: yellow;

        }
    </style>
</head>

<body align="center">
    <h1>Arrays <i>multidimensionales</i></h1>

    <?php

    //Array escalar
    $matriz1 = array();
    $matriz1[0][0] =  "peseta";
    $matriz1[0][1] = 166.386;
    $matriz1[1][0] = "dolar";
    $matriz1[1][1] = 0.96;

    //Array asociativo
    $matriz2 = array(
        "peseta" => 166.386,
        "dolar" => 0.96
    );

    //Array mixto
    $matriz3 = array();
    $matriz3[0]["peseta"] = 166.386;
    $matriz3[1]["dolar"] = 0.96;

    echo "<table align = \"center\">";
    echo "<tr></tr>";
    echo "<td id=\"fondo\"></td>";
    echo "<td id=\"fondo\">Moneda</td>";
    echo "<td id=\"fondo\">Cambio€</td>";

    //Recorer array escalar o indexado
    for ($f = 0; $f < sizeof($matriz1); $f++) {

        echo "<tr></tr>";
        echo "<td id=\"fondo\">\$matriz1[$f]</td>";

        for ($c = 0; $c < sizeof($matriz1); $c++) {

            echo "<td>" . $matriz1[$f][$c] . "</td>";
        }
    }

    // Recorrer array asociativo
    foreach ($matriz2 as $key => $value) {

        echo "<tr></tr>";
        echo "<td id=\"fondo\">\$matriz2</td>";
        echo "<td>$key</td>";
        echo "<td>$value</td>";
    }

    //Recorrer array mixto
    foreach ($matriz3 as $key) {
        echo "<tr></tr>";
        echo "<td id=\"fondo\">\$matriz3</td>";

        foreach ($key as $key  => $value) {
            echo "<td>$key</td>";
            echo "<td>$value</td>";
        }
    }

    echo "</table>";

    ?>
</body>

</html>