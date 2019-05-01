<?php


class Cpersona extends CI_Controller 
{

    function __Construct()
    {
        parent::__Construct();
        $this->load->model('mpersona');        
        $this->load->model('musuario'); 
        //$this->load->library('encrypt');      
    }

    public function index(){
        $this->load->view('persona/vpersona');
    }
    
    public function guardar(){
       $param['nombre'] = $this->input->post('Nombre');
       $param['apellido'] = $this->input->post('Apellido');
       $param['email'] = $this->input->post('email');       
       $param['Fcreation'] = $this->input->post('fecha');       
       $paramusu['nomUser'] = $this->input->post('user');
       $paramusu['passUser'] = $this->input->post('pass');
      
       
       $lastid = $this->mpersona->guardar($param);      

        if ($lastid > 0) {
            $paramusu['idpersona'] = $lastid;
            $this->musuario->guardarUsuario($paramusu);
        }
         
    }
}
