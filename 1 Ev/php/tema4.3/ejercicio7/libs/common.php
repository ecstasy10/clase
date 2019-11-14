<?php
/**
* LIBRERIA DE FUNCIONES QUE FACILITA LA PROGRAMACIÓN DEL PROGRAMADOR ;)
*/
/**
* getTagsVista: Obtiene todos los campos {{CAMPO}} de una vista
*/
function getTagsVista($vista) {
preg_match_all('/\{{(.*?)\}}/', $vista, $tags); //busca en la cadena $vista todas las coincidencias con la expression regular y las almacena en $tags
return $tags[1];
}

function getPost($str) {
    return (isset($_POST["$str"])) ? ($_POST["$str"]) : (null);
}