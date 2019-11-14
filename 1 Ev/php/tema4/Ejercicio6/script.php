<html>
<head>

</head>
<body>
<?php

    echo "<h1>Resultado cuestionario</h1><br><br>";
    echo "Nombre: <br>".$_POST["name"]."<br>";
    echo "Clave: <br>".$_POST["pass"]."<br>";
    echo "Color: <br>".$_POST["coche"]."<br>";
    echo "Extras: <br>";
    if (isset($_POST["aire"]))
        echo "Aire<br>";
    if (isset($_POST["tapi"]))
        echo "Tapiceria<br>";
    if (isset($_POST["llantas"]))
        echo "Aluminio<br>";
    echo "Precio: <br>".$_POST["precio"]."<br>";
    echo "Comentarios: <br>".$_POST["com"]."<br>";

?>
<a href="form.php">Volver al formulario</a>
</body>
</html>