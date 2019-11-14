<?php
	require_once('funciones.php');

	if(isset($_POST["enviar"])){
		procesForm();
	}else if(isset($_POST["enviar1"])){
		procesForm1();
	}else if(isset($_POST["volver"])){
		displayForm($mensaje = "");
	}else{
		displayForm($mensaje = "");
	}

?>