<?php


class Cpersona extends CI_Controller 
{

    function __Construct()
    {
        parent::__Construct();
        $this->load->model('mpersona');        
        $this->load->model('musuario'); 
        $this->load->library('encryption');      
    }

    public function index(){
        $this->load->view('persona/vpersona');
    }
    
    private function hash($paramusu)
    {
      $a = sha1($paramusu);
      return md5($a);
    }

    public function guardar(){
       $param['nombre'] = $this->input->post('Nombre');
       $param['apellido'] = $this->input->post('Apellido');
       $param['email'] = $this->input->post('email');       
       $param['Fcreation'] = $this->input->post('fecha');       
       $paramusu['nomUser'] = $this->input->post('user');
       //$paramusu['passUser'] = $this->input->post('pass');
       //encryptacion de codein - revisar no funciona bien
       //$paramusu['passUser'] = $this->encryption->encrypt($this->input->post('pass'));
       //encryptacion de francisco. funcionando
       $paramusu['passUser'] = $this->hash($this->input->post('pass'));
       
       
       $lastid = $this->mpersona->guardar($param);      

        if ($lastid > 0) {
            $paramusu['idpersona'] = $lastid;
            $this->musuario->guardarUsuario($paramusu);
            
        }
        
        redirect('cpersona/index');
    }

    public function actualizar(){
        $param['nombre'] = $this->input->post('Nombre');
        $param['apellido'] = $this->input->post('Apellido');
        $param['email'] = $this->input->post('email');

        $this->mpersona->actualizar($param);

        redirect('cpersona/index');
    }

    public function eliminar(){
       $idP = $this->input->post('txteliminar');
       $this->musuario->eliminar($idP);
       $this->mpersona->eliminar($idP);
    }
}
