<!DOCTYPE html>
<html lang="en">
<?php
        $t = explode(" ", microtime());
        $inicial = $t[0] + $t[1];
    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>microtime</title>
    <style>
        h1 {
            color: white;
        }
        body {
            background-color: #373636;
        }
    </style>
</head>

<body align="center">
    <?php
        echo "<img src='patinador.jpg'><br><br>";
        $t1 = explode(" ", microtime());
        $final = $t1[0] + $t1[1];
        echo "La pagina tardó ".($final - $inicial);
    ?>

</body>

</html>