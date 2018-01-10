<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->clear_cache();
	}

		function index()
	{
			if (!isset($_POST['password'])) {

				if ($this->session->userdata('logueado') == FALSE) {
					$data['titulo'] = 'Login';
					$this->load->view('plantilla/header', $data);
					$this->load->view('login');
					$this->load->view('plantilla/footer');			
				}
				else
				{
					redirect('Inicio');
				}

			}

			else{
		
		        $this -> form_validation -> set_rules('user','usuario','trim|required|xss_clean');
		        $this -> form_validation -> set_rules('password','password','trim|required|xss_clean');

				if($this->form_validation->run() == FALSE)
				{
					$data['titulo'] = 'Login';
					$this->load->view('plantilla/header', $data);
					$this->load->view('login');
					$this->load->view('plantilla/footer');
				}
				else
				{
					$this->load->model('Model_login');
					$nombre = $_POST['user'];
					$password = $_POST['password'];

					date_default_timezone_set('America/Mexico_City');
					$hora = date('H:i:s');
 					$fecha = date('Y-m-d');

					if($this->Model_login->login($nombre, $password))
					{
						$consulta = $this->Model_login->getUsuario($nombre);
						$datos_usuario = array(
							'id_usuario' => $consulta->id_usuario,
							'user' => $nombre,
							'logueado' => TRUE
							);

						$this->session->set_userdata($datos_usuario);
						
						$consulta = $this->Model_login->Registra_acceso($nombre, $hora, $fecha);
						redirect('Inicio');

					}
					else
					{
						$this->session->set_flashdata('invalido', 'El usuario:  "'.$nombre.'", no tiene acceso, verifique su información.');
						redirect('Login');

					}

			}
		}

}

	 function salir()
	{
		$this->session->sess_destroy();
		$this->session->set_userdata(array('user' => '', 'nombre' => '', 'logueado' => FALSE));
		$this->clear_cache();
		redirect('Login','refresh');
	}
	
	 function clear_cache()
    {
        $this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
        $this->output->set_header("Pragma: no-cache");
    }	

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */