<?php



class Cpuntos extends CI_controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('mpuntos');
    }

    public function index(){
        $this->load->view('layout/header');
        $this->load->view('layout/menu');
        $this->load->view('puntos/vpuntos');
        $this->load->view('layout/footer');
    }

    public function getPuntos(){
       echo json_encode($this->mpuntos->getPuntos());
    }
}