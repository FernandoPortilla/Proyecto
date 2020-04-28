
<html>
<head>
	<?php

		$nombre = $_POST["Nombres"];
		$apellido1 = $_POST["Primerapellido"];
		$apellido2 = $_POST["Segundoapellido"];
		$genero = $_POST["Genero"];
		$Direccion = $_POST["Direccion"];
		$Correo = $_POST["CorreoElectronico"];
		$Telefono = $_POST["Telefono"];

		$Contenido="
		Nombre: $nombre
		Primer Apellido: $apellido1
		Segundo Apellido: $apellido2
		Genero: $genero
		Direccion: $Direccion
		Correo Electronico: $Correo
		Telefono: $Telefono
		";

		$Archivo= fopen("datos/$apellido1.txt", "w");
		fwrite($Archivo, $Contenido);
	?>
</head>
<body background="img/fondo.jpg">
	<h1>Tus datos han sido guardados correctamente</h1><br>
	<h2><a href="index.html">Pusla aqui para regresar</a> </h2>
</body>
</html>