<?php

  class Empleado {
		private $id;
		private $nombres;
		private $apellidoPaterno;
		private $apellidoMaterno;
		private $numeroDocumento;
		private $area;
		private $local;
		private $cargo;
		private $idArea;
		private $idLocal;
		private $idCargo;
		
		public function __construct() {}
		
		public function getId() {
			return $this->id;
		}
		
		public function setId($id) {
			$this->id = $id;
		}
		
		public function getNombres() {
			return $this->nombres;
		}
		
		public function setNombres($nombres) {
			$this->nombres = $nombres;
		}
		
		public function getApellidoPaterno() {
			return $this->apellidoPaterno;
		}
		
		public function setApellidoPaterno($apellidoPaterno) {
			$this->apellidoPaterno = $apellidoPaterno;
		}
		
		public function getApellidoMaterno() {
			return $this->apellidoMaterno;
		}
		
		public function setApellidoMaterno($apellidoMaterno) {
			$this->apellidoMaterno = $apellidoMaterno;
		}
		
		public function getNumeroDocumento() {
			return $this->numeroDocumento;
		}
		
		public function setNumeroDocumento($numeroDocumento) {
			$this->numeroDocumento = $numeroDocumento;
		}
		
		public function getArea() {
			return $this->area;
		}
		
		public function setArea($area) {
			$this->area = $area;
		}
		
		public function getLocal() {
			return $this->local;
		}
		
		public function setLocal($local) {
			$this->local = $local;
		}
		
		public function getCargo() {
			return $this->cargo;
		}
		
		public function setCargo($cargo) {
			$this->cargo = $cargo;
		}
		
		public function getIdArea() {
			return $this->idArea;
		}
		
		public function setIdArea($idArea) {
			$this->idArea = $idArea;
		}
		
		public function getIdCargo() {
			return $this->idCargo;
		}
		
		public function setIdCargo($idCargo) {
			$this->idCargo = $idCargo;
		}
		
		public function getIdLocal() {
			return $this->idLocal;
		}
		
		public function setIdLocal($idLocal) {
			$this->idLocal = $idLocal;
		}
	}
	
	class Entidad {
		private $id;
		private $nombre;
		
		public function __construct() {}
		
		public function getId() {
			return $this->id;
		}
		
		public function setId($id) {
			$this->id = $id;
		}
		
		public function getNombre() {
			return $this->nombre;
		}
		
		public function setNombre($nombre) {
			$this->nombre = $nombre;
		}
	}

?>
