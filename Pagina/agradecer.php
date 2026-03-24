<?php
  //Necesitar hacer include o require del archivo que tiene la conexión
  
  
  session_start();
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
			echo '<option value="'.$fila["npuesto"].'">'.$fila["nombre"].'</option>';
		}
	}
	
	function Procesar_Agradecimiento() {
    $mensaje_estado = "";

    
        $conexion = conectar(); 
        
        $destinatario = $_POST['receptor'];
        $mensaje = $_POST['mensaje'];
        $emisor = $_SESSION['usuario_id'];
        
        $sql = "INSERT INTO agradecimientos (iddestinatario, idemisor, mensaje) 
                VALUES ('$destinatario', '$emisor', '$mensaje')";
				
		$conexion->query($sql);
        $conexion->close();
    }

?>




<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agradecer</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

    <header>
        <h1>Agradece en compañía</h1>
    </header>

    <nav>
        <a href="agradecer.php">Agradecer</a>
        <a href="#">Recibir</a>
        <a href="cerrar.php">Cerrar sesión</a>
    </nav>

    <main>
        <div class="formulario">
            <form method="POST" action="procesar.php">
                <label>Para</label>
                <select name="receptor">
                    <option value="">Selecciona un nombre</option>
					<?php
                   		Mostrar_Datos();
					?>
                </select>

                <label>Quiero agradecerte</label>
                <textarea name="mensaje" placeholder="Escribe aquí tu mensaje de agradecimiento..."></textarea>
                <button type="submit">ENVIAR</button>
            </form>
        </div>
    </main>

    <footer>
        <p>© 2026 - Comunidad de gratitud</p>
    </footer>

</body>
</html>
