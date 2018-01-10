<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

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

}
