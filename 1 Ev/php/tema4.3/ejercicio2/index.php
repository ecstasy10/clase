<?php
require_once("form.php");
    $num = hola::contarLetras($_GET['frase']);
    echo "La frase: {$_GET['frase']} contiene $num caracteres";
    
?>