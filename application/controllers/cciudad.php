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
        $result = $this->mciudad->getCiudades($s);

        echo json_encode($result);
    }
    
    public function index(){
        $this->load->view('layout/header');
        $this->load->view('layout/menu');
        $this->load->view('ciudad/vciudad');
        $this->load->view('layout/footer');
    }
}