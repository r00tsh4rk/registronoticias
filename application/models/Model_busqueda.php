<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_busqueda extends CI_Model {

	public function __construct()
	{
		parent::__construct();

	}

	public function getNoticia($idnoticia)
	{
		$this->db->select('*');
		$this->db->from('noticias');
		$this->db->where('id', $idnoticia);
		$selection = $this->db->get();
		return $selection->result();

	}

}

/* End of file Model_busqueda.php */
/* Location: ./application/models/Model_busqueda.php */