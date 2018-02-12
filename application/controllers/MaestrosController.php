<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once "AbstractController.php";

class MaestrosController extends AbstractController{

	public function __construct(){
		parent::__construct();
		$this->load->model('maestro');
	}
	/**
	* Lista de Maestros
	* @return [type] [description]
	*/
	public function index(){
		$busqueda = $this->maestro->obtenerTodosRegistros();
		$datos = array('titulo' => 'Listado de Maestros'
					,'busquedaMaestro' => $busqueda
					,'crear' => 'Crear Maestro'
				);
		$this->load->view('maestros/index', $datos);
	}
	/**
     * Registro de usuario
     * @return [type] [description]
     */
    public function crear()
    {
        if ($this->is_post()) {
            $this->load->library('form_validation');
            $this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');
            $this->form_validation->set_rules('nombre', 'Nombre','trim|callback_name_check'); //llama a funcion name_check
            $this->form_validation->set_rules('apellidos', 'Apellidos','trim|callback_apellidos_check');//llama a funcion apellidos_check
            /**
             * Cuando la validaciones se cumplan
             */
            if ($this->form_validation->run() == TRUE) {
                $this->maestro->poblarPropiedades($this->arregloPost);//arregloPost viene de AbstractController.php al ejecutarse is_post() se llena de los input. poblarPropiedades LLENA LOS CAMPOS DE ALUMNOS
                $this->maestro->grabar();//grabar() de modelobasicocrud.php
                redirect('maestroscontroller/index');
            }
        }
        $datos = $this->formularioMaestros($this->arregloPost);//arregloPost viene de AbstractController.php al ejecutarse is_post()
        $datos['titulo'] = "Crear Maestro";
        $datos['subtitulo'] = "Registrar Maestro";
        $this->load->view('maestros/crear', $datos);
    }
    public function name_check($datosPost)
    {
        if (empty($datosPost)) {
            $this->form_validation->set_message("name_check", "El nombre es requerido",'nombre');
            return FALSE;
        }
        return TRUE;
    }
    public function apellidos_check($datosPost)
    {
        if (empty($datosPost)) {
            $this->form_validation->set_message("apellidos_check", "Los Apellidos son requerido",'apellidos');
            return FALSE;
        }
        return TRUE;
    }
    /**
    * Método para Editar a un maestro
    * @param  [type] $id [description]
    * @return [type]     [description]
    */
    public function editar($id=NULL){
        $this->maestro->cargar($id);
        $datos = $this->formularioMaestros($this->maestro->getArregloPropiedades());
        $datos['titulo'] = "Editar maestros";
        $datos['subtitulo'] = "Editar maestros";
        $this->load->view('maestros/crear', $datos);
    }

    /**
    * Método para Eliminar a un maestro
    * @param  [type] $id [description]
    * @return [type]     [description]
    */
    public function eliminar($id = NULL){
        $this->maestro->cargar($id);
        if ($this->is_post()) {
            $this->maestro->cargar($this->arregloPost['id']);
            $this->maestro->borrar();
            redirect('maestroscontroller/index');
        }
        $datos['titulo'] = "Eliminar Maestros";
        $datos['objMaestro'] = $this->maestro;
        $this->load->view('maestros/eliminar',$datos);
    }

    public function mostrar($id = NULL){
        $this->maestro->cargar($id);
        $datos['objMaestro'] = $this->maestro;
        $this->load->view('maestros/mostrar',$datos);
    }
}