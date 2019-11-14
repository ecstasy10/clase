<html>
<body>
    <center>
   <h1>Operadores aritméticos</h1>
    
    <?php
    define("euro", 166.386);

    echo "El valor de la constante 'euro' es: <b>".euro. "pts<b><br><br>";

    echo "1000€ son ".(euro * 1000). "<br>";
    echo "1000pts. son ".intval((1000/euro)*100)/100. "<br>";
    $aux = 157 % 50;
    echo "157€ son ".$aux;
    ?>

</body>
</html>