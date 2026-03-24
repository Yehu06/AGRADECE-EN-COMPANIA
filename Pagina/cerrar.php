<?php
session_start();

// Ejecutamos la lógica de cierre ANTES de cualquier HTML
$_SESSION = array();
session_destroy();

// Configuramos la redirección aquí arriba
header("refresh:2;url=index.html");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Cerrando sesión</title>
    <link rel="stylesheet" href="estilos.css"> 
</head>
<body>

    <div style="text-align: center; margin-top: 50px;">
        <?php
            // Ahora el echo es seguro porque el header ya se envió
            echo '<h3 style="color:green;">Cerrando sesión... ¡Hasta pronto!</h3>';
        ?>
        <p>Redirigiendo a la página principal en 2 segundos.</p>
    </div>

</body>
</html>