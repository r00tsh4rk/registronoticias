<?php 

	defined('BASEPATH') OR exit('No direct script access allowed');
	class Model_upload extends CI_Model 
	{
		
        
		function insertar($titulo_miniatura, $descripcion, $cuerpo_noticia, $fecha_publicacion, $hora_publicacion, $quien_publica, $imagenMiniatura, $slider)
		{
			# code...
			$data = array(

				'titulo_miniatura' => $titulo_miniatura,
				'descripcion' => $descripcion,
				'cuerpo_noticia' => $cuerpo_noticia,
				'fecha_publicacion' => $fecha_publicacion,
				'hora_publicacion' => $hora_publicacion,
				'quien_publica' => $quien_publica,
				'imagenMiniatura' => $imagenMiniatura,
				'slider' => $slider
				);

			return $this -> db -> insert('noticias', $data);
		}

	}
 ?>