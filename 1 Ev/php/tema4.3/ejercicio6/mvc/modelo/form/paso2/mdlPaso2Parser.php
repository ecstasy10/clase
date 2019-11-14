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
                case "sexo":
                    (getPost($tag)) ? $str = getPost($tag): $str = 'Ninguno';
                    break;
                case "juegos":
                    (is_array(getPost($tag))) ? $str = implode(", ", getPost($tag)): $str = 'Ninguno';
                    break;
                case "noticias":
                    (getPost($tag)) ? $str = "Usted si desea recibir noticias sobre juegos": $str = "Usted no desea recibir noticias sobre juegos";
                    break;  
                case "ofertas":
                    (getPost($tag)) ? $str = "Usted si desea recibir ofertas sobre juegos": $str = "Usted no desea recibir noticias sobre juegos";
                    break;
                case "coment":
                    (getPost($tag)) ? $str = getPost($tag): $str = "No ha añadido comentarios";
                    break;
                
            }
            $vista = str_replace('{{' . $tag . '}}', $str, $vista);
        }
        return $vista;
    }
}