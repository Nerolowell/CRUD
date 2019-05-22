<?php
//incluye la clase pelicula y Crudpelicula
	require_once('crud_pelicula.php');
	require_once('pelicula.php');
	$crud= new Crudpelicula();
	$pelicula=new pelicula();
	//busca el pelicula utilizando el id, que es enviado por GET desde la vista mostrar.php
	$pelicula=$crud->obtenerpelicula($_GET['id']);
?>
<html>
<head>
	<title>Actualizar pelicula</title>
</head>
<body>
	<form action='administrar_pelicula.php' method='post'>
	<table>
		<tr>
			<input type='hidden' name='id' value='<?php echo $pelicula->getId()?>'>
			<td>Nombre pelicula:</td>
			<td> <input type='text' name='nombre' value='<?php echo $pelicula->getNombre()?>'></td>
		</tr>
		<tr>
			<td>genero:</td>
			<td><input type='text' name='genero' value='<?php echo $pelicula->getGenero()?>' ></td>
		</tr>
		<tr>
			<td>Duracion:</td>
			<td><input type='text' name='duracion' value='<?php echo $pelicula->getDuracion() ?>'></td>
		</tr>
		<input type='hidden' name='actualizar' value'actualizar'>
	</table>
	<input type='submit' value='Guardar'>
	<a href="index.php">Volver</a>
</form>
</body>
</html>