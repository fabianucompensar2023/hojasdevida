<?php
// conectar al servidor
	$conectar=mysql_connect('localhost','root','');
// verificamos coneccion 
	if(!$conectar){
		echo "no se pudo conectar al servidor";
	}else {
		$base=mysql_select_db('registro');
	if (!$base){
			echo "no se encontro la base de datos";
		}
	}

// recuperar variables
$nombre=$_POST['nombres'];
$apellido=$_POST['apellido'];
$tipo_documento=$_POST['tipo_documento'];
$documento=$_POST['documento'];
$fecha_nacimiento=$_POST['fecha_nacimiento'];
$genero=$_POST['genero'];
$direccion=$_POST['direccion'];
$cuidad=$_POST['ciudad'];
$telefono=$_POST['telefono'];
$correo=$POST*['correo'];



$sql="INSERT INTO datos VALUES('$nombre',
							  '$apellido',
							  '$tipo_documento',
							  '$documento',
							  '$fecha_nacimiento',
							  '$genero',
							  '$direccion',
							  '$cuidad',
							  '$telefono',
							  '$correo')";

//ejecutar sentancia

$ejecutar=mysql_query($sql);
// verificar ejecucion

if (!$ejecutar) {
	echo "se evidencia un error";
}else {
	echo "datos guardados <br> a href='index.html'> volver </a>" 
	 ;
}


?>