<?php
ob_start();
class PDF extends fpdf
{
    //Page header
    function Header()
    {
                $this->setMargins(17,12.954,9.906);
                //$this->AddFont('times','','Times_New_Roman_Normal.php');
                $this->setFont('times','',14);
                $this->setFillColor(250,250,250);
                //$this->cell(100,6,"Laporan daftar pegawai gubugkoding.com",0,0,'L',1); 
                //$this->cell(100,6,"Printed date : " . date('d/m/Y'),0,1,'R',1); 
                $this->Image(base_url().'asset/img/logo.jpg', 17, 10,'28.956','34.798','jpeg');
                $this->cell(34,6,'',0,0,'C',0); 
                $this->cell(34,6,'KEMENTERIAN RISET, TEKNOLOGI DAN PENDIDIKAN TINGGI',0,1,'L',1);
                $this->Ln(2);
                $this->cell(49,4,'',0,0,'C',0); 
                $this->cell(49,4,'UNIVERSITAS NEGERI SEMARANG',0,1,'L',1);
                $this->Ln(2);
                $this->setFont('times','B',14);
                $this->cell(65,4,'',0,0,'C',0); 
                $this->cell(65,4,'FAKULTAS TEKNIK',0,1,'L',1);
                $this->Ln(1);
                $this->setFont('times','',12);
                $this->cell(32,4,'',0,0,'C',0); 
                $this->cell(32,4,'Gedung Dekanat Kampus Sekaran Gunungpati Semarang 50229',0,1,'L',1);
                $this->Ln(1);
                $this->cell(54,4,'',0,0,'C',0); 
                $this->cell(54,4,'Telepon/Fax (024) 8508101 - 8508009',0,1,'L',1);
                $this->Ln(1);
                $this->cell(32,4,'',0,0,'C',0); 
                $this->cell(32,4,'Laman : http://www.ft.unnes.ac.id, email: ft_unnes@yahoo.com',0,1,'L',1);
                $this->Ln(1.5);
                $this->setLineWidth(0.05);
                $this->Line(18,45,191,45);
                $this->setLineWidth(0.8);
                $this->Line(18.3,46,190.7,46);
                $this->setLineWidth(0.2);
                
                $this->Ln();
                $this->setFont('times','',14);
                $this->cell(62,4,'',0,0,'C',0); 
                $this->cell(62,4,'SURAT KETERANGAN',0,1,'L',1);
                $this->Ln();
                $this->setFont('times','',12);
                $this->cell(55,0,'',0,0,'C',0); 
                $this->cell(55,0,'Nomor :               /UN37.1.5/KM/2016',0,1,'L',1);

                /*
                $this->setFont('Arial','',14);
                $this->setFillColor(250,250,250);
                $this->cell(25,6,'',0,0,'C',0); 
                $this->cell(100,6,'Laporan daftar pegawai gubugkoding.com',0,1,'L',1); 
                $this->cell(25,6,'',0,0,'C',0); 
                $this->cell(100,6,"Periode : ".date('M Y'),0,1,'L',1); 
                $this->cell(25,6,'',0,0,'C',0); 
                $this->cell(100,6,'Lokasi : Semarang, Jawa Tengah',0,1,'L',1); */
                
                
                 
    }
 
    function Content($data_aktif_kuliah)
    {
        $this->Ln(15);
        $x=$this->GetX();
        $y=$this->GetY();
        //Print the text
        $this->MultiCell(170,5,'Yang bertanda tangan dibawah ini :',0,'J');

            $x=$this->GetX();
            $y=$this->GetY();
            //Print the text
            $this->MultiCell(40,4.5,'Nama',0,'L');
            //Put the position to the right of the cell
            $this->SetXY($x+40,$y);
            //ulang
            $x=$this->GetX();
            $y=$this->GetY();
            //Print the text
            $this->MultiCell(2,4.5,':',0,'L');
            //Put the position to the right of the cell
            $this->SetXY($x+2,$y);
            //ulang
            $x=$this->GetX();
            $y=$this->GetY();
            //Print the text
            $this->MultiCell(100,4.5,'Dr. Nur Qudus M.T.',0,'L');
            //Put the position to the right of the cell
            $this->SetXY($x+100,$y);
            $this->Ln(5);

            $x=$this->GetX();
            $y=$this->GetY();
            //Print the text
            $this->MultiCell(40,4.5,'NIP',0,'L');
            //Put the position to the right of the cell
            $this->SetXY($x+40,$y);
            //ulang
            $x=$this->GetX();
            $y=$this->GetY();
            //Print the text
            $this->MultiCell(2,4.5,':',0,'L');
            //Put the position to the right of the cell
            $this->SetXY($x+2,$y);
            //ulang
            $x=$this->GetX();
            $y=$this->GetY();
            //Print the text
            $this->MultiCell(100,4.5,'196911301994031001',0,'L');
            //Put the position to the right of the cell
            $this->SetXY($x+100,$y);
            $this->Ln(5);

            $x=$this->GetX();
            $y=$this->GetY();
            //Print the text
            $this->MultiCell(40,4.5,'Pangkat/golru',0,'L');
            //Put the position to the right of the cell
            $this->SetXY($x+40,$y);
            //ulang
            $x=$this->GetX();
            $y=$this->GetY();
            //Print the text
            $this->MultiCell(2,4.5,':',0,'L');
            //Put the position to the right of the cell
            $this->SetXY($x+2,$y);
            //ulang
            $x=$this->GetX();
            $y=$this->GetY();
            //Print the text
            $this->MultiCell(100,4.5,'Pembina Utama Muda / IVc',0,'L');
            //Put the position to the right of the cell
            $this->SetXY($x+100,$y);
            $this->Ln(5);

            $x=$this->GetX();
            $y=$this->GetY();
            //Print the text
            $this->MultiCell(40,4.5,'Jabatan',0,'L');
            //Put the position to the right of the cell
            $this->SetXY($x+40,$y);
            //ulang
            $x=$this->GetX();
            $y=$this->GetY();
            //Print the text
            $this->MultiCell(2,4.5,':',0,'L');
            //Put the position to the right of the cell
            $this->SetXY($x+2,$y);
            //ulang
            $x=$this->GetX();
            $y=$this->GetY();
            //Print the text
            $this->MultiCell(100,4.5,'Dekan',0,'L');
            //Put the position to the right of the cell
            $this->SetXY($x+100,$y);
            $this->Ln(5);

            $x=$this->GetX();
            $y=$this->GetY();
            //Print the text
            $this->MultiCell(40,4.5,'Pada',0,'L');
            //Put the position to the right of the cell
            $this->SetXY($x+40,$y);
            //ulang
            $x=$this->GetX();
            $y=$this->GetY();
            //Print the text
            $this->MultiCell(2,4.5,':',0,'L');
            //Put the position to the right of the cell
            $this->SetXY($x+2,$y);
            //ulang
            $x=$this->GetX();
            $y=$this->GetY();
            //Print the text
            $this->MultiCell(100,4.5,'Fakultas Teknik - Universitas Negeri Semarang',0,'L');
            //Put the position to the right of the cell
            $this->SetXY($x+100,$y);
            $this->Ln(10);
            
            $x=$this->GetX();
            $y=$this->GetY();
            //Print the text
            $this->MultiCell(170,5,'Menerangkan dengan sesungguhnya bahwa :',0,'J');

        foreach($data_aktif_kuliah as $data) {

            $x=$this->GetX();
            $y=$this->GetY();
            //Print the text
            $this->MultiCell(40,4.5,'Nama',0,'L');
            //Put the position to the right of the cell
            $this->SetXY($x+40,$y);
            //ulang
            $x=$this->GetX();
            $y=$this->GetY();
            //Print the text
            $this->MultiCell(2,4.5,':',0,'L');
            //Put the position to the right of the cell
            $this->SetXY($x+2,$y);
            //ulang
            $x=$this->GetX();
            $y=$this->GetY();
            //Print the text
            $this->MultiCell(140,4.5,strtoupper($data->nama),0,'J');
            //Put the position to the right of the cell
            $this->SetXY($x+100,$y);
            $this->Ln(5); 

            $x=$this->GetX();
            $y=$this->GetY();
            //Print the text
            $this->MultiCell(40,4.5,'NIM',0,'L');
            //Put the position to the right of the cell
            $this->SetXY($x+40,$y);
            //ulang
            $x=$this->GetX();
            $y=$this->GetY();
            //Print the text
            $this->MultiCell(2,4.5,':',0,'L');
            //Put the position to the right of the cell
            $this->SetXY($x+2,$y);
            //ulang
            $x=$this->GetX();
            $y=$this->GetY();
            //Print the text
            $this->MultiCell(140,4.5,$data->nim,0,'J');
            //Put the position to the right of the cell
            $this->SetXY($x+100,$y);
            $this->Ln(5);

            $x=$this->GetX();
            $y=$this->GetY();
            //Print the text
            $this->MultiCell(40,4.5,'Program Studi',0,'L');
            //Put the position to the right of the cell
            $this->SetXY($x+40,$y);
            //ulang
            $x=$this->GetX();
            $y=$this->GetY();
            //Print the text
            $this->MultiCell(2,4.5,':',0,'L');
            //Put the position to the right of the cell
            $this->SetXY($x+2,$y);
            //ulang
            $x=$this->GetX();
            $y=$this->GetY();
            //Print the text
            $this->MultiCell(140,4.5,$data->nama_prodi,0,'J');
            //Put the position to the right of the cell
            $this->SetXY($x+100,$y);
            $this->Ln(5);

            $x=$this->GetX();
            $y=$this->GetY();
            //Print the text
            $this->MultiCell(40,4.5,'Jurusan',0,'L');
            //Put the position to the right of the cell
            $this->SetXY($x+40,$y);
            //ulang
            $x=$this->GetX();
            $y=$this->GetY();
            //Print the text
            $this->MultiCell(2,4.5,':',0,'L');
            //Put the position to the right of the cell
            $this->SetXY($x+2,$y);
            //ulang
            $x=$this->GetX();
            $y=$this->GetY();
            //Print the text
            $this->MultiCell(140,4.5,$data->nama_jurusan,0,'J');
            //Put the position to the right of the cell
            $this->SetXY($x+100,$y);
            $this->Ln(5);

            $x=$this->GetX();
            $y=$this->GetY();
            //Print the text
            $this->MultiCell(40,4.5,'Pada tahun akademik',0,'L');
            //Put the position to the right of the cell
            $this->SetXY($x+40,$y);
            //ulang
            $x=$this->GetX();
            $y=$this->GetY();
            //Print the text
            $this->MultiCell(2,4.5,':',0,'L');
            //Put the position to the right of the cell
            $this->SetXY($x+2,$y);
            //ulang
            $x=$this->GetX();
            $y=$this->GetY();
            //Print the text
            $depan = date('Y');
            $belakang = $depan+1;
            $this->MultiCell(140,4.5,$depan.'/'.$belakang,0,'J');
            //Put the position to the right of the cell
            $this->SetXY($x+100,$y);
            $this->Ln(10);


            $x=$this->GetX();
            $y=$this->GetY();
            //Print the text
            $this->MultiCell(170,5,'Dan orang tua / wali mahasiswa tersebut adalah :',0,'J');

            $x=$this->GetX();
            $y=$this->GetY();
            //Print the text
            $this->MultiCell(40,4.5,'Nama',0,'L');
            //Put the position to the right of the cell
            $this->SetXY($x+40,$y);
            //ulang
            $x=$this->GetX();
            $y=$this->GetY();
            //Print the text
            $this->MultiCell(2,4.5,':',0,'L');
            //Put the position to the right of the cell
            $this->SetXY($x+2,$y);
            //ulang
            $x=$this->GetX();
            $y=$this->GetY();
            //Print the text
            $this->MultiCell(140,4.5,strtoupper($data->nama_ortu),0,'J');
            //Put the position to the right of the cell
            $this->SetXY($x+100,$y);
            $this->Ln(5); 

            $x=$this->GetX();
            $y=$this->GetY();
            //Print the text
            $this->MultiCell(40,4.5,'NIP/NRP/No.Pegawai',0,'L');
            //Put the position to the right of the cell
            $this->SetXY($x+40,$y);
            //ulang
            $x=$this->GetX();
            $y=$this->GetY();
            //Print the text
            $this->MultiCell(2,4.5,':',0,'L');
            //Put the position to the right of the cell
            $this->SetXY($x+2,$y);
            //ulang
            $x=$this->GetX();
            $y=$this->GetY();
            //Print the text
            $this->MultiCell(140,4.5,$data->nip,0,'J');
            //Put the position to the right of the cell
            $this->SetXY($x+100,$y);
            $this->Ln(5);

            $x=$this->GetX();
            $y=$this->GetY();
            //Print the text
            $this->MultiCell(40,4.5,'Pangkat/Golru',0,'L');
            //Put the position to the right of the cell
            $this->SetXY($x+40,$y);
            //ulang
            $x=$this->GetX();
            $y=$this->GetY();
            //Print the text
            $this->MultiCell(2,4.5,':',0,'L');
            //Put the position to the right of the cell
            $this->SetXY($x+2,$y);
            //ulang
            $x=$this->GetX();
            $y=$this->GetY();
            //Print the text
            $this->MultiCell(140,4.5,$data->pangkat_golru,0,'J');
            //Put the position to the right of the cell
            $this->SetXY($x+100,$y);
            $this->Ln(5);

            $x=$this->GetX();
            $y=$this->GetY();
            //Print the text
            $this->MultiCell(40,4.5,'Instansi',0,'L');
            //Put the position to the right of the cell
            $this->SetXY($x+40,$y);
            //ulang
            $x=$this->GetX();
            $y=$this->GetY();
            //Print the text
            $this->MultiCell(2,4.5,':',0,'L');
            //Put the position to the right of the cell
            $this->SetXY($x+2,$y);
            //ulang
            $x=$this->GetX();
            $y=$this->GetY();
            //Print the text
            $this->MultiCell(140,4.5,$data->instansi_kantor,0,'J');
            //Put the position to the right of the cell
            $this->SetXY($x+100,$y);
            $this->Ln(10);

             $this->MultiCell(175,5,'Pada saat dikeluarkan surat keterangan ini, yang bersangkutan betul - betul terdaftar sebagai mahasiswa aktif Fakultas Teknik Universitas Negeri Semarang.',0,'J');
            $this->Ln(8);

            $this->MultiCell(175,5,'Demikian surat keterangan ini dibuat dengan sesungguhnya, untuk dapat dipergunakan sebagaimana mestinya',0,'J');
            $this->Ln(8);
        }

            //$tgl = date('Y m d');
            $tanggal = date('d');
            if($tanggal == 1) $tanggal = 1;
            if($tanggal == 2) $tanggal = 2;            
            if($tanggal == 3) $tanggal = 3;            
            if($tanggal == 4) $tanggal = 4;            
            if($tanggal == 5) $tanggal = 5;            
            if($tanggal == 6) $tanggal = 6;            
            if($tanggal == 7) $tanggal = 7;            
            if($tanggal == 8) $tanggal = 8;            
            if($tanggal == 9) $tanggal = 9;
            
            $tahun = date('Y');
            if(date('m') == 1)
                $bulan = 'Januari';
            if(date('m') == 2)
                $bulan = 'Februari';
            if(date('m') == 3)
                $bulan = 'Maret';
            if(date('m') == 4)
                $bulan = 'April';
            if(date('m') == 5)
                $bulan = 'Mei';
            if(date('m') == 6)
                $bulan = 'Juni';
            if(date('m') == 7)
                $bulan = 'Juli';
            if(date('m') == 8)
                $bulan = 'Agustus';
            if(date('m') == 9)
                $bulan = 'September';
            if(date('m') == 10)
                $bulan = 'Oktober';
            if(date('m') == 11)
                $bulan = 'November';
            if(date('m') == 12)
                $bulan = 'Desember';

            /*$this->cell(120,4,'',0,0,'C',0); 
            $this->cell(120,4,'Semarang, '.$tanggal.' '.$bulan.' '.$tahun,0,1,'L',1);
            $this->Ln(0.5);
            $this->cell(120,4,'',0,0,'C',0);
            $this->cell(120,4,'Dekan',0,1,'L',1);
            $this->Ln(14);
            $this->cell(120,4,'',0,0,'C',0);
            $this->cell(120,4,'Dr. Nur Qudus, M.T.',0,1,'L',1);
            $this->Ln(0.5); */
            $x=$this->GetX();
            $y=$this->GetY();
            //Print the text
            $this->MultiCell(110,4.5,'',0,'L');

            $this->SetXY($x+110,$y);
            //Print the text
            $this->MultiCell(140,4.5,'Semarang, '.$tanggal.' '.$bulan.' '.$tahun,0,'J');
            //Put the position to the right of the cell
            $this->SetXY($x+100,$y);
            $this->Ln(10);

            $x=$this->GetX();
            $y=$this->GetY();
            $this->MultiCell(110,4.5,'',0,'L');

            $this->SetXY($x+110,$y);
            //Print the text
            $this->MultiCell(140,4.5,'Dekan,',0,'J');
            //Put the position to the right of the cell
            $this->SetXY($x+100,$y);
            $this->Ln(20);

            $x=$this->GetX();
            $y=$this->GetY();
            $this->MultiCell(110,4.5,'',0,'L');

            $this->SetXY($x+110,$y);
            //Print the text
            $this->MultiCell(140,4.5,'Dr. Nur Qudus M.T',0,'J');
            //Put the position to the right of the cell
            $this->SetXY($x+100,$y);
            $this->Ln(5);

            $x=$this->GetX();
            $y=$this->GetY();
            $this->MultiCell(110,4.5,'',0,'L');

            $this->SetXY($x+110,$y);
            //Print the text
            $this->MultiCell(140,4.5,'NIP. 196911301994031001',0,'J');
            //Put the position to the right of the cell
            $this->SetXY($x+100,$y);
            $this->Ln(5); 
    }
    function Footer()
    {
          
            /*$this->MultiCell(140,5,'Semarang, '.date('d m Y'),0,'J');
            $this->Ln(5);
            $this->MultiCell(140,5,'Dekan',0,'J');
            $this->Ln();
            $this->MultiCell(140,5,'Dr. Nur Qudus, M.T.',0,'J');
            $this->Ln();
            $this->MultiCell(140,5,'NIP. 196911301994031001',0,'J');
            $this->Ln(); 
            */

            
    }


    function NewLine() {

        $x=$this->GetX();
        $y=$this->GetY();
        //Print the text
        $this->MultiCell(10,4.5,' ','LR','C');
        //Put the position to the right of the cell
        $this->SetXY($x+10,$y);
        //ulang
        $x=$this->GetX();
        $y=$this->GetY();
        //Print the text
        $this->MultiCell(70,4.5,' '.' ','R','L');
        //Put the position to the right of the cell
        $this->SetXY($x+70,$y);
        //ulang
        $x=$this->GetX();
        $y=$this->GetY();
        //Print the text
        $this->MultiCell(51,4.5,' '.' ','R','L');
        //Put the position to the right of the cell
        $this->SetXY($x+51,$y);
        //ulang
        $x=$this->GetX();
        $y=$this->GetY();
        //Print the text
        $this->MultiCell(40,4.5,' ','R','L');
        //Put the position to the right of the cell
        $this->SetXY($x+40,$y);
        $this->Ln();
    }

    function buatJustify($s, $lineWidth)
    {
        //Get width of a string in the current font
        $s=(string)$s;
        $words = explode(' ',$s);
        $cw=&$this->CurrentFont['cw'];
        $w=0;
        $spaceWidth = $this->GetStringWidth(' ');

        for($i=0, $wordsCount = count($words); $i<$wordsCount; $i++){
            // sum up all the words width, and add space withs between the words
            $w += $this->GetStringWidth($words[$i]) + $spaceWidth;
            if ($w > $lineWidth) {
                //if current width is more than the line width, then the current word
                //will be moved to next line, we need to count it again
                $i--;
            }
            if ($w >= $lineWidth) {
                //if the current width is equal or grater than the line width, 
                //we need to reset current width, and count the width of remaining text
                $w = 0;
            }
        }
        //at last, we have only the width of the text that remain on the last line!
        return $w;
    } 
}
 
$pdf = new PDF('P','mm','A4');
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->Content($data_aktif_kuliah);
$pdf->Output('I','pdf.pdf');
ob_end_flush();