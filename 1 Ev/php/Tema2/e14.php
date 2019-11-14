<html>
<body>
    <center>
   <h1>Incrementos y Decrementos</h1>
    
    <?php
    $a = 7;


    echo "El valor de inicial de \$a es: <b>".$a. "</b><br>";
    $aux = ++$a;
    echo "Al preincrementar (++\$a) devuelve: <b>".$aux. "</b><br>";
    $aux = $a++;
    echo "Al postincrementar (\$a++) devuelve: <b>".$aux. "</b><br>";
    echo "El valor inicial de  \$a es: <b>".$a. "</b><br><br>";

    $b = 7;

    echo "El valor de inicial de \$b es: <b>".$b. "</b><br>";
    $aux = --$b;
    echo "Al predecrementar (--\$b) devuelve: <b>".$aux. "</b><br>";
    $aux = $b--;
    echo "Al postdecrementar (\$b--) devuelve: <b>".$aux. "</b><br>";
    echo "El valor inicial de  \$b es: <b>".$b. "</b><br><br>";

    echo "A \$c le asignamos a <b>'\$b-- +3'</b><br>";
    $c = $b-- + 3;
    echo "El valor final de  \$b es: <b>".$b."</b>. Valor final de \$c:<b>".$c;
    ?>

</body>
</html>