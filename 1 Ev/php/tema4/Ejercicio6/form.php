<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cuestionario</title>
</head>
<body>

<form action="script.php" method="post">
  Escribe tu nombre: <input type="text" name="name"><br>
  Escribe tu clave: <input type="password" name="pass"><br>
  Elige tu color de coche favorito: <br>
  <input type="radio" name="coche" checked> Rojo<br>
  <input type="radio" name="coche"> Verde<br>
  <input type="radio" name="coche"> Azul<br>
  Elige los extras: <br>
  <input type="checkbox" name="aire"> Aire Acondicionado<br>
  <input type="checkbox" name="tapi"> Tapiceria en piel<br>
  <input type="checkbox" name="llantas"> Llantas de aluminio<br>
  ¿Cual es el precio maximo <br>
  que estarias dispuesto a pagar?
  <select name="precio">
      <option>Menos de 6.000€</option>
      <option>6.001 - 8.000€</option>
      <option selected>8.001 - 10.000€</option>
      <option>10.001 - 12.000€</option>
      <option>12.001 - 14.000€</option>
      <option>Mas de 14.000€</option>
  </select><br>
  Escribe aqui cualquier otro comentario: <br>
  <textarea name="com" cols="50" rows="5"></textarea> <br>
  <input type="submit" value="Enviar">
  <input type="reset" value="Reset">
</form>
<script src="script.php"></script>
</body>
</html>