<?php



class Cindex extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('mindex');
        $this->load->library('session');
    }

    public function index(){
        $this->load->view('vindex');

    }
}