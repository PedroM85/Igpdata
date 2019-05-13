<?php



class Mpuntos extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    public function getpuntos(){
        // $q = "SELECT 
        // p.Idpersona, CONCAT(p.nombre, ', ', p.apellido) alumno, 
        // n.1B, n.2B, n.3B, n.4b, n.puntofinal
        // from tbl_puntos n
        // right JOIN tbl_persona p ON p.Idpersona = n.idPersona ";
         
         $this->db->select("p.idpersona, concat(p.nombre, ', ', p.apellido) alumno, ifnull(n.1B,'') a, ifnull(n.2B,'') b, ifnull(n.3B,'') c, ifnull(n.4B,'') d, ifnull(n.puntofinal,'') e", false);
         $this->db->from('tbl_puntos n');
         $this->db->join('tbl_persona p','p.idpersona = n.idPersona','right');

        $r = $this->db->get();
        return $r->result();
    }

    public function grabarpunto($param){
        $campos = array(
            'idpersona' => $param['idper'],
            '1B' => $param['n1'],
            '2B' => $param['n2'],
            '3B' => $param['n3'],
            '4B' => $param['n4'],
            'puntofinal' => $param['nf']            
        );

        $this->db->insert('tbl_puntos', $campos);
    }
}