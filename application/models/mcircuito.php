<?php



class Mcircuito extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    public function guardar($param){
        $campos = array(
            'circuito' => $param['circuito'],
            'vueltas' => $param['vueltas'],
            'suspension' => $param['suspension'],
            'altucoche' => $param['altucoche'],
            'nivelaleron' => $param['nivelaleron'],
            'pits' => $param['pits'],
            'compa' => $param['compa'],
            'Fcreation' => $param['Fcreation']
        );

        $this->db->insert('tbl_circuitos', $campos);
    }

    public function getCircuitos(){
        $this->db->select('c.circuito,n.ciudad,c.vueltas,c.suspension,c.altucoche,c.nivelaleron,c.pits,c.compa');
        $this->db->from('tbl_circuitos c');
        $this->db->join('tbl_ciudad n','n.idCiudad = c.idCiudad');

        $r = $this->db->get();

        return $r->result();

        }
}
