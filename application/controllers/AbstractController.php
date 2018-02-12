<?php
defined('BASEPATH') OR exit('No direct script access allowed');

abstract class AbstractController extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->helper('html');
	}

	protected function is_post()
  {
      $tempArray = $this->input->post();
      if(empty($tempArray)){
          $this->arregloPost = array();
          return FALSE;
      }
      $this->arregloPost = $tempArray;
      return TRUE;
  }

  protected function formularioALumnos(array $datosPost){
      $arregloCamposFormulario = array(
                   'nombre' =>array('name' =>'nombre',
                                        'id' => 'nombre',
                                        'class' => 'form-control input-lg',
                                        'required' => 'required',
                                        'data-error' => 'Dato requerido',
                                        'value' => isset($datosPost['nombre']) ? $datosPost['nombre'] : null,
                                        ),
                   'apellidos' =>array('name' =>'apellidos',
                                        'id' => 'apellidos',
                                        'class' => 'form-control input-lg',
                                        'data-error' => 'Dato requerido',
                                        'value' => isset($datosPost['apellidos']) ? $datosPost['apellidos'] : null,
                                        ),
                   'email' =>array('name' =>'email',
                                        'id' => 'email',
                                        'class' => 'form-control input-lg',
                                        'data-error' => 'Dato requerido',
                                        'value' => isset($datosPost['email']) ? $datosPost['email'] : null,
                                        ),
                   'domicilio' =>array('name' =>'domicilio',
                                        'id' => 'domicilio',
                                        'class' => 'form-control input-lg',
                                        'data-error' => 'Dato requerido',
                                        'value' => isset($datosPost['domicilio']) ? $datosPost['domicilio'] : null,
                                        ),
                   'ciudad' =>array('name' =>'ciudad',
                                        'id' => 'ciudad',
                                        'class' => 'form-control input-lg',
                                        'data-error' => 'Dato requerido',
                                        'value' => isset($datosPost['ciudad']) ? $datosPost['ciudad'] : null,
                                        ),
                   'estado' =>array('name' =>'estado',
                                        'id' => 'estado',
                                        'class' => 'form-control input-lg',
                                        'data-error' => 'Dato requerido',
                                        'value' => isset($datosPost['estado']) ? $datosPost['estado'] : null,
                                        ),
                   'fecha_nacimiento' =>array('name' =>'fecha_nacimiento',
                                        'id' => 'fecha_nacimiento',
                                        'class' => 'form-control input-lg',
                                        'data-error' => 'Dato requerido',
                                        'value' => isset($datosPost['fecha_nacimiento']) ? $datosPost['fecha_nacimiento'] : null,
                                        ),
                   'opcionesPais' => array('0' => 'Selecciona tu Pais',
                                               'Peru' => "Peru",
                                               'Mexico' => "Mexico",
                                               'Guatemala' => 'Guatemala',
                                               'Colombia' => 'Colombia',
                                               'Ecuador' => "Ecuador",),
                   'pais' => isset($datosPost['pais']) ? $datosPost['pais'] : null,
                   'id' => isset($datosPost['id']) ? $datosPost['id'] : 0
          );
          return $arregloCamposFormulario;
  }

  protected function formularioMaestros(array $datosPost){
      $arregloCamposFormulario = array(
                   'nombre' =>array('name' =>'nombre',
                                        'id' => 'nombre',
                                        'class' => 'form-control input-lg',
                                        'required' => 'required',
                                        'data-error' => 'Dato requerido',
                                        'value' => isset($datosPost['nombre']) ? $datosPost['nombre'] : null,
                                        ),
                   'apellidos' =>array('name' =>'apellidos',
                                        'id' => 'apellidos',
                                        'class' => 'form-control input-lg',
                                        'data-error' => 'Dato requerido',
                                        'value' => isset($datosPost['apellidos']) ? $datosPost['apellidos'] : null,
                                        ),
                   'fecha_nacimiento' =>array('name' =>'fecha_nacimiento',
                                        'id' => 'fecha_nacimiento',
                                        'class' => 'form-control input-lg',
                                        'data-error' => 'Dato requerido',
                                        'value' => isset($datosPost['fecha_nacimiento']) ? $datosPost['fecha_nacimiento'] : null,
                                        ),
                   'telefono' =>array('name' =>'telefono',
                                        'id' => 'telefono',
                                        'class' => 'form-control input-lg',
                                        'data-error' => 'Dato requerido',
                                        'value' => isset($datosPost['telefono']) ? $datosPost['telefono'] : null,
                                        ),
                   'id' => isset($datosPost['id']) ? $datosPost['id'] : 0
          );
          return $arregloCamposFormulario;
  }
}