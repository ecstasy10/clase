<html>
<head>

</head>
<body>
<?php

    echo "Hola <strong>".$_POST["nombre"]."</strong> ¿que tal estás?<br>";
    if (isset($_POST["si"]))
        echo "Te gusta el golf<br>";
    else
        echo "No te gusta el golf<br>";
    echo "Tu sistema operativo es ".$_POST["sistema"]."<br>";
    if (isset($_POST["futbol"]))
        echo "Te gusta el futbol<br>";
    else
        echo "No te gusta el futbol<br>";
    if (isset($_POST["aficion"]))
        echo "No tienes aficiones<br>";
    else 
        echo "Tus aficiones son:<br>".$_POST["aficion"]."<br>";
    


?>
<a href="formaficiones.php">Volver al formulario</a>
</body>
</html>