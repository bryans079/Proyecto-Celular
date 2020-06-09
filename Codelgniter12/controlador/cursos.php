<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cursos extends CI_Controller {

function __construct(){
		parent::__construct();
		//$this->load->helper("mihelper_helper");
		$this ->load->helper('form');
		$this ->load->model('codigofacil_model');
		}

		function index(){
			$data['cursos']= $this->codigofacil_model->obtenerCursos();
			$this ->load->view('codigofacil/headers');
			$this ->load->view('cursos/cursos',$data);

		}

		function nuevo(){
		$this ->load->view('codigofacil/headers');
		$this ->load->view('cursos/formulario');


		}


		function recibirDatos(){

			$data = array(
				 'nombre' => $this->input->post('nombre'),
				 'videos' => $this->input->post('videos')
				);

			$this->codigofacil_model->crearCurso($data);
			$this ->load->view('codigofacil/headers');
			$this ->load->view('codigofacil/bienvenido');


		}


}







?>