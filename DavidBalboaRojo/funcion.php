<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
    .alert{
        background: red;
        color: white;
    }
    </style>
    <title>Examen David Balboa Rojo</title>
</head>
<body>
    <h1>Restaurante de comida casera CHOLESTEROL FOOD</h1>
    
    <?php
        function displayForm1($mensaje){
            if($mensaje)
                echo $mensaje;
    ?>
    <form action="index.php" method="post">
    Introduzca sus datos, por favor:<br>
    Nombre: <input type="text" name="nombre"><br>
    Calle: <input type="text" name="calle"><br>
    Localidad: <input type="text" name="localidad"><br>
    cp: <input type="text" name="cp"><br>
    <input type="submit" name="enviar" value="Enviar">
    </form>
    
</body>
</html>

<?php
        }// Este cierra el del otro php
        
    function displayForm2($precio) {
        $mensaje = "";
        if(preg_match("/^[A-Za-z][a-zA-Z ]+$/", $_POST["nombre"]) 
        && preg_match("/^[A-Za-z][a-zA-Z ]+$/", $_POST["calle"])
        && preg_match("/^[A-Za-z][a-zA-Z ]+$/", $_POST["localidad"])
        && preg_match("/^[0-9]+$/", $_POST["cp"])){

             echo "<h1>Bienvenido, ".$_POST["nombre"]."</h1><br>";
            menuDia($precio);
            echo "<form action='index.php' method='post'>";
            echo "<h1>Elige el Vino y el/los postres</h1><br>";
            echo "Si lo deseas, elige un vino de la carta de vinos<br>";
            echo "<input type='radio' name='vino' value='Chateau SanSe'> Chateau SanSe 
            <input type='radio' name='vino' value='VegaColmenar'> VegaColmenar  
            <input type='radio' name='vino' value='Tres Cantos Gran Reserva'> Tres Cantos Gran Reserva";
            echo "<p>Si te apetece, prueba nuestros excelentes postres:";
            echo "<br>Brownie empalagoso<input type='checkbox' name='brownie'><br>";
            echo "Trufa de Oreo de terciopelo rojo<input type='checkbox' name='trufa'><br>";
            echo "Tarta Ajedrez de Chocolate<input type='checkbox' name='tarta'><br>";
            echo "Galleta de Chocolate<input type='checkbox' name='galleta'><br>";
            echo "<br><br><input type='submit' name='enviar1' value='Enviar'></p>";
            echo "</form>";

        }
        else{
            if(!(preg_match("/^[A-Za-z][a-zA-Z ]+$/", $_POST["nombre"])))
                $mensaje .= "<div class='alert'>Por favor, rellene el campo <b>Nombre</b> correctamente.</div><br>";
            if(!(preg_match("/^[A-Za-z][a-zA-Z ]+$/", $_POST["calle"])))
                $mensaje .= "<div class='alert'>Por favor, rellene el campo <b>Calle</b> correctamente.</div><br>";
            if(!(preg_match("/^[A-Za-z][a-zA-Z ]+$/", $_POST["localidad"])))
                $mensaje .= "<div class='alert'>Por favor, rellene el campo <b>Localidad</b> correctamente.</div><br>";
            if(!(preg_match("/^[0-9]+$/", $_POST["cp"])))
                $mensaje .= "<div class='alert'>Por favor, rellene el campo <b>CP</b> correctamente.</div><br>";
            
            displayForm1($mensaje);
        }
    }

    function displayResultado(){
        $cont = 0;
        $postre = "";
        if(isset($_POST["vino"]))
            echo "Has pedido el siguiente vino: <b>".$_POST["vino"]."</b><br>";
        else
            echo "No has elegido ningun vino<br>";
        if(isset($_POST["brownie"]) || isset($_POST["trufa"]) || isset($_POST["tarta"]) || isset($_POST["galleta"])){
            if (isset($_POST["brownie"])){
                $cont++;
                $postre .= "Brownie ";
            }
            if (isset($_POST["trufa"])){
                $cont++;
                $postre .= "Trufa ";
            }
            if (isset($_POST["tarta"])){
                $cont++;
                $postre .= "Tarta ";
            }
            if (isset($_POST["galleta"])){
                $cont++;
                $postre .= "Galleta ";
            }
            echo "<br>Has pedido <b>$cont</b> postres: <b>".$postre."</b>";
        }
        else
            echo "No has elegido ningun postre<br>";
    }

    function procesForm(){
        displayResultado();
        $total = calcula_precio(15);
        echo "<br>El total asciende a la friolera de: <b>".$total." euros </b><br>";

        echo "<br>Recibiras tu pedido en la siguiente direccion:<br><br>";

        echo "Destinatario: <br>";
        echo "Direccion: <br>";
        echo "Localidad: <br>";
        echo "cp: <br>";

        echo "<form action='index.php' method='post'>";
        echo "<br><br><input type='submit' name='volver' value='Volver'>";
        echo "</form>";
    }

    function menuDia($precio){
        $m [0]["Lunes"] = "Hamburguesa";
        $m [0]["Martes"] = "Perrito Caliente";
        $m [0]["Miercoles"] = "Pizza";
        $m [0]["Jueves"] = "Kebab";
        $m [0]["Viernes"] = "Filete";
        $m [0]["Sabado"] = "Tocino";
        $m [0]["Domingo"] = "Espaguetti";

        $m [1]["Lunes"] = "Patatas Fritas";
        $m [1]["Martes"] = "Aros de cebolla";
        $m [1]["Miercoles"] = "Complementos de pizza";
        $m [1]["Jueves"] = "Patatas Deluxe";
        $m [1]["Viernes"] = "Patatas asadas";
        $m [1]["Sabado"] = "Filete de ternera";
        $m [1]["Domingo"] = "Ensaladilla Rusa";

        $dia = dia();
        
        echo "<center>Para los <b>$dia</b> Tenemos:<br>";
        echo "Primero: ".$m[0][$dia]."<br>";
        echo "Segundo: ".$m[1][$dia]."<br>";
        echo "<br>Precio: ".$precio." euros</center>";
        return($precio);
    }

    function calcula_precio($p){
        $pTotal = $p;
        if(dia() == "Lunes"){
            $pLunes = 10 * 0.9;
            $pTotal =$pLunes + $p;
        }
        else if(dia() == "Domingo"){
            $pDomingo = 10 * 1.15;
            $pTotal =$pDomingo + $p;
        }

        if(isset($_POST["brownie"]))
            $pTotal += 5;
        if (isset($_POST["trufa"]))
            $pTotal += 5;
        if (isset($_POST["tarta"]))
            $pTotal += 5;
        if (isset($_POST["galleta"]))
            $pTotal += 5;

        if (isset($_POST["vino"])){
        if ($_POST["vino" ] === "Chateau SanSe")
            $pTotal += 20;
        else if ($_POST["vino"] === "VegaColmenar")
            $pTotal += 30;
        else if ($_POST["vino"] === "Tres Cantos Gran Reserva")
            $pTotal += 40;
        }

	return ($pTotal);
    }

    function dia(){
        switch (date("D")) {
            case "Mon":
                return ("Lunes");
                break;
            case "Tue":
                return ("Martes");
                break;
            case "Wed":
                return ("Miercoles");
                break;
            case "Thu":
                return ("Jueves");
                break;
            case "Fri":
                return ("Viernes");
                break;
            case "Sat":
                return ("Sabado");
                break;
            case "Sun":
                return ("Domingo");
                break;
        }
    }

?>