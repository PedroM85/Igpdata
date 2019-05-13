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

    public function grabarpunto(){
        //base de datos ---->>>>    vista
        $param['idPersona'] = $this->input->post('idper');
        $param['1B'] = $this->input->post('n1');
        $param['2B'] = $this->input->post('n2');
        $param['3B'] = $this->input->post('n3');
        $param['4B'] = $this->input->post('n4');
        $param['puntofinal'] = $this->input->post('nf');

        $this->mpuntos->grabarpunto($param);
    }
}