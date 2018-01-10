<?php 

	defined('BASEPATH') OR exit('No direct script access allowed');
	class Model_noticias extends CI_Model 
	{
		
        
	public function getNoticias()
    	{
    		 $this->db->select('*');
    		 $this->db->from('noticias');
    		 $this->db->order_by('id', 'desc');
    		 $this->db->limit(4);
    		 $noticias = $this->db->get();
			 return $noticias->result();
    	}

    public function getLastSlider()
        {
             $this->db->select('slider');
             $this->db->from('noticias');
             $this->db->order_by('id', 'desc');
             $this->db->limit(1);
             $slider = $this->db->get();
             return $slider->result();
        }

    public function getAllNoticias()
    	{
    		 $this->db->select('*');
    		 $this->db->from('noticias');
    		 $this->db->order_by('id', 'desc');
    		 $this->db->limit(20);
    		 $noticias = $this->db->get();
			 return $noticias->result();
    	}

	}
 ?>