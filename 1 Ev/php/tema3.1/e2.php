<html>
<body>
    <center>
   <h1>Sentencia if</h1>
    
    <?php
    $dia = date("D");

    if ($dia = "Mon"){
        $dia ="Miercoles";
    }
    else if ($dia = "Tue"){
        $dia ="Martes";
    }
    else if ($dia = "Wed"){
        $dia ="Miercoles";
    }
    else if ($dia = "Thu"){
        $dia ="Jueves";
    }
    else if ($dia = "Fri"){
        $dia ="Viernes";
    }
    else if ($dia = "Sat"){
        $dia ="Sábado";
    }
    else {
        $dia = "Domingo";
    }

    echo "Hoy es <b>$dia</b>";
    
    ?>

</body>
</html>