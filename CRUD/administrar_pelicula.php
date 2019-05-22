<?php
//incluye la clase Libro y CrudLibro
require_once('crud_pelicula.php');
require_once('pelicula.php');

$crud= new Crudpelicula();
$pelicula= new pelicula();

	// si el elemento insertar no viene nulo llama al crud e inserta un pelicula
	if (isset($_POST['insertar'])) {
		$pelicula->setNombre($_POST['nombre']);
		$pelicula->setGenero($_POST['genero']);
		$pelicula->setDuracion($_POST['duracion']);
		//llama a la función insertar definida en el crud
		$crud->insertar($pelicula);
		header('Location: index.php');
	// si el elemento de la vista con nombre actualizar no viene nulo, llama al crud y actualiza el pelicula
	}elseif(isset($_POST['actualizar'])){
		$pelicula->setId($_POST['id']);
		$pelicula->setNombre($_POST['nombre']);
		$pelicula->setGenero($_POST['genero']);
		$pelicula->setDuracion($_POST['duracion']);
		$crud->actualizar($pelicula);
		header('Location: index.php');
	// si la variable accion enviada por GET es == 'e' llama al crud y elimina un pelicula
	}elseif ($_GET['accion']=='e') {
		$crud->eliminar($_GET['id']);
		header('Location: index.php');		
	// si la variable accion enviada por GET es == 'a', envía a la página actualizar.php 
	}elseif($_GET['accion']=='a'){
		header('Location: actualizar.php');
    }
    ?>