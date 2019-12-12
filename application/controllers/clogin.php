<?php



class Clogin extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('mlogin');
        $this->load->library('session');
        //$this->load->library('encryption');        
    }

    public function index(){
        $data['mensaje'] = '';
        //$this->load->view('vlogin',$data);
        $this->load->view('chartjs/vchartjs');
    }

    private function hash($pass)
		{
		  $a = sha1($pass);
		  return md5($a);
        }
        

    public function ingresar(){
        $usu =$this->input->post('txtusuario');
        //$pass =$this->input->post('txtpass');
        //encryptacion de codein - revisar no funciona bien
        //$pass =$this->encryption->encrypt($this->input->post('txtpass'));
        //encryptacion de francisco. funcionando
        $pass = $this->hash($this->input->post('pass'));


        $res = $this->mlogin->ingresar($usu,$pass);

        if ($res == 1) {
            $this->load->view('layout/header');
            $this->load->view('layout/menu');
            $this->load->view('vindex');
            $this->load->view('layout/footer');

        }else{
            $data['Mensaje'] = 'Usuario o Contraseña Erronea!';
            $this->load->view('vlogin',$data);
            
            
        }
    }

    public function login(){
        $this->load->view('persona/vpersona');
    }

}