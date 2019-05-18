<?php
if(!defined('BASEPATH'))
    exit('No Direct script access allowed');

class Mupload extends CI_Model {

    public function construct(){
        parent::__construct();
    }

    //Funcion para insertar los datos de la imagen subida
    function subir($titulo,$imagen)
    {
        $data = array(
            'titulo' => $titulo,
            'ruta' => $imagen
        );
        return $this->db->insert('imagenes',$data);
    }
}