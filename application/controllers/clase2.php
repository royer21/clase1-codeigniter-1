<?php 
/**
* desarrollaremos un controlador
* que trabaje ...
*/
class Clase2 extends CI_Controller
{

	function index()
	{
		echo 'Bienvenido al desarrollo de la clase 2 de CODEIGNITER';
	}

	function entradas($nombre=NULL,$apellido=NULL,$edad=NULL)
	{
		$this->load->model('modelo1');

		$this->load->helper('url');

		if (empty($nombre)||empty($apellido)||empty($edad)) {
			echo 'faltan argumentos a la funcion para su correcto funcionamiento';
		} else {
			$this->modelo1->inserta($nombre,$apellido,$edad);

			redirect('/clase2/salida');
		}

	}

	function salida()
	{
		$this->load->model('modelo1');

		$data['usuarios'] = $this->modelo1->muestra();
		$this->load->view('salida', $data);
	}
}
?>