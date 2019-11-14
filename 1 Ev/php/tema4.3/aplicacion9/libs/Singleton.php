<?php
class Singleton
{
    private static $_instances = array(); // nos permitirá almacenar instancias de diferentes clases
    private function __construct() {}

    public function __clone() {
        // get_called_class() obtiene el nombre de la clase del objeto que se intenta clonar
        trigger_error("No puedes clonar un objeto de la clase ". get_called_class(),E_USER_ERROR );
    }
    public function __wakeup()
    {
        trigger_error("No puedes deserializar una instancia de ". get_called_class(),E_USER_ERROR );
    }
    public static function getInstance()
    {
        $cls = get_called_class(); // Obtiene el nombre de la clase desde la que se llama al método estático (por ejemplo: mdlPaso1::getInstance()).
        if (!isset(self::$_instances[$cls])) {
            self::$_instances[$cls] = new static; // con new static se instancia la clase hija (que es desde donde se ha llamado al método, por ejemplo: mdlPaso1::getInstance)
        }
        return self::$_instances[$cls];
    }
}