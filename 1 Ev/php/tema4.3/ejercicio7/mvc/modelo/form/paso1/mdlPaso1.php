<?php
class mdlPaso1 extends Singleton {
    public function onGestionPagina() {
        $paso=PASO1;
        // cambiamos el paso si se ha pulsado en boton paso1 que envía el formulario
        if (getPost("paso1")) {
            $paso=PASO2;
        }
        return $paso;
    }

    public function onCargarVista($path) {
        $vista = file_get_contents($path); //convierte el contenido de un fichero en un string
        echo $vista;
    }
}