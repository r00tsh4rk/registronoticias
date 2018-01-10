<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CatalogoNoticias extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_noticias');
	}

	public function index()
	{
		if ($this->session->userdata('user')) {
			$data['titulo'] = 'Generación de Noticias';
			$data['noticias'] = $this->Model_noticias->getAllNoticias();
			$this->load->view('plantilla/header', $data);
			$this->load->view('catalogonoticias');
			$this->load->view('plantilla/footer');

			}
			else
			{
				redirect('Login');
			}

	}

}
