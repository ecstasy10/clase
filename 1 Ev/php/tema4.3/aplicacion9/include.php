<?php
/**
* primero los ficheros de libs, pues hay dependencias respecto a las funciones contenidas en libs (en este caso la llamada a la función contains() y la declaración de las clases hijas de la clase Singleton)
*La clase RecursiveDirectoryIterator proporciona una interfaz para iterar recursivamente directorios del sistema de ficheros.
*/
$Directory = new RecursiveDirectoryIterator(dirname(__FILE__).'/libs/'); // dirname(__FILE__) es lo mismo que __DIR__
//La clase RecursiveIteratorIterator se puede usar para recorrer iteradores recursivos.
$Iterator = new RecursiveIteratorIterator($Directory);
//La clase RegexIterator se puede usar para filtrar otro iterador basado en una expresión regular
// RecursiveRegexIterator::GET_MATCH devuelve todas las coincidencias
$Regex = new RegexIterator($Iterator, '/^.+\.php$/i', RecursiveRegexIterator::GET_MATCH);
//El objeto $Regex pude ser recorrido como un array cuyos elementos son los paths completos de los
// ficheros. Los índices también son los paths completos.
foreach($Regex as $key => $item)
require_once $key;
/**
* require_once recursivo de los archivos de la pagina
*/
$Directory = new RecursiveDirectoryIterator(dirname(__FILE__));
$Iterator = new RecursiveIteratorIterator($Directory);
$Regex = new RegexIterator($Iterator, '/^.+\.php$/i', RecursiveRegexIterator::GET_MATCH);
foreach($Regex as $key => $item)
if (!contains('index', $key) && !contains('include', $key) && !contains('vista', $key))
require_once $key;