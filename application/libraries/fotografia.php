<?php 
class FotografiaAlumno{
	private $isntanciaCI;
	private $errores;
	private $almacenarInfo;

	public function __construct(){
		$this->isntanciaCI = &get_instance();//codeigniter. Envia un puntero dentro de la clase. Para mandar a llamar a la BD
		$this->isntanciaCI->load->model('alumno');
		$this->errores = array();
	}
	public function setAlumnoId($id){
		$this->almacenarInfo['alumnoId'] = $id;
	}
	public function setConfiguracion(array $conf){
		$this->almacenarInfo['configuracion'] = $conf;
	}
	public function setNombreArchivo($nombre){
		$this->almacenarInfo['nombreArchivo'] = $nombre;
	}
	private function checarDatos(){
		$this->isntanciaCI->load->library('upload', $this->almacenarInfo['configuracion']);
		if (!$this->isntanciaCI->upload->do_upload($this->almacenarInfo['nombreArchivo'])) {
			$this->errores = array('error' => $this->isntanciaCI->upload->display_error());
			return FALSE;
		}else{
			$this->almacenarInfo['datosArchivoRecibido'] = $this->isntanciaCI->upload->data();
		}
	}
	public function checkUpload(){
		$this->checarDatos();
	}
	public function getErrores(){
		$this->errores;
	}
	public function getFotografia(){
		return $this->almacenarInfo['datosArchivoRecibido']['file_name'];
	}
}