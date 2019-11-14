<?php
class Singleton
{
private static $_instancia;
private $_contador;
private function __construct()
{
echo "He creado un " . __CLASS__ . "\n"; //la constante __CLASS__ contiene el nombre de la clase
$this->_contador =0;
}
//método que devuelve la instancia clase (si existe, si no crea una)
public static function getInstance()
{
//determina si la propiedad $_instancia es un objeto instanciado de la clase Singleton, es decir, verifica si la clase Singleton (self) está instanciada
if (!self::$_instancia instanceof self) //también vale: if ( !Singleton::$_instancia instanceof Singleton)
{
self::$_instancia = new self;
}
return self::$_instancia;
}

public function __clone() { 
        //get_class() devuelve el nombre de la clase de un objeto 
        trigger_error("No puedes clonar un objeto de la clase ". get_class($this),E_USER_ERROR ); 
    }

public function __wakeup() { 
    trigger_error("No puedes deserializar una instancia de ". get_class($this),E_USER_ERROR ); 
}

public function incrementar()
{
return ++$this->_contador;
}
}
$instancia = Singleton::getInstance();
echo "<br>instancia (incrementar): " . $instancia->incrementar() . "<br>";
echo "instancia (incrementar): " .$instancia->incrementar() . "<br>";
echo "instancia (incrementar): " .$instancia->incrementar() . "<br>";
$otraInstancia = Singleton::getInstance();
echo "otraInstancia (incrementar): " .$otraInstancia->incrementar() . "<br>";
echo "otraInstancia (incrementar): " .$otraInstancia->incrementar() . "<br>";