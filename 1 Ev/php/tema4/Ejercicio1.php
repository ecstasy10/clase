<html>
<head>
<style>
    body {
        color: white;
    }
</style>
</head>
<body bgcolor="#4F4F4F">
    <?php
    if (isset($_GET["usuario"]))
        echo "<h1>Hola ".$_GET['usuario']."</h1>";
    else
        echo"<h1>Hola</h1>";
    echo "<h1>Hoy es dia ".date("d/m/Y")."
    y la hora actual es: ".date("H:i:s")."</h1>";
    echo "<h1>Bienvenido a mi página</h1>";
    ?>
</body>
</html>