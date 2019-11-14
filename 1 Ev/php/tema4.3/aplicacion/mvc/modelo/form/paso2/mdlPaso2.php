<?php
class mdlPaso2 {
public function onCargarVista($path) {
$vista = file_get_contents($path);
echo mdlPaso2Parser::loadContent($vista);
}
}