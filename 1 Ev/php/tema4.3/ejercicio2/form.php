<?php

class hola {
    private $_num_letras;
    private $_cad;

    public function __construct($cadena){
        $this->_cad = $cadena;
    }

    public static function contarLetras(){
        $this->_numLetras=strlen($this->_cad);
    }
    
    public function getNumLetras(){
        return $this->_numLetras;
    }
}
?>