<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Spk_print extends CI_Controller {
  
    public function __construct()
    {
        parent::__construct();
        $this->load->library("Pdf");
    }
  
    public function index($id_proposal,$pencairan) {
    //============================================================+
    // File name   : example_001.php
    //
    // Description : Example 001 for TCPDF class
    //               Default Header and Footer
    //
    // Author: Muhammad Saqlain Arif
    //
    // (c) Copyright:
    //               Muhammad Saqlain Arif
    //               PHP Latest Tutorials
    //               http://www.phplatesttutorials.com/
    //               saqlain.sial@gmail.com
    //============================================================+
    $this->load->model('Input_model');
    $this->load->helper('fungsidate'); //kita load helper yang kita buat cukup    
    $data= NULL;
    if($query = $this->Input_model->get_data_pk_2($id_proposal,$pencairan)) {
            $data['proposale'] = $query;
        }
        else{
            $data['proposale'] = NULL;
    }
   
  
    // create new PDF document
    $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);    
  
    // set document information
    $pdf->SetCreator(PDF_CREATOR);
    $pdf->SetAuthor('Muhammad Saqlain Arif');
    $pdf->SetTitle('TCPDF Example 001');
    $pdf->SetSubject('TCPDF Tutorial');
    $pdf->SetKeywords('TCPDF, PDF, example, test, guide');   
  
    // set default header data
    //$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 001', PDF_HEADER_STRING, array(0,64,255), array(0,64,128));
    //$pdf->setFooterData(array(0,64,0), array(0,64,128)); 
  
    // set header and footer fonts
    $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
    $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
  
    // set default monospaced font
    //$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED); 
  
    // set margins
    //$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
    //$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
    //$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);    
  
    // set auto page breaks
    $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM); 
  
    // set image scale factor
    $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);  
  
    // set some language-dependent strings (optional)
    // remove default header/footer
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
    if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
        require_once(dirname(__FILE__).'/lang/eng.php');
        $pdf->setLanguageArray($l);
    }   
  
    // ---------------------------------------------------------    
  
    // set default font subsetting mode
    $pdf->setFontSubsetting(true);   
  
    // Set font
    // dejavusans is a UTF-8 Unicode font, if you only need to
    // print standard ASCII chars, you can use core fonts like
    // helvetica or times to reduce file size.
    $pdf->SetFont('dejavusans', '', 9, '', true);   
  
    // Add a page
    // This method has several options, check the source code documentation for more information.
    $pdf->AddPage(); 
  
    // set text shadow effect
    //$pdf->setTextShadow(array('enabled'=>true, 'depth_w'=>0.2, 'depth_h'=>0.2, 'color'=>array(196,196,196), 'opacity'=>1, 'blend_mode'=>'Normal'));    
  
    

    foreach ($data['proposale'] as $proposal) { 
    // Set some content to print
   // $nominal = rupiah2($proposal->nominal_disetujui_dekan);   
    //$nominal_70 = (70/100)* $nominal;
    //$sisa = $nominal - $nominal_70;
    $html = '
    <h3>SISA PANJAR KERJA</h3>
    <table border="1"><tr><td align="center" width="60%"><strong>KEMENTRIAN RISET, TEKNOLOGI DAN PENDIDIKAN TINGGI<br /> BADAN LAYANAN UMUM <br /> UNIVERSITAS NEGERI SEMARANG</strong></td><td align="CENTER" width="20%">PANJAR KERJA <br /> <br /> <strong>BPK (UP)</strong></td><td align="center" width="20%">Lembar ke <br /> <br /> <strong>1</strong></td></tr>
    </table>
    <br /><br />
    <table>
    <tr><td width="40%">Telah diterima dari</td><td width="1%">:</td><td width="59%">Kuasa Pengguna Anggaran Universitas Negeri Semarang</td></tr>
    <tr><td width="40%">Uang Sebesar</td><td width="1%">:</td><td width="59%">'.$proposal->nominal_70.'</td></tr>
    <tr><td width="40%">Sumber dana</td><td width="1%">:</td><td width="59%">'.$proposal->sumberdana.'</td></tr>
    <tr><td width="40%">Terbilang</td><td width="1%">:</td><td width="59%">'.$proposal->terbilang.'</td></tr>
    <tr><td width="40%">Untuk Pembayaran</td><td width="1%">:</td><td width="59%">'.$proposal->tujuanbayar.'</td></tr>
    <tr><td width="40%">Keterangan</td><td width="1%">:</td><td width="59%">'.$proposal->keterangan.'</td></tr>
    </table>
    <br />
    <br />
    <table><tr><td align="left" width="60%">&nbsp;<br />BPP FT <br /><br /><br /> <br />Soleh Adi Wibowo<br />NIP. 197512172005011002</td><td align="left" width="20%">Semarang,'.$proposal->tgl_validasi.' <br /> Pemegang PK <br /><br /><br /><br />Dimas Wicaksono S.T., M.Eng<br />NIP.</td><td border="1" width="20%">&nbsp;<br/>Total : '.$proposal->nominal_total.' <br /> Lalu : '.$proposal->lalu.' <br /> Nominal : '.$proposal->nominal_70.' <br /> Sisa : '.$proposal->sisa.'</td></tr>
    </table>
    ';
  }
    // Print text using writeHTMLCell()
    $pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);   
  
    // ---------------------------------------------------------    
  
    // Close and output PDF document
    // This method has several options, check the source code documentation for more information.
    $pdf->Output('example_001.pdf', 'I');    
  
    //============================================================+
    // END OF FILE
    //============================================================+
    }
}
  
/* End of file c_test.php */
/* Location: ./application/controllers/c_test.php */