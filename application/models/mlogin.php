<?php



class Mlogin extends CI_Model
{
    public function ingresar($usu,$pass){
        $this->db->select('u.idpersona, p.nombre ,p.apellido, p.email');
        $this->db->from('tbl_usuario u');
        $this->db->join('tbl_persona p','p.Idpersona = u.idpersona');
        $this->db->where('u.nomUser',$usu);
        $this->db->where('u.passUser',$pass);

        $resultado = $this->db->get();

        if($resultado->num_rows() ==1) {
            $r = $resultado->row();

            $s_usuario = array(
                's_idusuario' => $r->idpersona,
                's_usuario' => $r->nombre.", ".$r->apellido
            );

            $this->session->set_userdata($s_usuario);
       
       
       
       
            return 1;

        }else{
             
             return 0;
        }
        
       
    }
}