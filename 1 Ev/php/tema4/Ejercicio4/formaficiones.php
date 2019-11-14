<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aficiones</title>
</head>
<body>

<form action="aficiones.php" method="post">
  <p>Tu nombre: <input type="text" name="nombre"></p>
  Tu sistema favorito:
  <select name="sistema">
      <option value="Linux">Linux</option>
      <option value="Windows">Windows</option>
      <option value="IOSX">IOSX</option>
  </select>
  <p>Te gusta el futbol: <input type="checkbox" name="futbol"></p>
  <p>¿Te gusta el golf? Si<input type="radio" name="si">
    No<input type="radio" name="si"></p>
  <p>Aficiones <br> 
    <textarea name="aficion" cols="30" rows="10"></textarea>
  </p>
  <p>
    <input type="submit" value="Enviar">
    <input type="reset" value="Reset">
  </p>
</form>


<script src="aficiones.php"></script>
</body>
</html>