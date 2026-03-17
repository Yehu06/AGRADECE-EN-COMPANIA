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
        <a href="#" class="active">Agradecer</a>
        <a href="#">Recibir</a>
        <a href="#">Cerrar sesión</a>
    </nav>

    <main>
        <div class="formulario">
            <form>
                <label>Para</label>
                <select id="alumno" >
               <php?
			   while(c<filas) <!--Aqui no se que condicion es pero supongo que sera cuando se acaben las filas en la base de datos de esa tabla-->
			   
				   
			   <option value="idalumno?">Nombre alumno</option>
		   <!--En el valor se guardara lo que viene siendo el id de cada alumno de la tabla alumnos y el contenido
					de ese option sera el nombre con el que este relacionado ese id-->
				
			             
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
