<html>
<head>
	<title> Ingresar Pelicula</title>
</head>
<header>
Ingresa los datos de la pelicula
</header>
<form action='administrar_pelicula.php' method='post'>
	<table>
		<tr>
			<td>Nombre pelicula:</td>
			<td> <input type='text' name='nombre'></td>
		</tr>
		<tr>
			<td>genero:</td>
			<td><input type='text' name='genero' ></td>
		</tr>
		<tr>
			<td>duracion:</td>
			<td><input type='text' name='duracion' ></td>
		</tr>
		<input type='hidden' name='insertar' value='insertar'>
	</table>
	<input type='submit' value='Guardar'>
	<a href="index.php">Volver</a>
</form>

</html>