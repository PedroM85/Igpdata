<?php
class Csendmail extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function SendMailGmail()
    {

        //Cargamos la libreria de Email de CI.
        $this->load->library('email');

        $configGmail = array(
            'protocol' => 'stmp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 446,
            'smtp_user' => 'pedromaneiro@gmail.com',
            'smtp_pass' => 'Pedro1985,',
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n"
        );

        //cargamos la configuracion para enviar con gmail

        $this->email->initialize($configGmail);

        $this->email->from('pedromaneiro@gmail.com');
        $this->email->to('maneirop85@gmail.com');
        $this->email->subject('Esto es una prueba');
        $this->email->message('<h2>Correo con Imagen</h2>
            <br><br>
            Kurt Cobain - Pedro Maneiro
            <br>
            <a href="http://www.facebook.com/intecsolt"><img src="'.base_url().'uploads/imagenes/thumbs/7.jpg" height="150" width="150"></a><h3>Click en la imagen 
            y dale like a mi pagina</h3>'
            );
        
        
        if ($this->email->send()){
                echo "Enviado by Pe2ca";
        }else{
            Sshow_error($this->email->print_debugger());
        }
        sleep(1);
        // for($i; $i <= 1 ; $i++){
        //     if($this->email->send()){
        //         echo "Enviado by Pe2ca";
        //     }else{
        //         show_error($this->email->print_debugger());
        //     }
        //     sleep(1);
        // }
    }
}