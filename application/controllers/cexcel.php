<?php
/**
* 
*/
class Cexcel extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('mpersona');
		$this->load->library('export_excel');
	}

    public function index()
    {
        $this->load->view('layout/header');
        $this->load->view('layout/menu');
        $this->load->view('exportar/vexcel');
        $this->load->view('layout/footer');
    }
	public function dExcel(){
		$result = $this->mpersona->getPersona();
		$this->export_excel->to_excel($result, 'lista_de_personas');
	}
}