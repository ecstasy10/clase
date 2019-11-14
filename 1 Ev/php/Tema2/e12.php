<html>
<body>
    <center>
   <h1>Comprobando el tipo de variables</h1>
    
    <?php
    $cadena = "38E6";

    echo "El valor de \$cadena es: ".$cadena. "<br><br>";

    echo "El resultado en entero es: ".intval($cadena, 10). "<br>";
    echo "El resultado en entero octal es: ".intval($cadena, 8). "<br>";
    echo "El resultado en entero hexadecimal es: ".intval($cadena, 16). "<br>";
    echo "El resultado en double es: ".doubleval($cadena). "<br>";
    echo "El resultado en cadena es: ".strval($cadena). "<br>";

    ?>

</body>
</html>