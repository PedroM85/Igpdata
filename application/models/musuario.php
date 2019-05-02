<?php


class Musuario extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    public function guardarUsuario($param){
        $campos = array(
            //tabla pase de datos => Parametro del controlador.
            'nomUser' => $param['nomUser'],
            'passUser' => $param['passUser'],
            'idpersona' => $param['idpersona']
        );

        $this->db->insert('tbl_usuario', $campos);
    }
    public function eliminar($idP){
        //hay 2 forma de eliminar
        //primera
        // $campos => array(
        //     'idpersona' = $idP
        // );
 
        // $this->db->delete('persona',$campos);
         
        //seguna
        $this->db->where('iduser',$idP);
        $this->db->delete('tbl_usuario');
    }
}