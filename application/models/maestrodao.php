<?php 
require_once "modelobasicocrud.php";

class MaestroDao extends ModeloBasicoCRUD{

	public function obtenerTodosRegistros(){
		$this->db->select('*');
		$this->db->from($this::DB_TABLA);
		$busqueda = $this->db->get();
		return $busqueda;
	}
}

