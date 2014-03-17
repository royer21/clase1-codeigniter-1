<?php 
/**
* modelo 1
*/
class Modelo1 extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	function inserta($nombre,$apellido,$edad)
	{
		$data = array(
				'nombre'	=>	$nombre,
				'apellido'	=>	$apellido,
				'edad'		=>	$edad
			);

		$this->db->insert('usuario', $data);
	}

	function muestra()
	{
		$query = $this->db->get('usuario');
		return $query->result_array();
	}
}
?>