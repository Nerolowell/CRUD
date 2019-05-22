<?php
//incluye la clase pelicula y Crudpelicula
require_once('crud_pelicula.php');
require_once('pelicula.php');
$crud=new Crudpelicula();
$pelicula= new pelicula();
//obtiene todos los peliculas con el método mostrar de la clase crud
$listapeliculas=$crud->mostrar();
?>

<html>
<head>
	<title>Mostrar peliculas</title>
</head>
<body>
	<table border=5>
		<head>
			<td>Nombre</td>
			<td>Género</td>
			<td>Duración</td>
			<td>Actualizar</td>
			<td>Eliminar</td>
		</head>
		<body>
			<?php foreach ($listapeliculas as $pelicula) {?>
			<tr>
				<td><?php echo $pelicula->getNombre() ?></td>
				<td><?php echo $pelicula->getGenero() ?></td>
				<td><?php echo $pelicula->getDuracion()?> </td>
				<td><a href="actualizar.php?id=<?php echo $pelicula->getId()?>&accion=a">Actualizar</a> </td>
				<td><a href="administrar_pelicula.php?id=<?php echo $pelicula->getId()?>&accion=e">Eliminar</a>   </td>
			</tr>
			<?php }?>
		</body>
	</table>
	<a href="index.php">Volver</a>
</body>
</html>