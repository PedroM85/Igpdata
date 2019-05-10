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
         
         $this->db->select("p.Idpersona, concat(p.nombre, ', ', p.apellido) alumno, ifnull(n.1B,'') a, ifnull(n.2B,'') b, ifnull(n.3B,'') c, ifnull(n.4B,'') d, ifnull(n.puntofinal,'') puntofinal", false);
         $this->db->from('tbl_puntos n');
         $this->db->join('tbl_persona p','p.idPersona = n.idPersona','right');

        $r = $this->db->get();
        return $r->result();
    }
}