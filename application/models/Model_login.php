<?php 

	defined('BASEPATH') OR exit('No direct script access allowed');
	class Model_login extends CI_Model 
	{
		
    	public function  login($user, $password)
    	{
  
    		//return $this -> db -> insert('libros', $data);
    		 $this->db->where('user',$user);
    		 $this->db->where('password',$password);
    		 $busqueda = $this->db->get('usuarios');
    		
    		 if ($busqueda->num_rows()>0) {
    		 	return true;
    		 }
			 else
			 {
			 	return false;
			 }
    	}

    	public function getUsuario($username)
    	{
   
    		$this->db->select("user, id_usuario", FALSE);
    		$this->db->from('usuarios');
    		$this->db->where('user',$username);
    		$seleccion = $this->db->get();
    		$resultado = $seleccion->row();
    		return $resultado;
    	}

        public function Registra_acceso($user, $hora, $fecha){

          $consulta=$this->db->query("INSERT INTO crtl_acceso(user,hora_acceso,fecha_acceso) VALUES('$user','$hora','$fecha');");
            if($consulta==true){
              return true;
          }else{
            return false;
        }

    }
}

 ?>

