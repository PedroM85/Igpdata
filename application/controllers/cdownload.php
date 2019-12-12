<?php 
  

class Cdownload extends CI_Controller {

	
    public function index()
    {
        $this->load->view('layout/header');
        $this->load->view('layout/menu');
        $this->load->view('download/vdownload');
        $this->load->view('layout/footer');
        
    }

	public function descargar(){
		
		$data = [];

		$hoy = date("dmyhis");

        //$html = $this->input->post('txtPDF', $data,true);
 		$thml = $this->load->view('download/vdownload',$data,true );
 		//$html="asdf";
        //this the the PDF filename that user will get to download
        $pdfFilePath = "cipdf_".$hoy.".pdf";
 
        //load mPDF library
        $this->load->library('M_pdf');
        
		$this->m_pdf->pdf->WriteHTML($html);
		 
		$this->m_pdf->pdf->Output($pdfFilePath, "D");
     
	}


}

