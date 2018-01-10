<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class BusquedaNoticia extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_busqueda');
	}

	public function index()
	{
		if ($this->session->userdata('user')) {
			$data['titulo'] = 'Generación de Noticias';
            $error = array('error' => false);
            $this->load->view('plantilla/header', $data);
            $this->load->view('index', $error);
            $this->load->view('plantilla/footer');

            }
			else
			{
				redirect('Login');
			}
	}

	public function ConsultarNoticia($idnoticia)
	{
		
		$buscar= $this->Model_busqueda->getNoticia($idnoticia);

		if ($buscar) {
			
			$data['titulo'] = 'Noticia';
			$data['busqueda'] = $this->Model_busqueda->getNoticia($idnoticia);
			$this->load->view('noticiaindividual', $data);
	

		}
		else
		{
			$this->session->set_flashdata('busqueda', 'No se ha encontrado información de la noticia');
					redirect('Inicio');
		}
	}


}

/* End of file BusquedaNoticia.php */
/* Location: ./application/controllers/BusquedaNoticia.php */