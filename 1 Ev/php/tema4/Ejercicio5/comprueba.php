<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
<?php
    $r = rand(0, 6);
    if ($_POST["user"] != null || $_POST["pass"] != null )
    {
        if ($_POST["user"] == "root" && $_POST["pass"] == "toor" )
           include "success.inc";
        else
            echo "<p>No has introducido el usuario o contraseña correctos</p>";
    }
    else {
            echo "<p>No has introducido el usuario o la contraseña</p>";
    }
    
?>
<a href='form_clave.php'>Volver al login</a>
</body>
</html>