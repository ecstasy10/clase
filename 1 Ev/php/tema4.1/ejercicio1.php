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
        function cuentaAtras($x){
            echo "<table>";
            for ($i = $x; $i > 0; $i--)
                echo "<tr><td>".$i."</td></tr>";
            echo "<tr><td>¡Boooooom!</td></tr>";
            echo "</table>";
        }
        cuentaAtras($x = rand(0, 9));
        cuentaAtras($x = rand(0, 9));
    ?>
    
</body>
</html>