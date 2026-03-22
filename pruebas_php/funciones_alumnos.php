<?php
  //Necesitar hacer include o require del archivo que tiene la conexión
  require("configdb.php");
  function conectar(){
	$conexion = new mysqli(SERVIDOR, USUARIO, PASSWORD, BBDD);
	$conexion->set_charset("utf8"); 
    return $conexion;
  }
  
  //Función para mostrar filas de una tabla
  function mostrar_alumnos(){ 
	//Conecta con la base de datos y crea el objeto $conexión.
	$conexion=conectar();  
	
	// Ejecuta la consulta
    $sql = "SELECT id_alumno, nombre FROM alumnos";
    $resultado = $conexion->query($sql);	

    // --- PRIMER ALUMNO ---
    $fila = $resultado->fetch_array();
    echo '<p>ID: '.$fila["id_alumno"].' - Nombre: '.$fila["nombre"].'</p>';

    // --- SEGUNDO ALUMNO ---
    $fila = $resultado->fetch_array();
    echo '<p>ID: '.$fila["id_alumno"].' - Nombre: '.$fila["nombre"].'</p>';

    // --- TERCER ALUMNO ---
    $fila = $resultado->fetch_array();
    echo '<p>ID: '.$fila["id_alumno"].' - Nombre: '.$fila["nombre"].'</p>';
  }
	mostrar_alumnos();
 ?>
  