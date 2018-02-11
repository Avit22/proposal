<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Proposal_print extends CI_Controller {
  
    public function __construct()
    {
        parent::__construct();
        $this->load->library("Pdf");
    }
  
    public function index($id_proposal) {
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
    if($query = $this->Input_model->get_data_pk_print($id_proposal)) {
            $data['proposale'] = $query;
        }
        else{
            $data['proposale'] = NULL;
    }
    if($query = $this->Input_model->get_all_rab_id_proposal($id_proposal)) {
            $data['rabnya'] = $query;
        }
        else{
            $data['rabnya'] = NULL;                
        }
   if($query = $this->Input_model->get_total_rab($id_proposal)) {
            $data['totalrab'] = $query;
        }
        else{
            $data['totalrab'] = NULL;
        }
  
    // create new PDF document
    $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);    
  
    // set document information
    $pdf->SetCreator(PDF_CREATOR);
    $pdf->SetAuthor('Avit');
    $pdf->SetTitle('Naskah Proposal Lengkap Print');
    $pdf->SetSubject('Naskah Proposal');
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

    // set a barcode on the page footer
$pdf->setBarcode(date('Y-m-d H:i:s'));

// set font
$pdf->SetFont('helvetica', '', 11);

// add a page
// print a message
// -----------------------------------------------------------------------------
$pdf->SetFont('helvetica', '', 10);
// define barcode style
$style = array(
    'position' => '',
    'align' => 'C',
    'stretch' => false,
    'fitwidth' => true,
    'cellfitalign' => '',
    'border' => true,
    'hpadding' => 'auto',
    'vpadding' => 'auto',
    'fgcolor' => array(0,0,0),
    'bgcolor' => false, //array(255,255,255),
    'text' => true,
    'font' => 'helvetica',
    'fontsize' => 8,
    'stretchtext' => 4
);
// PRINT VARIOUS 1D BARCODES
// CODE 39 - ANSI MH10.8M-1983 - USD-3 - 3 of 9.
// Standard 2 of 5

  
    // set text shadow effect
    //$pdf->setTextShadow(array('enabled'=>true, 'depth_w'=>0.2, 'depth_h'=>0.2, 'color'=>array(196,196,196), 'opacity'=>1, 'blend_mode'=>'Normal'));    
    
            # code...    
        
    // Set some content to print
   // $nominal = rupiah2($proposal->nominal_disetujui_dekan);   
    //$nominal_70 = (70/100)* $nominal;
    //$sisa = $nominal - $nominal_70;
    $this->load->helper('fungsidate');
    $total;
    foreach ($data['totalrab'] as $row) {
        $total = $row->total_rab;
    }
    if($data['proposale']==null){
        $html = '
    <h3>PROPOSAL BELUM DISETUJUI DEKAN  </h3>';


    }else {
    foreach ($data['proposale'] as $proposal) { 
    $pdf->Cell(0, 0, 'Generate by SIMPENGPRO', 0, 1);
    $pdf->write1DBarcode("$proposal->kode", 'S25', '', '', '', 18, 0.4, $style, 'N');
    $pdf->Ln();
    $html = '
    <h3><p align="center">'.$proposal->judul.'</p></h3>
    <br /><br /><br />
    <strong>A. Pendahuluan</strong>
    <p align="justify">'.$proposal->pendahuluan.'</p><br />
    <strong>B. Dasar Hukum</strong>
    <p align="justify">'.$proposal->dasar_hukum.'</p><br />
    <strong>C. Tempat dan Tanggal Pelaksanaan</strong>
    <p align="justify">Tempat :'.$proposal->tempat.'</p><br />
    Tanggal :'.tgl_indo($proposal->tgl_pelaksanaan).'<br />
    <br />
    <strong>D. Keluaran</strong>
    <p align="justify">'.$proposal->keluaran.'</p><br />
    <strong>E. Penutup</strong>
    <p align="justify">'.$proposal->penutup.'</p><br />    
    ';
  }


    // Print text using writeHTMLCell()
    $pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);   
  
  $pdf->AddPage(); 
  
    // set text shadow effect
    //$pdf->setTextShadow(array('enabled'=>true, 'depth_w'=>0.2, 'depth_h'=>0.2, 'color'=>array(196,196,196), 'opacity'=>1, 'blend_mode'=>'Normal'));    
    
            # code...    
        
    // Set some content to print
   // $nominal = rupiah2($proposal->nominal_disetujui_dekan);   
    //$nominal_70 = (70/100)* $nominal;
    //$sisa = $nominal - $nominal_70;

    $html = '    
    <h2><p align="center">Lampiran Rencana Anggaran Belanja</p></h2>
    <table border="1" align="center"><tr><td>Nama Barang</td><td>Harga Barang</td><td>Jumlah</td><td>Harga</td></tr></table>';
    // Print text using writeHTMLCell()
    $pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true); 
    foreach ($data['rabnya'] as $rab) { 
    $html = '    
    <table border="1"><tr><td> '.$rab->barang.'</td><td> '.rupiah3($rab->harga).'</td><td> '.$rab->jumlah.'</td><td> '.rupiah3($rab->total).'</td></tr></table>';
    // Print text using writeHTMLCell()
    $pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);
  }

  $html = '    
    <table border="1"><tr><td colspan="3"><p align="RIGHT">TOTAL</p></td><td> '.rupiah3($total).'</td></tr></table>';
    // Print text using writeHTMLCell()
    $pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true); 

  
    // ---------------------------------------------------------


    // ---------------------------------------------------------    
  
    // Close and output PDF document
    // This method has several options, check the source code documentation for more information.
    $pdf->Output('Proposal_Naskah_Print.pdf', 'I');    
  
    //============================================================+
    // END OF FILE
    //============================================================+
    }
}
}
  
/* End of file c_test.php */
/* Location: ./application/controllers/c_test.php */