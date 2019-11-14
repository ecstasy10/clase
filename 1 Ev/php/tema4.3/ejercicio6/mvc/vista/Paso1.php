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
        <h2>Formulario de inscripción: </h2>
            <div>
                <p>Gracias por haber elegido formar parte del club de juebos. <br>
                Para registrarse, por favior, rellene sus datos a continuacion y haga clic en Enviar Datos</p>
            </div>
            <div>
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="nombre" />
            </div>
            <div>
                <label for="apellidos">Apellidos</label>
                <input type="text" id="apellidos" name="apellidos" />
            </div>
            <div>
               Introduce tu password: <br>
                <input type="password" name="pass" id="pass"> <br>
            </div>
             <div>
               Vuelve a introducir tu password: <br>
                <input type="password" name="pass" id="pass"> <br>
            </div>
            <div>
                Es usted hombre... <input type="radio" name="sexo" value="hombre">
                ... o mujer? <input type="radio" name="sexo" value="mujer">
            </div>
            <div>
                ¿Cuales son sus juegos favoritos?
                <select multiple name="juegos[]">
                    <option value="Tute">Tute</option>
                    <option value="Mus">Mus</option>
                    <option value="Bridge">Bridge</option>
                </select> <br>
            </div>
            <div>
                ¿Desea recibir un boletin de noticias sobre estos juegos?
                <input type="checkbox" name="noticias" id="noticias"> <br>
            </div>
            <div>
                ¿Desea recibir ofertas de barajas, viajes...?
                <input type="checkbox" name="ofertas" id="ofertass"> <br>
            </div>
            <div>
                ¿Algun comentario?
                <textarea name="coment" id="coment" cols="30" rows="10" placeholder="Soy un ludopata"></textarea>
                <br>
            </div>
            <input type="submit" name="paso1" value='Enviar'>
            </form>
    </div>
</body>
</html>