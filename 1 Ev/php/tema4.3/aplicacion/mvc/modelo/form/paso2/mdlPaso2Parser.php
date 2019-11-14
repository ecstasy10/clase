<?php
class mdlPaso2Parser {
public static function loadContent($vista) {
$vista = self::_pasoSiguiente($vista);
return $vista;
}
private static function _pasoSiguiente($vista) {
foreach (getTagsVista($vista) as $tag) {
// sustituimos en el formulario los tags por el contenido de los elementos del formulario
switch ($tag) {
case "nombre":
$str = $_POST['nombre'];
break;
case "apellidos":
$str = $_POST['apellidos'];
break;
}
$vista = str_replace('{{' . $tag . '}}', $str, $vista);
}
return $vista;
}
}