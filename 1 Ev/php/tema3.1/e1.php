<html>
<body>
    <center>
   <h1>Sentencia if</h1>
    
    <?php
    $a = 3;
    $b = 7;
    $c = 9;

    echo "Los tres numeros a comparar son</b> $a, $b y $c<br>";

    if ($b > $a && $b > $c){
        $a = $b;
    }
    else if ($c > $a && $c > $b){
        $a = $c;
    }

    echo "El mayor es $a";
    
    ?>

</body>
</html>