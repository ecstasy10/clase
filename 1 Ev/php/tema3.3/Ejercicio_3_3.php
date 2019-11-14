<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 3</title>
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
    <h1>Arrays funciones<br><i>reset, end, next, prev, current y key</i></h1>

    <?php

        $matriz1 = array();
        $matriz1[3] = "cougar";
        $matriz1[5] = "ford";
        $matriz1[7] = "2.500";
        $matriz1[ ] = "V6";
        $matriz1[ ] = 172;

        $matriz2['modelo'] = "cougar";
        $matriz2['marca'] = "ford";
        $matriz2['fecha'] = null;
        $matriz2['cc'] = "2.500";
        $matriz2['motor'] = "V6";
        $matriz2['potencia'] = 182;

    echo "<table align =\"center\"><tr>
    <td id=\"fondo\">Posición</td>";
    do {
        echo "<td id=\"fondo\">".key($matriz1)."</td>";
    } while (next($matriz1));

    echo "</tr>";
    echo "<tr><td id=\"fondo\">Valor</td>";
    reset($matriz1);

    do {
        echo "<td>".current($matriz1)."</td>";
    } while (next($matriz1));
    echo "</tr></table><br>";

    end($matriz2);
    
    do {
        echo "<td>".current($matriz1)."</td>";
    } while  (prev($matriz2));

    
    echo "<table align =\"center\">";
    echo "</table>";

    ?>

</body>

</html>