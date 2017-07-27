<?php 
	/**
	* Clase ejemplo para la leccion 2 del curso
	*/
	class Persona{
		public $nombre;
		public $apellidoPaterno;
		
		public function __construct($nombre,$apellido){
			$this->nombre=$nombre;
			$this->apellidoPaterno=$apellido;
		}
		private function nombreCompleto(){
			return $this->nombre. ' ---- '.$this->apellidoPaterno;
		}
	}

$NuevaPersona= new Persona('Cris','Tellez');
echo $NuevaPersona->nombreCompleto();


?>