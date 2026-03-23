<?php

session_start();

function comprobar() {
    

    $usuario = $_POST["user"];
    $contrasenia = $_POST["contr"];

    require("configdb.php"); 
    $conexion = new mysqli(SERVIDOR, USUARIO, PASSWORD, BBDD);
    $conexion->set_charset("utf8");
    
    $sql = "SELECT nombre, npuesto, contrasenia FROM alumnos WHERE contrasenia = '".$contrasenia."' AND nombre = '".$usuario."';";
    $resultado = $conexion->query($sql);

    if ($resultado->num_rows > 0) {
        
    
        // Extraemos los datos del resultado y los guardamos en la variable $fila
        $fila = $resultado->fetch_array();

        $_SESSION["user"] = $usuario;
        $_SESSION["contr"] = $contrasenia;
        // $fila["npuesto"]  tiene el número
        $_SESSION["usuario_id"] = $fila["npuesto"]; 
        
        echo '<h3 style="color:green;">Inicio de sesión correcto. ¡Bienvenido, '.$usuario.'!</h3>';
        echo '<h3><a href="agradecer.php">Continuar</a></h3>';
        
    } else {
        echo '<h3 style="color:red;">ERROR: El usuario introducido no existe.</h3>';
        echo '<h3><a href="index.html">Volver a inicio</a></h3>';
    }

    $conexion->close();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <link rel="stylesheet" href="estilos.css"> 
</head>
<body>

<br><br><br>

<div>
    <?php
   
    comprobar();
    ?>
</div>

</body>
</html>