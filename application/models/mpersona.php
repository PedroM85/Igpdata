<?php


class Mpersona extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    public function guardar($param){
        $campos = array(
            'nombre' => $param['nombre'],
            'apellido' => $param['apellido'],
            'email' => $param['email'],
            'Fcreation' => $param['Fcreation'],
            'Act' => $param[1]            
        );

        $this->db->insert('tbl_persona', $campos);

        return $this->db->insert_id();
    }

    public function actualizar($param){
        $campos = array(
            'nombre' => $param['nombre'],
            'apellido' => $param['apellido'],
            'email' => $param['email']           
        );

        $this->db->update('tbl_persona',$campos);
        $this->db->where('idpersona', $this->session->userdata('s_idpersona'));

        return 1;
    }

    public function getPersona(){
		$this->db->select('nombre, apellido, email');
		$this->db->from('tbl_persona');
		$query = $this->db->get();
					
		return $query;
	}

	public function getPersonas(){
		$this->db->select('nombre,edad');
		$this->db->from('persona');
		$query = $this->db->get();
					
		return $query->result();
	}

    public function eliminar($idP){
       //hay 2 forma de eliminar
       //primera
       // $campos => array(
       //     'idpersona' = $idP
       // );

       // $this->db->delete('persona',$campos);
        
       //seguna
       $this->db->where('idpersona',$idP);
       $this->db->delete('tbl_persona');
    }
}

