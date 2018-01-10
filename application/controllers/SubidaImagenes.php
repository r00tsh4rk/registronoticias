<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SubidaImagenes extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *      http://example.com/index.php/welcome
     *  - or -
     *      http://example.com/index.php/welcome/index
     *  - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
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

    function niceditupload(){

        date_default_timezone_set('America/Mexico_City');
           $fecha_actual = date('Y-m-d');
           $hora_actual =  date("H:i:s");

        $config = array(
            'upload_path' => './imagesnoticia/',
            'allowed_types' => "jpg|png",
            'overwrite' => TRUE,
            'max_size' => "2560",
            'file_name' => md5(5).'_'.rand()
        );
        $this->load->library('upload', $config);
        $this->upload->do_upload('image');
        $data = array(
                'width'=>$this->upload->data('image_width'),
                'height'=>$this->upload->data('image_height'),
                'file_name'=>$this->upload->data('file_name'),
                'class' => 'imagencuerpo'
            );
        $link = base_url().'imagesnoticia/'.$data['file_name'];
        $res = array("data" => array(
                "link" => $link,
                "width" => $data['width'],
                "height" => $data['height'],
                "class" => $data['class'])
            );
        echo json_encode($res); 
    }
}
