<?php
	require_once('funcion.php');
	if(isset($_POST["enviar"])) //primer form
		displayForm2(15);
	else if(isset($_POST["enviar1"]))
		procesForm();
	else if(isset($_POST["volver"]))
		displayForm1($mensaje = "");
	else
		displayForm1($mensaje = "");
?>