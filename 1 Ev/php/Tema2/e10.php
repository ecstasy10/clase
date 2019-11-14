<html>
<body>
    <center>
   <h1>Usando gettype() y settype()</h1>
    
    <?php
    $cadena = "3.1416 es el valor de Pi";

    echo "El valor de la \$cadena es: <b>".$cadena."</b><br>";
    echo "Es de tipo ".gettype($cadena). "<br><br>";
    settype($cadena, "float");
    echo "Si lo paso a float obtengo: ".$cadena."<br>";
    settype($cadena, "integer");
    echo "Si lo paso a entero obtengo: ".$cadena;
    ?>

</body>
</html>