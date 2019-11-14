<html>
<body>
    <center>
   <h1>Comprobando el tipo de variables</h1>
    
    <?php
    $cadena = "Hola a todos";

    echo "La variable \$cadena contiene <b>".$cadena."</b><br><br>";
    $cadena = 1;
    echo "La variable \$cadena no es de tipo ".gettype($cadena). "<br>";
    $cadena = 1.543;
    echo "La variable \$cadena no es de tipo ".gettype($cadena). "<br>";
    $cadena = "Hola a todos";
    echo "La variable \$cadena no es de tipo ".gettype($cadena). "<br>";
    ?>

</body>
</html>