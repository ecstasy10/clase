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
                    (getPost($tag)) ? $str = getPost($tag): $str = 'Ninguno';
                    break;
                case "apellidos":
                    (getPost($tag)) ? $str = getPost($tag): $str = 'Ninguno';
                    break;
                case "n_habitaciones":
                    (getPost($tag)) ? $str = getPost($tag): $str = 'Ninguno';
                    break;
                case "trans":
                    (getPost($tag)) ? $str = implode(", ", getPost($tag)): $str = 'Ninguno';
                    break;
            }
            $vista = str_replace('{{' . $tag . '}}', $str, $vista);
        }
        return $vista;
    }
}