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
            'Fcreation' => $param['Fcreation']            
        );

        $this->db->insert('tbl_persona', $campos);

        return $this->db->insert_id();
    }
}
