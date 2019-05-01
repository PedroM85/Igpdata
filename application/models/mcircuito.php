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
}
