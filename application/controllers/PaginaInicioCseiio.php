<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PaginaInicioCseiio extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_noticias');
	}

	public function index()
	{
		if ($this->session->userdata('user')) {
		$data['noticias'] = $this->Model_noticias->getAllNoticias();
		$data['lastSlider'] = $this->Model_noticias->getLastSlider();
		$this->load->view('paginainiciocseiio', $data);

		}
			else
			{
				redirect('Login');
			}

	}

}

/* End of file PaginaInicioCseiio.php */
/* Location: ./application/controllers/PaginaInicioCseiio.php */