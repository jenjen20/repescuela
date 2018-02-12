<?php 
abstract class ModeloBasicoCRUD extends CI_Model{
	const DB_TABLA = 'abstract';
	const DB_TABLA_INDICE = 'abstract';

	protected $ultimoid;

	public function cargar($id){
		$busqueda = $this->db->get_where($this::DB_TABLA, array($this::DB_TABLA_INDICE => $id));
		foreach ($busqueda->row() as $indice => $valor) {
			$this->$indice = $valor;
		}
	}

	private function insertar(){
		$this->db->insert($this::DB_TABLA, $this);
		$this->ultimoid = $this->{$this::DB_TABLA_INDICE};
	}

	private function actualizar(){
		$this->db->update($this::DB_TABLA, $this, array($this::DB_TABLA_INDICE => $this->{$this::DB_TABLA_INDICE}));
	}

	public function grabar(){
		if($this->{$this::DB_TABLA_INDICE}!=0){
			$this->actualizar();
		}else{
			$this->insertar();
		}
	}

	public function borrar(){
		$this->db->delete($this::DB_TABLA, array($this::DB_TABLA_INDICE => $this->{$this::DB_TABLA_INDICE}));
		unset($this->{$this::DB_TABLA_INDICE});
	}

	public function getUltimoId(){
		return $this->ultimoid;
	}

}
