<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once "AbstractController.php";

class alumnoscontroller extends AbstractController{

	public function __construct(){
		parent::__construct();
	}
	/**
	* Lista de Alumnos
	* @return [type] [description]
	*/
	public function index(){
		//echo "index alumnoscontroller";
		$this->load->view('alumnos/index');
	}
}