<html>

<head>
    <title>Hola usuario</title>
</head>

<body>
    <h1>Hola usuario</h1>
    <?php
        if (filter_has_var(INPUT_POST, "enviar")){ // (if isset($_POST[“enviar”])) {
            procesForm();
            } 
            else {
                //No se ha ejecutado el formulario, así que ejecutamos la función que lo crea
                displayForm($mensaje='');
                }
            function displayForm($mensaje) {
                if ($mensaje) {
                    echo $mensaje;
                }
            }
    ?>
    <form action="" method="post">
        <fieldset>
            <label>Por favor, introduce tu nombre</label>
            <input type="text" name="userName" />
            <input type="submit" name="enviar" value="Enviar" />
        </fieldset>
    </form>
    <?php
            function procesForm(){
            // El formulario se ha ejecutado, así que trabajamos con sus datos
                if (!empty($_POST["userName"])){
                    echo "<h2>Hola,".$_POST['userName']."!</h2> \n";
                } else {
                    $mensaje="<b>No has introducido el nombre.</b>";
                    displayForm($mensaje);
                }
            }
    ?>
</body>

</html>