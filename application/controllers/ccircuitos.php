<?php


class Ccircuitos extends CI_Controller 
{

    function __Construct()
    {
        parent::__Construct();
        $this->load->model('mcircuito');       
    }

    public function index(){
        $this->load->view('Circuitos/vCircuitos');
    }
    
    public function guardar(){
       $param['circuito'] = $this->input->post("Circuito");
       $param['vueltas'] = $this->input->post("Vueltas");
       $param['suspension'] = $this->input->post("Suspencion");
       $param['altucoche'] = $this->input->post("altura");
       $param['nivelaleron'] = $this->input->post("alerones");
       $param['pits'] = $this->input->post("pits");
       $param['compa'] = $this->input->post("compatibildiad");
       $param['Fcreation'] = $this->input->post("fecha");
        
       $this->mcircuito->guardar($param);

    }
}
