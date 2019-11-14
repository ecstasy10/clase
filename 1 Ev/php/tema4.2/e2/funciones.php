<html>
<head>
	<meta charset="UTF-8">
	<title>Examen---Jorge Oltra--DAW2</title>
	<style type="text/css">
		.red {
			background: red;
			color: white;
		}
	</style>
</head>
<!-- Observaciones:
	Intente hace una variable global para añadirsela a la funcion menuDia() y asi
	poder tambien obtener el mismo resultado con la funcion calcular_precio(),
	al salirme error lo hice de esa manera. Ya que al retornar el precio dentro de
	la funcion menuDia() el resultado es el menu entero cosa que no queria implementar
	como no sabia como resolver esta duda, lo puse con un mismo precio a todos. -->
<body>
<center>
<h1>RESTAURANTE DE COMIDA CASERA ON-LINE</h1>
<?php
	function displayForm($mensaje){
		menuDia(10);
		if($mensaje){
			echo $mensaje;
		}
?>
<form action="index.php" method="post">
INTRODUCE TUS DATOS:<br>
Nombre: <input type="text" name="nombre"><br>
Apellidos: <input type="text" name="apellidos"><br>
<input type="submit" name="enviar" value="Enviar">
</form>
</center>
</body>
</html>

<?php
}
function procesForm(){
	$mensaje = "";
	if(preg_match("/^[A-Za-z][a-zA-Z ]+$/", $_POST["nombre"]) && preg_match("/^[A-Za-z][a-zA-Z ]+$/", $_POST["apellidos"])){
		echo "<form action='index.php' method='post'>";
		echo "<h1>Cartas de vinos de nuestro restaurante</h1><br>";
		echo "Hola ".$_POST["nombre"].", elige el vino que prefieras<br>";
		echo "<br>Carta de vinos:<br>";
		echo "<input type='radio' name='vino' value='Pegasus Bay (30 euros)'> Pegasus Bay (30 euros)  <input type='radio' name='vino' value='Amaren Tempranillo (25 euros)'> Amaren Tempranillo (25 euros)  <input type='radio' name='vino' value='Cap de Barbaria (50 euros)'> Cap de Barbaria (50 euros)";
		echo "<br><br><input type='submit' name='enviar1' value='Enviar'>";
		echo "</form>";
	}else{
		if(preg_match("/^[A-Za-z][a-zA-Z ]+$/", $_POST["nombre"])){
		$mensaje .= "<p class = 'red'>Por favor, rellene el campo Apellidos correctamente.</p><br>";
			displayForm($mensaje);
		}else if(preg_match("/^[A-Za-z][a-zA-Z ]+$/", $_POST["apellidos"])){
		$mensaje .= "<p class = 'red'>Por favor, rellene el campo Nombre correctamente.</p><br>";
			displayForm($mensaje);
		}else{
			$mensaje .= "<p class = 'red'>Por favor, rellene el campo Nombre correctamente.</p><p class = 'red'>Por favor,
            
            rellene el campo Apellidos correctamente.</p>";
			displayForm($mensaje);
		}
	}
}

function procesForm1(){
	if($_POST["vino"] === "Pegasus Bay (30 euros"){
		echo "El vino que has elegido es: <b>".$_POST["vino"]."</b> y el precio total de la comida es: <b>".calcula_precio(30)."</b> euros<br>";
	}else if($_POST["vino"] === "Amaren Tempranillo (25 euros)"){
		echo "El vino que has elegido es: <b>".$_POST["vino"]."</b> y el precio total de la comida es: <b>".calcula_precio(25)."</b> euros<br>";
	}else{
		echo "El vino que has elegido es: <b>".$_POST["vino"]."</b> y el precio total de la comida es: <b>".calcula_precio(50)."</b> euros<br>";
	}
	echo "<form action='index.php' method='post'>";
	echo "<br><br><input type='submit' name='volver' value='Volver'>";
	echo "</form>";
}


function dia(){
	$diaActual = date("D");
	$diasSemana["Mon"] = "Lunes";
	$diasSemana["Tue"] = "Martes";
	$diasSemana["Wed"] = "Miercoles";
	$diasSemana["Thu"] = "Jueves";
	$diasSemana["Fri"] = "Viernes";
	$diasSemana["Sat"] = "Sabado";
	$diasSemana["Sun"] = "Domingo";

	return $diasSemana["$diaActual"];
}

function calcula_precio($precioVino){
	if(dia()=== "Lunes"){
		$precioLunes = 10 * 0.9;
		$precioTotal =$precioLunes + $precioVino;
	}else if(dia() === "Domingo"){
		$precioDomingo = 10 * 1.15;
		$precioTotal =$precioDomingo + $precioVino;
	}else{
		$precioTotal = 10 + $precioVino;
	}
	
	return $precioTotal;
}

function menuDia($precioMenu){
	$platos[0] = "Primero";
	$platos[1] = "Segundo";
	$platos[2] = "Postre";

	$menu ["Primero"][0] = "Sopa";
	$menu ["Primero"][1] = "Pasta";
	$menu ["Primero"][2] = "Lentejas";
	$menu ["Primero"][3] = "Gazpacho";
	$menu ["Primero"][4] = "Ensalada";
	$menu ["Primero"][5] = "Pasta";
	$menu ["Primero"][6] = "Cocido";

	$menu ["Segundo"][0] = "Cachopo";
	$menu ["Segundo"][1] = "Carne de cerdo";
	$menu ["Segundo"][2] = "Lubina";
	$menu ["Segundo"][3] = "Merluza";
	$menu ["Segundo"][4] = "Pulpo";
	$menu ["Segundo"][5] = "Ternera";
	$menu ["Segundo"][6] = "Migas";

	$menu ["Postre"][0] = "Fruta";
	$menu ["Postre"][1] = "Yogur";
	$menu ["Postre"][2] = "Helado";
	$menu ["Postre"][3] = "Fruta";
	$menu ["Postre"][4] = "Flan";
	$menu ["Postre"][5] = "Mus de chocolate";
	$menu ["Postre"][6] = "Fruta";

	$menuHoy = dia();
	switch ($menuHoy) {
		case "Lunes":
			echo "Para los $menuHoy Tenemos:<br>";
			for ($i=0; $i <count($platos) ; $i++) { 
					echo $platos[$i].":".$menu[$platos[$i]][0]."<br>";
				}
			$precio = $precioMenu * 0.9;
			echo "<br>PRECIO: $precio euros";
			echo "<br><br><b>Buen provecho</b>";
			return $precio;
			break;

		case "Martes":
			echo "Para los $menuHoy Tenemos:<br>";
			for ($i=0; $i <count($platos) ; $i++) { 
					echo $platos[$i].":".$menu[$platos[$i]][1]."<br>";
				}
			echo "<br>PRECIO: $precioMenu euros";
			echo "<br><br><b>Buen provecho</b>";
			return $precioMenu;
			break;

		case "Miercoles":
			echo "Para los $menuHoy Tenemos:<br>";
			for ($i=0; $i <count($platos) ; $i++) { 
					echo $platos[$i].":".$menu[$platos[$i]][2]."<br>";
				}
			echo "<br>PRECIO: $precioMenu euros";
			echo "<br><br><b>Buen provecho</b>";
			return $precioMenu;
			break;
		
		case "Jueves":
			echo "Para los $menuHoy Tenemos:<br>";
			for ($i=0; $i <count($platos) ; $i++) { 
					echo $platos[$i].":".$menu[$platos[$i]][3]."<br>";
				}
			echo "<br>PRECIO: $precioMenu euros";
			echo "<br><br><b>Buen provecho</b>";
			return $precioMenu;
			break;

		case "Viernes":
			echo "Para los $menuHoy Tenemos:<br>";
			for ($i=0; $i <count($platos) ; $i++) { 
					echo $platos[$i].":".$menu[$platos[$i]][4]."<br>";
				}
			echo "<br>PRECIO: $precioMenu euros";
			echo "<br><br><b>Buen provecho</b>";
			return $precioMenu;
			break;	
		
		case "Sabado":
			echo "Para los $menuHoy Tenemos:<br>";
			for ($i=0; $i <count($platos) ; $i++) { 
					echo $platos[$i].":".$menu[$platos[$i]][5]."<br>";
				}
			echo "<br>PRECIO: $precioMenu euros";
			echo "<br><br><b>Buen provecho</b>";
			return $precioMenu;
			break;

		case "Domingo":
			echo "Para los $menuHoy Tenemos:<br>";
			for ($i=0; $i <count($platos) ; $i++) { 
					echo $platos[$i].":".$menu[$platos[$i]][6]."<br>";
				}
			$precio = $precioMenu * 1.15;
			echo "<br>PRECIO: $precio euros";
			echo "<br><br><b>Buen provecho</b>";
			return $precio;
			break;
	}
}
?>