<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio </title>
</head>
<body>
<?php
function displayForm1($mensaje)
{
    echo $mensaje;
    ?>
    <form action="index.php" method="post">
        <h2>PIZZACARA. La pizza más cara de España (y por lo tanto del mundo).</h2>
        <br>
        <br>
        Nombre: <input type="text" name="nombre">
        <br>
        Calle: <input type="text" name="calle">
        Número: <input type="text" name="numero">
        Puerta: <input type="text" name="puerta">
        Localidad: <input type="text" name="localidad">
        <input type="submit" name="enviar" value="Aceptar Datos">
    </form>
    <?php
}
function displayForm2($mensaje, $precio)
{
    echo $mensaje;
    if (!preg_match("/^[a-zA-Z][a-zA-Z ]+$/", ($_POST["nombre"])) ||
        !preg_match("/^[a-zA-Z][a-zA-Z ]+$/", ($_POST["calle"])) ||
        !preg_match("/^[0-9]+$/", ($_POST["numero"])) ||
        !preg_match("/^[a-zA-Z]?$/", ($_POST["puerta"])) ||
        !preg_match("/^[a-zA-Z][a-zA-Z ]+$/", ($_POST["localidad"]))) {

        if (!preg_match("/^[a-zA-Z][a-zA-Z ]+$/", ($_POST["nombre"]))) {

            $mensaje = "Comprueba el campo nombre, este es alfabetico y no puede estar vacio";
        }
        if (!preg_match("/^[a-zA-Z][a-zA-Z ]+$/", ($_POST["calle"]))) {
            $mensaje = "Comprueba el campo calle, este es alfabetico y no puede estar vacio";
        }
        if (!preg_match("/^[0-9]+$/", ($_POST["numero"]))) {
            $mensaje = "Comprueba el campo numero, este es numerico y no puede estar vacio";
        }
        if (!preg_match("/^[a-zA-Z]?$/", ($_POST["puerta"]))) {
            $mensaje = "Comprueba el campo puerta, este es alfabetico y no puede estar vacio";
        }
        if (!preg_match("/^[a-zA-Z][a-zA-Z ]+$/", ($_POST["localidad"]))) {
            $mensaje = "Comprueba el campo localidad, este es alfabetico y no puede estar vacio";
        }
        displayForm1($mensaje);

    } else {
        echo "<h2>PIZZACARA. La pizza más cara de España (y por lo tanto del mundo).</h2>";
        echo "Bienvenido " . $_POST["nombre"] . ", elige el tamaño y los ingredientes o la oferta del dia";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo displayResultado($precio);
        ?>
        <form action="" method="post">
            <br>
            <br>
            Indica si deseas la pizza de oferta y/o la pizza de ingredientes
            <br>
            Pizza de oferta <input type="checkbox" name="oferton">
            <br>
            Pizza a medida <input type="checkbox" name="medida">
            <br>
            Tamaño de la pizza:
            <br>
            <br>
            <input type="radio" name="tamaño" value="Pequeña"> Pequeña
            <input type="radio" name="tamaño" value="Mediana" checked> Mediana
            <input type="radio" name="tamaño" value="Grande"> Grande
            <br>
            <br>
            Indica los ingredientes:
            <br>
            <br>
            Champiñon <input type="checkbox" name="Champiñon" value="Champiñon"><br>
            Queso <input type="checkbox" name="Queso" value="Queso"><br>
            Jamon <input type="checkbox" name="Jamon" value="Jamon"><br>
            Tomate <input type="checkbox" name="Tomate" value="Tomate"><br>

            <input type="submit" name="enviar2" value="Enviar">
        </form>
        <?php
    }
}

function procesForm($precio){

    echo "<h2>PIZZACARA. La pizza más cara de España (y por lo tanto del mundo).</h2>";
    $repeticionesIngredientes = 0;
    $ing = "";
   if (isset($_POST["oferton"])) {
        if (isset($_POST["medida"])) {
            echo "Has pedido la pizza del ofertón";
            if (isset($_POST["Champiñon"])) {
                $repeticionesIngredientes = $repeticionesIngredientes + 1;
                $ing = $ing + "Champiñon, ";
            }
            if (isset($_POST["Queso"])) {
                $repeticionesIngredientes = $repeticionesIngredientes + 1;
                $ing = $ing + "Queso, ";
            }
            if (isset($_POST["Jamon"])) {
                $repeticionesIngredientes = $repeticionesIngredientes + 1;
                $ing = $ing + "Jamon, ";
            }
            if (isset($_POST["Tomate"])) {
                $repeticionesIngredientes = $repeticionesIngredientes + 1;
                $ing = $ing + "Tomate";
            }
            echo "<br>Y una pizza a medida con el siguiente número de ingredientes: " . $repeticionesIngredientes . " : " . $ing;
            echo "<br>total asciende a " . calculaPrecio($precio) . " euros";
        } else {
            echo "Has pedido la pizza del ofertón<br>";
            echo "<br>total asciende a " . calculaPrecio($precio) . " euros";
        }
    } elseif (isset($_POST["medida"])) {
        echo "Pizza personalizada";
        if (isset($_POST["Champiñon"])) {
            $repeticionesIngredientes = $repeticionesIngredientes + 1;
            $ing = $ing + $_POST["Champiñon"];
        }
        if (isset($_POST["Queso"])) {
            $repeticionesIngredientes = $repeticionesIngredientes + 1;
            $ing = $ing + $_POST["Queso"];
        }
        if (isset($_POST["Jamon"])) {
            $repeticionesIngredientes = $repeticionesIngredientes + 1;
            $ing = $ing + $_POST["Jamon"];
        }
        if (isset($_POST["Tomate"])) {
            $repeticionesIngredientes = $repeticionesIngredientes + 1;
            $ing = $ing + $_POST["Tomate"];
        }
        echo "<br>Y una pizza a medida con el siguiente número de ingredientes: " . $repeticionesIngredientes . " : " . $ing;
        echo "<br>total asciende a " . calculaPrecio($precio) . " euros";

    } else {
        echo "No has elegido pizza";

    }
    echo "<br><br><a href='index.php'>Volver</a>";
}
function calculaPrecio($precio)
{

    $valor = 0;
    if (isset($_POST["tamaño"])) {

        if ($_POST["tamaño"] == "Pequeña") {
            $valor = 30;
        }

        if ($_POST["tamaño"] == "Mediana") {

            $valor = 45;


        }

        if ($_POST["tamaño"] == "Grande") {

            $valor = 60;


        }


    }

    if (isset($_POST["Champiñon"])) {

        $valor = $valor + 5;

    }

    if (isset($_POST["Queso"])) {

        $valor = $valor + 5;

    }

    if (isset($_POST["Jamon"])) {

        $valor = $valor + 5;

    }

    if (isset($_POST["Tomate"])) {

        $valor = $valor + 5;

    }

    return $valor;


}

function dia()
{

    $dia = date('D');

    $semana = array(
        "Mon" => "Lunes",
        "Tue" => "Martes",
        "Wed" => "Miércoles",
        "Thu" => "Jueves",
        "Fri" => "Viernes",
        "Sat" => "Sábado",
        "Sun" => "Domingo");


    return $semana[$dia];

}

function ofertaDia($precio)
{

    $tipoPizzas = array(

        "Pollo",
        "Ensalada",
        "Boloñesa",
        "Prosciutto",
        "Vegetal",
        "Jamon",
        "Integral"


    );

    $actual = date('D');


    switch ($actual) {
        case 'Mon':

            $precio = $precio - (($precio / 100) * 10);

            return "Tipo de la pizza " . $tipoPizzas[5] . " con precio " . $precio;

        case 'Tue':

            return "Tipo de la pizza " . $tipoPizzas[3] . " con precio " . $precio;

        case 'Wed':

            return "Tipo de la pizza " . $tipoPizzas[2] . " con precio " . $precio;

        case 'Thu':

            return "Tipo de la pizza " . $tipoPizzas[5] . " con precio " . $precio;

        case 'Fri':

            return "Tipo de la pizza " . $tipoPizzas[1] . " con precio " . $precio;

        case 'Sat':

            return "Tipo de la pizza " . $tipoPizzas[3] . " con precio " . $precio;

        case 'Sun':
            $precio = $precio + (($precio / 100) * 15);

            return "Tipo de la pizza " . $tipoPizzas[5] . " con precio " . $precio;
    }
}
function displayResultado($precio){
    echo "<br>El oferton del " . dia() . " es para la siguiente pizza: " . ofertaDia($precio);

}

?>


</body>
</html>