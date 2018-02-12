<?php 
require_once "maestrodao.php";

class Maestro extends MaestroDao{
	const DB_TABLA = "maestro";
	const DB_TABLA_INDICE = "id";

	public $id;
	public $nombre;
	public $apellidos;
	public $foto;
	public $fecha_nacimiento;
	public $telefono;
	public $creado_en;

	public function poblarPropiedades(array $datos){
		$this->id = isset($datos['id']) ? trim($datos['id']) : 0;
		$this->nombre = isset($datos['nombre']) ? trim($datos['nombre']) : null;
		$this->apellidos = isset($datos['apellidos']) ? trim($datos['apellidos']) : null;
		$this->foto = isset($datos['foto']) ? trim($datos['foto']) : null;
		$this->fecha_nacimiento = isset($datos['fecha_nacimiento']) ? trim($datos['fecha_nacimiento']) : null;
		$this->telefono = isset($datos['telefono']) ? trim($datos['telefono']) : null;
		$this->creado_en = isset($datos['creado_en']) ? trim($datos['creado_en']) : date('Y-m-d G:i:s');
	}

	public function getArregloPropiedades(){
		/*return array('id' => $this->id,
					'nombre' => $this->nombre,
					'apellidos' => $this->apellidos,
					'foto' => $this->foto,
					'fecha_nacimiento' => $this->fecha_nacimiento,
					'telefono' => $this->telefono
		);*/
		$arregloTemporal = array();
		foreach ($this as $indice => $valor) {
			$arregloTemporal[$indice] = $valor;
		}
		return $arregloTemporal;
	}
}