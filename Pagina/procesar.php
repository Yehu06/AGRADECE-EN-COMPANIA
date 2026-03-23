<?php
session_start();
require("configdb.php"); 

function conectar(){
    $conexion = new mysqli(SERVIDOR, USUARIO, PASSWORD, BBDD);
    $conexion->set_charset("utf8"); 
    return $conexion;
}

function procesar()
{
	$conexion = conectar(); 

//Recogemos los datos que nos acaba de mandar el formulario
$destinatario = $_POST['receptor'];
$mensaje = $_POST['mensaje'];
$emisor = $_SESSION['usuario_id'];

//Guardamos en la base de datos
$sql = "INSERT INTO agradecimientos (iddestinatario, idemisor, mensaje) 
        VALUES ('$destinatario', '$emisor', '$mensaje')";
		  
$conexion->query($sql);

echo '<h3 style="color:green;">Datos Enviados.';
echo '<h3><a href="agradecer.php">Volver a agradecer</a></h3>';
$conexion->close();
}

?>

 <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport">
    <title>Procesar datos</title>
    <link rel="stylesheet" href="estilos.css"> 
</head>
<body>


<br><br><br>

<div>
<?php
	 procesar();
?>
</div>