<?php
	class pelicula{
		private $id;
		private $nombre;
		private $genero;
		private $duracion;

		function __construct(){}

		public function getNombre(){
		return $this->nombre;
		}

		public function setNombre($nombre){
			$this->nombre = $nombre;
		}

		public function getGenero(){
			return $this->genero;
		}

		public function setGenero($genero){
			$this->genero = $genero;
		}

		public function getDuracion(){
		return $this->duracion;
		}

		public function setDuracion($duracion){
			$this->duracion = $duracion;
		}
		public function getId(){
			return $this->id;
		}

		public function setId($id){
			$this->id = $id;
		}
	}
?>