<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('form_model');  
	}

	public function index()
	{
		$this->load->view('formulario');

	}

	function validar()
{

//echo "Hola<br>";
		//Aqui estamos recibiendo los datos del formulario eva3.php.

		$name = $this->input->post('nombre1');
		$lastname = $this->input->post('Apellido1');
		$correo = $this->input->post('Correo');

		echo "Nombre: ".$name."  Apellido: ".$lastname. "correo:".$correo;

		//aqui estamos creando el array
	$data = array('nombre1' => $this->input->post('nombre'),'apellido1' => $this->input->post('apllido'), 'correo' => $this->input->post('correo' ));

		//Aqui se llama la funcion para guardar en la BD
		$this->form_model->guardar($data);
		

		}

	}

	?>
