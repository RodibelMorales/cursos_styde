<?php 
	/**
	* Clase ejemplo para la leccion 2 del curso
	*/
	class Persona{
		public $nombre;
		public $apellidoPaterno;
		protected $direccion;
		
		public function __construct($nombre,$apellido,$direccion){
			$this->nombre=$nombre;
			$this->apellidoPaterno=$apellido;
			$this->direccion=$direccion;
		}
		//Metodo Geter
		public function getnombreCompleto(){
			return $this->nombre. ' ---- '.$this->apellidoPaterno;
		}
		//Metodo Geter
		public function getDireccion(){
			return $this->direccion;
		}
		public function setDireccion($nuevaDireccion){
			$this->direccion=$nuevaDireccion;
		}
		public function setNombre($nombreNuevo){
			$this->nombre=$nombreNuevo;
		}
	}

$NuevaPersona= new Persona('Rodibel','Morales','Calle 30 por el centro de la avenida XD');


$NuevaPersona->setNombre('Rodi');
$NuevaPersona->setDireccion('ejemplo');
echo $NuevaPersona->getDireccion()."<br>";
echo $NuevaPersona->getnombreCompleto();
?>