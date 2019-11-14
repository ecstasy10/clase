<html>
<head>
<meta charset="UTF-8">
<title>Paso 1</title>
    <style>
    form {
    padding-top: 50px;
    }
    </style>
</head>
<body>
    <div>
        <form action="index.php" method="post">
        <h2>Formulario: </h2>
            <div>
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="nombre" />
            </div>
            <div>
                <label for="apellidos">Apellidos</label>
                <input type="text" id="apellidos" name="apellidos" />
            </div>
            <div>
                Indica el número de habitaciones de tu vivienda: <br>
                <input type="radio" name="n_habitaciones" value="Una"> Una <br>
                <input type="radio" name="n_habitaciones" value="Dos"> Dos <br>
                <input type="radio" name="n_habitaciones" value="Tres"> Tres <br>
                <input type="radio" name="n_habitaciones" value="Cuatro o mas"> Cuatro o más <br>
            </div>
            <div>
                ¿Qué medio de transporte utilizas? <br>
                Bicicleta <input type="checkbox" name="transporte[]" id="t" value="Bicicleta"> <br>
                Autobus <input type="checkbox" name="transporte[]" id="autobus" value="Autobus"> <br>
                Coche Particular <input type="checkbox" name="transporte[]" id="coche" value="Coche"> <br>
                Tren <input type="checkbox" name="transporte[]" id="tren" value="Tren"> <br>
            </div>
            <input type="submit" name="paso1" value='Enviar'>
            </form>
    </div>
</body>
</html>