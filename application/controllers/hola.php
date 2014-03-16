<?php 
class Hola extends CI_Controller {
	
	function index()
	{
		echo "hola mundo";
	}

	function saludo()
	{
		echo "Clase1_CodeIgniter";
	}

	function saludo1($id=0)
	{
		switch ($id) {
			case '0':
				echo "saludo 0";
				break;

			case '1':
				echo "saludo 1";
				break;

			case '2':
				echo "saludo 2";
				break;

			default:
				echo "saludo no definido";
				break;
		}
	}

	function saludoargumentos($nombre,$edad)
	{
		echo "Hola amigo ".$nombre.", tienes ".$edad;
	}
}
?>