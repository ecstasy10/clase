<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    table {
        background-color: #402020;
        color: white;
        text-align: center;
    }
    </style>
</head>
<body>
    <h1>Funciones de Usuario</h1>
    <?php
        $o = "¡Despierta!";
        $start = 1;
        $end = 6;
        function cuentaAtras(&$start, $end, $ono){
            echo "<table>";
            $i = 0;
            while ($i++ < $end)
                echo "<tr><td>".$start++."</td></tr>";
            echo "<tr><td>".$ono."</td></tr>";
            echo "</table>";
            $start = 3;
        }
        cuentaAtras($start,$end, "¡Booom!");
        cuentaAtras($start,$end, $o);
    ?>
    
</body>
</html>