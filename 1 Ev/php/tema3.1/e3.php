<html>
<body>
    
    <?php
    date_default_timezone_set("Europe/Madrid");
    $a = date("G");

    if ($a < 12 && $a >= 5)
        $a = "Buenos dias!";
    else if ($a >= 12 && $a < 18)
        $a ="Buenas tardes!";
    else
        $a ="Buenas noches!";

    echo "<h1><b>$a</b></h1>";

    if (date("Y")%400 == 0)
        echo "¿Sabes que el año".date("Y")." es bisiesto?";
    else
        echo "Este año no es bisiesto";
    ?>

</body>
</html>