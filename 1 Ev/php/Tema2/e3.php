<?php
$mes = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
$num = array("31", "28", "31", "30", "31", "30", "31", "31", "30", "31", "30", "31");
$i = 0;

while($i < count($mes)) {
	
    echo "El mes de ".$mes[$i]." tiene ".$num[$i]."<br>";
   $i++;
  
}
?>