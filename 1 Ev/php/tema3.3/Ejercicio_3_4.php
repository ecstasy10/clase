<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Frases aleatorias</title>
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

        $matriz1 = array("Hola navegante.", "Bienvenido a mi web",
        "Gracias por visitarnos", "Te recomiendo visitar nuestro foro",
        "Hala madrid!!!", "Puedes enviarnos las sugerencias que quieras");

        $a = array_rand($matriz1, 3);
        
        echo "<h1>".$matriz1[$a[0]]."<br></h1>";
        echo "<h1>".$matriz1[$a[1]]."<br></h1>";
        echo "<h1>".$matriz1[$a[2]]."<br></h1>";
    
    ?>

</body>

</html>