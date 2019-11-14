<html>
<body>
    <center>
    <h1>Trabajando con constantes predefinidas</h1>
</body>
</html>

<?php
define("PHP", '5.5.12');
define("SYS", 'WINNT');

echo "Estamos trabajando con <B> PHP version ".PHP."</B><BR><BR>";
echo "Sobre un sistema operativo <B>".SYS."</B><BR>";
echo "El script que está ejecutando (".__FILE__.") se encuentra en el siguiente directorio ".__DIR__;
?>
