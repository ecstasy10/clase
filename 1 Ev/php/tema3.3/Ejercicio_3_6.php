<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>microtime</title>
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

    <?php
        echo "<h1>Arrays, funciones sort y rsort</h1><center>";

        $matriz1 = array();
        $matriz1[0]="Madrid";
        $matriz1[1]="Zaragoza";
        $matriz1[2]="Bilbao";
        $matriz1[3]="Valencia";
        $matriz1[4]="Lerida";
        $matriz1[5]="Alicante";

        echo "<table>";
        echo "<tr><td id=\"fondo\"> Posición </td>
        <td id=\"fondo\"> Valor </td></tr>";
        sort($matriz1);
        while (current($matriz1) != null)
        {
            echo "<tr><td>".key($matriz1)."</td>";
            echo "<td>".current($matriz1)."</td></tr>";
            next($matriz1);
        }
        echo "</table><table>";
        echo "<tr><td id=\"fondo\"> Posición </td>
        <td id=\"fondo\"> Valor </td></tr>";
        rsort($matriz1);
        while (current($matriz1) != null)
        {
            echo "<tr><td>".key($matriz1)."</td>";
            echo "<td>".current($matriz1)."</td></tr>";
            next($matriz1);
        }

        echo "</table>";
    ?>

</body>

</html>