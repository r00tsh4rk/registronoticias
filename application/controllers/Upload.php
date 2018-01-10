<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller {

	
	function __construct()
	{
		parent::__construct();
		$this -> load -> model('Model_upload');
	}

	public function index()
	{  
    if ($this->session->userdata('user')) { 
		$data['titulo'] = 'Generación de Noticias';
        $error = array('error' => false);
			$this->load->view('plantilla/header', $data);
			$this->load->view('index',$error);
			$this->load->view('plantilla/footer');

             }
            else
            {
                redirect('Login');
            }
		
	}


   public function SubirInfo()
	{
		# Validamos el formulario 
		$this -> form_validation -> set_rules('titulo_miniatura','Titulo Miniatura','trim|required');
		$this -> form_validation -> set_rules('descripcion','Descripcion','trim|required');
		//$this -> form_validation -> set_rules('titulo_principal','Titulo Principal','trim|required');
        $this -> form_validation -> set_rules('teks','Contenido de Noticia','trim|required');
		//$this -> form_validation -> set_rules('fecha_publicacion','Fecha','trim|required');
		$this -> form_validation -> set_rules('quien_publica','Publicador','required');



		if ($this -> form_validation -> run() == FALSE) {
			# code...
			$data['titulo'] = 'Generación de Noticias';
             $error = array('error' => false);
			$this->load->view('plantilla/header', $data);
			$this->load->view('index',$error);
			$this->load->view('plantilla/footer');

		}
		else
		{
			$titulo_miniatura = $this -> input -> post('titulo_miniatura');
			$descripcion = $this -> input -> post('descripcion');
			//$titulo_principal= $this -> input -> post('titulo_principal');
			$cuerpo_noticia= $this -> input -> post('teks');
			//$fecha_publicacion = $this -> input -> post('fecha_publicacion');
			$quien_publica = $this -> input -> post('quien_publica');
		

		// Revisamos si se ha subido algo
		if (isset($_POST['btn_enviar']))
		{
        // Cargamos la libreria Upload
		$this->load->library('upload');


        //CARGANDO SLIDER
         if (!empty($_FILES['imagenSlider']['name']))
        {
            // Configuración para el Archivo 1
            $config['upload_path'] = './sliders/';
            $config['allowed_types'] = 'jpg|png';
            $config['remove_spaces']=FALSE;
            $config['max_size']    = '2048';
            $config['overwrite'] = FALSE;

             if ($config['allowed_types'] = 'jpg|JPG') {
               $sliderformateado = preg_replace('([^A-Za-z0-9])', '', $_FILES['imagenSlider']['name']);
               $_FILES['imagenSlider']['name'] = $sliderformateado.'.'.'jpg';
               $newslider = $sliderformateado.'.'.'jpg';
            }
            else
                if ($config['allowed_types'] = 'png|PNG') {
                   $sliderformateado = preg_replace('([^A-Za-z0-9])', '', $_FILES['imagenSlider']['name']);
                   $_FILES['imagenSlider']['name'] = $sliderformateado.'.'.'png';
                   $newslider = $sliderformateado.'.'.'png';
                }

            // Cargamos la configuración del Archivo 1
            $this->upload->initialize($config);

            // Subimos archivo 1
            if ($this->upload->do_upload('imagenSlider'))
            {
                $data = $this->upload->data();
            }
            else
            {
                $this->session->set_flashdata('errorlibro', $this->upload->display_errors());
            }

        }
    
        // CARGANDO MINIATURA
        if (!empty($_FILES['imagenMiniatura']['name']))
        {
            // La configuración del Archivo 2, debe ser diferente del archivo 1
            // si configuras como el Archivo 1 no hará nada
        	$config['upload_path'] = './resourcesimg/';
        	$config['allowed_types'] = 'jpg|png';
        	$config['remove_spaces']=FALSE;
        	$config['max_size']    = '2048';
        	$config['overwrite'] = FALSE;


                //Eliminando caracteres especiales y limitando espacios en blanco

               if ($config['allowed_types'] = 'jpg|JPG') {
               $miniaturaformateada = preg_replace('([^A-Za-z0-9])', '', $_FILES['imagenMiniatura']['name']);
               $_FILES['imagenMiniatura']['name'] = $miniaturaformateada.'.'.'jpg';
               $newimgminiatura = $miniaturaformateada.'.'.'jpg';
            }
            else
                if ($config['allowed_types'] = 'png|PNG') {
                   $miniaturaformateada = preg_replace('([^A-Za-z0-9])', '', $_FILES['imagenMiniatura']['name']);
                   $_FILES['imagenMiniatura']['name'] = $miniaturaformateada.'.'.'png';
                   $newimgminiatura = $miniaturaformateada.'.'.'png';
                }

            // Cargamos la nueva configuración
        	$this->upload->initialize($config);

            // Subimos el segundo Archivo
        	if ($this->upload->do_upload('imagenMiniatura'))
        	{
        	   $data = $this->upload->data();
        	}
        	else
        	{
        		$this->session->set_flashdata('errorportada', $this->upload->display_errors());
        	}

            $slider = $_FILES['imagenSlider']['name'];
            $miniatura = $_FILES['imagenMiniatura']['name'];
        	
           date_default_timezone_set('America/Mexico_City');
           $fecha_actual = date('Y-m-d');
           $hora_actual =  date("H:i:s");
           
           $inicioCuerpo = '<div class="cuerponoticia">';
           $finalCuerpo = '</div>';
           $noticia_formateada = $inicioCuerpo.$cuerpo_noticia.$finalCuerpo;

        	$agregar= $this->Model_upload->insertar($titulo_miniatura, $descripcion, $noticia_formateada , $fecha_actual, $hora_actual, $quien_publica, $newimgminiatura, $newslider);
        //si la actualización ha sido correcta creamos una sesión flashdata para decirlo
        //
        	if($agregar)
        	{ 	
        		$this->session->set_flashdata('insertado', 'La noticia:  '.$titulo_miniatura.' se ha agregado correctamente');
        		redirect(base_url() . 'Inicio/');
        	}
        	else
        	{
        		$data['titulo'] = 'Generación de Noticias';
             $error = array('error' => false);
            $this->load->view('plantilla/header', $data);
            $this->load->view('index',$error);
            $this->load->view('plantilla/footer');
        		$this->session->set_flashdata('error', 'No se ha podido publicar la noticia, verifique su información');
        	}

        }      

    }
    else
    {
    	//En caso de no haber archivos en el formulario, envia un error a la vista ssad indicando que no hay archivos
    	$data['titulo'] = 'Generación de Noticias';
             $error = array('error' => false);
            $this->load->view('plantilla/header', $data);
            $this->load->view('index',$error);
            $this->load->view('plantilla/footer');
    	$this->session->set_flashdata('error', 'No se ha cargado ningun archivo, verifique su información');
    }
}

}
}