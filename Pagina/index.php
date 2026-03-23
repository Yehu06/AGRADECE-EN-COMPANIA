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
			echo '<option value="'.$fila["npuesto"].'">'.$fila["nombre"].'</option>';
		}
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
        <a href="#">Agradecer</a>
        <a href="#">Recibir</a>
        <a href="#">Cerrar sesión</a>
    </nav>

    <main>
        <div class="formulario">
            <form>
                <label>Para</label>
                <select>
                    <option value="">Selecciona un nombre</option>
					<?php
                   		Mostrar_Datos();
					?>
                </select>

                <label>Quiero agradecerte</label>
                <textarea placeholder="Escribe aquí tu mensaje de agradecimiento..."></textarea>

                <button type="submit">ENVIAR</button>
            </form>
        </div>
    </main>

    <footer>
        <p>© 2026 - Comunidad de gratitud</p>
    </footer>

</body>
</html>
