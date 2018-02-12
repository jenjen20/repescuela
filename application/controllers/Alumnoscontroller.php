<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once "AbstractController.php";

class AlumnosController extends AbstractController{

	public function __construct(){
		parent::__construct();
		$this->load->model('alumno');
	}
	/**
	* Lista de Alumnos
	* @return [type] [description]
	*/
	public function index(){
		$busqueda = $this->alumno->obtenerTodosRegistros();
		$datos = array('titulo' => 'Listado de Usuarios'
					,'busquedaAlumno' => $busqueda
				);
		$this->load->view('alumnos/index', $datos);
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
            $this->form_validation->set_rules('domicilio', 'Domicilio','trim|callback_domicilio_check');
            /**
             * Cuando la validaciones se cumplan
             */
            if ($this->form_validation->run() == TRUE) {
                $this->alumno->poblarPropiedades($this->arregloPost);//arregloPost viene de AbstractController.php al ejecutarse is_post() se llena de los input. poblarPropiedades LLENA LOS CAMPOS DE ALUMNOS
                $this->alumno->grabar();//grabar() de modelobasicocrud.php
                redirect('alumnoscontroller/index');
            }
        }
        $datos = $this->formularioALumnos($this->arregloPost);//arregloPost viene de AbstractController.php al ejecutarse is_post()
        $datos['titulo'] = "Crear Alumno";
        $datos['subtitulo'] = "Registrar Alumno";
        $this->load->view('alumnos/crear', $datos);
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
    public function domicilio_check($datosPost)
    {
        if (empty($datosPost)) {
            $this->form_validation->set_message("domicilio_check", "El domicilio es requerido",'domicilio');
            return FALSE;
        }
        return TRUE;
    }

    /**
    * Método para Editar a un alumno
    * @param  [type] $id [description]
    * @return [type]     [description]
    */
    public function editar($id=NULL){
        $this->alumno->cargar($id);
        $datos = $this->formularioALumnos($this->alumno->getArregloPropiedades());
        $datos['titulo'] = "Editar Alumnos";
        $datos['subtitulo'] = "Editar Alumnos";
        $this->load->view('alumnos/crear', $datos);
    }

    /**
    * Método para Eliminar a un alumno
    * @param  [type] $id [description]
    * @return [type]     [description]
    */
    public function eliminar($id = NULL){
        $this->alumno->cargar($id);
        if ($this->is_post()) {
            $this->alumno->cargar($this->arregloPost['id']);
            $this->alumno->borrar();
            redirect('alumnoscontroller/index');
        }
        $datos['titulo'] = "Eliminar Alumnos";
        $datos['objAlumno'] = $this->alumno;
        $this->load->view('alumnos/eliminar',$datos);
    }

    public function mostrar($id = NULL){
        $this->alumno->cargar($id);
        $datos['objAlumno'] = $this->alumno;
        $this->load->view('alumnos/mostrar',$datos);
    }
}