<?php



class Cciudad extends CI_Controller
{

    function __Construct()
    {
        parent::__Construct();
        $this->load->model('mciudad');
        //$s = $this->input->post('sitReg');
        //$this->mciudad->getCiudades($s);
    }

   
    public function getCiudades(){
        $s = $this->input->post('sitReg');
        $resultado = $this->mciudad->getCiudades($s);

        echo json_encode($resultado);
    }
}