<?php defined('BASEPATH') OR exit('No direct script access allowed');

class codigofacil_model extends CI_model{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	function crearCurso($data){
		$this->db->insert('cursos',array('nombreCurso'=>$data['nombre'],'videosCurso'=>$data['videos']));

	}
	function obtenerCursos(){
		$query = $this->db->get('cursos');
		if($query->num_rows() > 0)return $query;
		else return false;


	}

}







?>