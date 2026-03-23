<?php
  //Necesitar hacer include o require del archivo que tiene la conexión
  require("configdb.php");
  function conectar(){
	$conexion = new mysqli(SERVIDOR, USUARIO, PASSWORD, BBDD);
	$conexion->set_charset("utf8"); 
    return $conexion;
  }



function Mostrar_Datos()
	{
		$conexion = conectar();
		$sql = "SELECT npuesto, nombre FROM alumnos";
		$resultado = $conexion->query($sql);

		while($fila = $resultado->fetch_array())
		{
			echo '<p>ID: '.$fila["npuesto"].' - Nombre: '.$fila["nombre"].'</p>';
		}
	}
	
	Mostrar_Datos();
?>