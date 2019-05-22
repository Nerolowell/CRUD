<?php
// incluye la clase Db
require_once('conexion.php');

	class CrudPelicula{
		// constructor de la clase
		public function __construct(){}

		// método para insertar, recibe como parámetro un objeto de tipo pelicula
		public function insertar($pelicula){
			$db=Db::conectar();
			$insert=$db->prepare('INSERT INTO peliculas values(NULL,:nombre,:genero,:duracion)');
			$insert->bindValue('nombre',$pelicula->getNombre());
			$insert->bindValue('genero',$pelicula->getGenero());
			$insert->bindValue('duracion',$pelicula->getDuracion());
			$insert->execute();

		}

		// método para mostrar todos los peliculas
		public function mostrar(){
			$db=Db::conectar();
			$listapeliculas=[];
			$select=$db->query('SELECT * FROM peliculas');

			foreach($select->fetchAll() as $pelicula){
				$mypelicula= new pelicula();
				$mypelicula->setId($pelicula['id']);
				$mypelicula->setNombre($pelicula['nombre']);
				$mypelicula->setGenero($pelicula['genero']);
				$mypelicula->setDuracion($pelicula['duracion']);
				$listapeliculas[]=$mypelicula;
			}
			return $listapeliculas;
		}

		// método para eliminar un pelicula, recibe como parámetro el id del pelicula
		public function eliminar($id){
			$db=Db::conectar();
			$eliminar=$db->prepare('DELETE FROM peliculas WHERE ID=:id');
			$eliminar->bindValue('id',$id);
			$eliminar->execute();
		}

		// método para buscar un pelicula, recibe como parámetro el id del pelicula
		public function obtenerpelicula($id){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM peliculas WHERE ID=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$pelicula=$select->fetch();
			$mypelicula= new pelicula();
			$mypelicula->setId($pelicula['id']);
			$mypelicula->setNombre($pelicula['nombre']);
			$mypelicula->setGenero($pelicula['genero']);
			$mypelicula->setDuracion($pelicula['duracion']);
			return $mypelicula;
		}

		// método para actualizar un pelicula, recibe como parámetro el pelicula
		public function actualizar($pelicula){
			$db=Db::conectar();
			$actualizar=$db->prepare('UPDATE peliculas SET nombre=:nombre, genero=:genero,duracion=:anio  WHERE ID=:id');
			$actualizar->bindValue('id',$pelicula->getId());
			$actualizar->bindValue('nombre',$pelicula->getNombre());
			$actualizar->bindValue('genero',$pelicula->getGenero());
			$actualizar->bindValue('anio',$pelicula->getduracion());
			$actualizar->execute();
		}
	}
?>