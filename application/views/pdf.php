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
                $this->cell(34,6,'KEMENTERIAN RISET, TEKNOLOGI DAN PENDIDIKAN TINGGI',0,1,'L',0);
                $this->Ln(2);
                $this->cell(49,4,'',0,0,'C',0); 
                $this->cell(49,4,'UNIVERSITAS NEGERI SEMARANG',0,1,'L',0);
                $this->Ln(2);
                $this->setFont('times','B',14);
                $this->cell(65,4,'',0,0,'C',0); 
                $this->cell(65,4,'FAKULTAS TEKNIK',0,1,'L',0);
                $this->Ln(1);
                $this->setFont('times','',12);
                $this->cell(32,4,'',0,0,'C',0); 
                $this->cell(32,4,'Gedung Dekanat Kampus Sekaran Gunungpati Semarang 50229',0,1,'L',0);
                $this->Ln(1);
                $this->cell(54,4,'',0,0,'C',0); 
                $this->cell(54,4,'Telepon/Fax (024) 8508101 - 8508009',0,1,'L',0);
                $this->Ln(1);
                $this->cell(32,4,'',0,0,'C',0); 
                $this->cell(32,4,'Laman : http://www.ft.unnes.ac.id, email: ft_unnes@yahoo.com',0,1,'L',0);
                $this->Ln(1.5);
                $this->setLineWidth(0.05);
                $this->Line(18,45,189,45);
                $this->setLineWidth(0.8);
                $this->Line(18.3,46,188.7,46);
                $this->setLineWidth(0.2);
                
                $this->Ln();
                $this->Ln();
                $this->Ln();
                $this->setFont('times','B',18);
                $this->cell(62,10,'',0,0,'C',0); 
                $this->cell(62,10,'SURAT TUGAS',0,1,'L',0);
                $this->AddFont('Tahoma','','Tahoma.php');
                $this->setFont('Tahoma','',10.5);
                $this->cell(55,0,'',0,0,'C',0); 
                $this->cell(55,0,'Nomor :               /UN37.1.5/TU/2016',0,1,'L',0);

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
 
    function Content($dosen,$get_data,$penguji,$pembimbing)
    {
        
        $this->Ln(3);
        //$this->write(5,'Dekan Fakultas Teknik Universitas Negeri Semarang memberi tugas kepada Saudara yang namanya tersebut di bawah ini sebagai Penguji Seminar Proposal Skripsi Mahasiswa Prodi '.' MENYUSUL '.'Fakultas Teknik Universitas Negeri Semarang. Adapun nama-namanya sebagai berikut:','FJ');
        $x=$this->GetX();
        $y=$this->GetY();
        //Print the text
        foreach($get_data as $data) {
        $this->MultiCell(173,4.5,'Dekan Fakultas Teknik Universitas Negeri Semarang memberi tugas kepada Saudara yang namanya tersebut di bawah ini sebagai Penguji Seminar Proposal Skripsi Mahasiswa Prodi '.$data->jenjang.' '.$data->nama_prodi.' Jurusan '.$data->nama_jurusan.' Fakultas Teknik Universitas Negeri Semarang. Adapun nama-namanya sebagai berikut:',0,'J');
        }
        //Put the position to the right of the cell
        //$this->SetXY($x+10,$y);



        $this->Ln(5);
        //$this->cell(10,6,'No.',1,0,'C',1);
        //$this->cell(100,6,'Nama / NIP',1,0,'C',1);
        //$this->cell(40,6,'Pangkat / Golru',1,0,'C',1);
        //$this->cell(50,6,'Tugas',1,1,'C',1);
        $x=$this->GetX();
        $y=$this->GetY();
        //Print the text
        $this->MultiCell(10,4.5,'No',1,'C');
        //Put the position to the right of the cell
        $this->SetXY($x+10,$y);
        //ulang
        $x=$this->GetX();
        $y=$this->GetY();
        //Print the text
        $this->MultiCell(70,4.5,'Nama / NIP',1,'C');
        //Put the position to the right of the cell
        $this->SetXY($x+70,$y);
        //ulang
        $x=$this->GetX();
        $y=$this->GetY();
        //Print the text
        $this->MultiCell(51,4.5,'Pangkat / Golru',1,'C');
        //Put the position to the right of the cell
        $this->SetXY($x+51,$y);
        //ulang
        $x=$this->GetX();
        $y=$this->GetY();
        //Print the text
        $this->MultiCell(40,4.5,'Tugas',1,'C');
        //Put the position to the right of the cell
        $this->SetXY($x+40,$y);
        $this->Ln();
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
        $a = 1;
        $c = 1;
        $this->setFont('Tahoma','',10.5);
        $this->setFillColor(250,250,250);
        if(!empty($penguji)) {
            if($penguji == 'kosong')
                $a = '';
        }
        foreach($dosen as $ds) {
            foreach($get_data as $get) {
                if($ds->id_dosen == $get->penguji1) {
                    $x=$this->GetX();
                    $y=$this->GetY();
                    //Print the text
                    $this->MultiCell(10,4.5,$c,'LR','C');
                    //Put the position to the right of the cell
                    $this->SetXY($x+10,$y);
                    //ulang
                    $x=$this->GetX();
                    $y=$this->GetY();
                    //Print the text
                    $this->MultiCell(70,4.5,' '.$ds->nama,'R','L');
                    //Put the position to the right of the cell
                    $this->SetXY($x+70,$y);
                    //ulang
                    $x=$this->GetX();
                    $y=$this->GetY();
                    //Print the text
                    $this->MultiCell(51,4.5,' '.$ds->jabatan_golongan.', '.$ds->gol_ruang,'R','L');
                    //Put the position to the right of the cell
                    $this->SetXY($x+51,$y);
                    //ulang
                    $x=$this->GetX();
                    $y=$this->GetY();
                    //Print the text
                    $this->MultiCell(40,4.5,' Penguji '.$a,'R','L');
                    //Put the position to the right of the cell
                    $this->SetXY($x+40,$y);
                    $this->Ln();
                    //$this->cell(10,14,'1',0,0,'L',1);
                    //$this->cell(70,14,$ds->nama,0,0,'L',1);
                    //$this->cell(40,14,$ds->jabatan_golongan.' '.$ds->gol_ruang,0,0,'L',1);
                    //$this->cell(50,14,'Penguji',0,1,'L',1);
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
                    $this->MultiCell(70,4.5,' '.$ds->nip,'R','L');
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
                    if(!empty($penguji)) {
                        if($penguji == 'kosong')
                            $a = '';
                        else
                            $a++;
                    }
                    else
                        $a++;
                    $c++;
                }
            }
        }
        foreach($dosen as $ds) {
            foreach($get_data as $get) {
                if($ds->id_dosen == $get->penguji2) {
                    $x=$this->GetX();
                    $y=$this->GetY();
                    //Print the text
                    $this->MultiCell(10,4.5,$c,'LR','C');
                    //Put the position to the right of the cell
                    $this->SetXY($x+10,$y);
                    //ulang
                    $x=$this->GetX();
                    $y=$this->GetY();
                    //Print the text
                    $this->MultiCell(70,4.5,' '.$ds->nama,'R','L');
                    //Put the position to the right of the cell
                    $this->SetXY($x+70,$y);
                    //ulang
                    $x=$this->GetX();
                    $y=$this->GetY();
                    //Print the text
                    $this->MultiCell(51,4.5,' '.$ds->jabatan_golongan.', '.$ds->gol_ruang,'R','L');
                    //Put the position to the right of the cell
                    $this->SetXY($x+51,$y);
                    //ulang
                    $x=$this->GetX();
                    $y=$this->GetY();
                    //Print the text
                    $this->MultiCell(40,4.5,' Penguji '.$a,'R','L');
                    //Put the position to the right of the cell
                    $this->SetXY($x+40,$y);
                    $this->Ln();
                    //$this->cell(10,14,'1',0,0,'L',1);
                    //$this->cell(70,14,$ds->nama,0,0,'L',1);
                    //$this->cell(40,14,$ds->jabatan_golongan.' '.$ds->gol_ruang,0,0,'L',1);
                    //$this->cell(50,14,'Penguji',0,1,'L',1);
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
                    $this->MultiCell(70,4.5,' '.$ds->nip,'R','L');
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
                    if(!empty($penguji)) {
                        if($penguji == 'kosong')
                            $a = '';
                    }
                    $c++;
                }
            }
        }

        $b = 1;
        if(!empty($pembimbing)) {
            if($pembimbing == 'kosong')
                $b = '';
        }
        foreach($dosen as $ds) {
            foreach($get_data as $get) {
                if($ds->id_dosen == $get->pembimbing1) {
                    $x=$this->GetX();
                    $y=$this->GetY();
                    //Print the text
                    $this->MultiCell(10,4.5,$c,'LR','C');
                    //Put the position to the right of the cell
                    $this->SetXY($x+10,$y);
                    //ulang
                    $x=$this->GetX();
                    $y=$this->GetY();
                    //Print the text
                    $this->MultiCell(70,4.5,' '.$ds->nama,'R','L');
                    //Put the position to the right of the cell
                    $this->SetXY($x+70,$y);
                    //ulang
                    $x=$this->GetX();
                    $y=$this->GetY();
                    //Print the text
                    $this->MultiCell(51,4.5,' '.$ds->jabatan_golongan.', '.$ds->gol_ruang,'R','L');
                    //Put the position to the right of the cell
                    $this->SetXY($x+51,$y);
                    //ulang
                    $x=$this->GetX();
                    $y=$this->GetY();
                    //Print the text
                    $this->MultiCell(40,4.5,' Pembimbing '.$b,'R','L');
                    //Put the position to the right of the cell
                    $this->SetXY($x+40,$y);
                    $this->Ln();
                    //$this->cell(10,14,'1',0,0,'L',1);
                    //$this->cell(71,14,$ds->nama,0,0,'L',1);
                    //$this->cell(40,14,$ds->jabatan_golongan.' '.$ds->gol_ruang,0,0,'L',1);
                    //$this->cell(50,14,'Penguji',0,1,'L',1);
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
                    $this->MultiCell(70,4.5,' '.$ds->nip,'R','L');
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
                    if(!empty($pembimbing)) {
                        if($pembimbing == 'kosong')
                            $b = '';
                        else
                            $b++;
                    }
                    else
                        $b++;
                    $c++;
                }
            }
        }
        foreach($dosen as $ds) {
            foreach($get_data as $get) {
                if($ds->id_dosen == $get->pembimbing2) {
                    $x=$this->GetX();
                    $y=$this->GetY();
                    //Print the text
                    $this->MultiCell(10,4.5,$c,'LR','C');
                    //Put the position to the right of the cell
                    $this->SetXY($x+10,$y);
                    //ulang
                    $x=$this->GetX();
                    $y=$this->GetY();
                    //Print the text
                    $this->MultiCell(70,4.5,' '.$ds->nama,'R','L');
                    //Put the position to the right of the cell
                    $this->SetXY($x+70,$y);
                    //ulang
                    $x=$this->GetX();
                    $y=$this->GetY();
                    //Print the text
                    $this->MultiCell(51,4.5,' '.$ds->jabatan_golongan.', '.$ds->gol_ruang,'R','L');
                    //Put the position to the right of the cell
                    $this->SetXY($x+51,$y);
                    //ulang
                    $x=$this->GetX();
                    $y=$this->GetY();
                    //Print the text
                    $this->MultiCell(40,4.5,' Pembimbing '.$b,'R','L');
                    //Put the position to the right of the cell
                    $this->SetXY($x+40,$y);
                    $this->Ln();
                    //$this->cell(10,15,'3',1,0,'L',1);
                    //$this->cell(70,15,$ds->nama,1,0,'L',1);
                    //$this->cell(40,15,$ds->jabatan_golongan.' '.$ds->gol_ruang,1,0,'L',1);
                    //$this->cell(50,15,'Pembimbing 2',1,1,'L',1);
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
                    $this->MultiCell(70,4.5,' '.$ds->nip,'R','L');
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
            }
        }
        $x=$this->GetX();
        $y=$this->GetY();
        //Print the text
        $this->MultiCell(10,4.5,' ','LRB','C');
        //Put the position to the right of the cell
        $this->SetXY($x+10,$y);
        //ulang
        $x=$this->GetX();
        $y=$this->GetY();
        //Print the text
        $this->MultiCell(70,4.5,' '.' ','RB','L');
        //Put the position to the right of the cell
        $this->SetXY($x+70,$y);
        //ulang
        $x=$this->GetX();
        $y=$this->GetY();
        //Print the text
        $this->MultiCell(51,4.5,' '.' ','RB','L');
        //Put the position to the right of the cell
        $this->SetXY($x+51,$y);
        //ulang
        $x=$this->GetX();
        $y=$this->GetY();
        //Print the text
        $this->MultiCell(40,4.5,' ','RB','L');
        //Put the position to the right of the cell
        $this->SetXY($x+40,$y);
        $this->Ln(12);

        $x=$this->GetX();
        $y=$this->GetY();
        //Print the text
        $this->MultiCell(170,5,'untuk menguji mahasiswa :',0,'J');
        $this->Ln(5);

        foreach($get_data as $data) {
            $x=$this->GetX();
            $y=$this->GetY();
            //Print the text
            $this->MultiCell(20,4.5,'Nama',0,'L');
            //Put the position to the right of the cell
            $this->SetXY($x+20,$y);
            //ulang
            $x=$this->GetX();
            $y=$this->GetY();
            //Print the text
            $this->MultiCell(10,4.5,':',0,'L');
            //Put the position to the right of the cell
            $this->SetXY($x+10,$y);
            //ulang
            $x=$this->GetX();
            $y=$this->GetY();
            //Print the text
            $this->MultiCell(100,4.5,$data->nama_mahasiswa,0,'L');
            //Put the position to the right of the cell
            $this->SetXY($x+100,$y);
            $this->Ln();

            $x=$this->GetX();
            $y=$this->GetY();
            //Print the text
            $this->MultiCell(20,4.5,'NIM',0,'L');
            //Put the position to the right of the cell
            $this->SetXY($x+20,$y);
            //ulang
            $x=$this->GetX();
            $y=$this->GetY();
            //Print the text
            $this->MultiCell(10,4.5,':',0,'L');
            //Put the position to the right of the cell
            $this->SetXY($x+10,$y);
            //ulang
            $x=$this->GetX();
            $y=$this->GetY();
            //Print the text
            $this->MultiCell(100,4.5,$data->nim,0,'L');
            //Put the position to the right of the cell
            $this->SetXY($x+100,$y);
            $this->Ln();

            $x=$this->GetX();
            $y=$this->GetY();
            //Print the text
            $this->MultiCell(20,4.5,'Prodi',0,'L');
            //Put the position to the right of the cell
            $this->SetXY($x+20,$y);
            //ulang
            $x=$this->GetX();
            $y=$this->GetY();
            //Print the text
            $this->MultiCell(10,4.5,':',0,'L');
            //Put the position to the right of the cell
            $this->SetXY($x+10,$y);
            //ulang
            $x=$this->GetX();
            $y=$this->GetY();
            //Print the text
            $this->MultiCell(100,4.5,$data->jenjang.' '.$data->nama_prodi,0,'L');
            //Put the position to the right of the cell
            $this->SetXY($x+100,$y);
            $this->Ln();

            $x=$this->GetX();
            $y=$this->GetY();
            //Print the text
            $this->MultiCell(20,4.5,'Topik',0,'L');
            //Put the position to the right of the cell
            $this->SetXY($x+20,$y);
            //ulang
            $x=$this->GetX();
            $y=$this->GetY();
            //Print the text
            $this->MultiCell(10,4.5,':',0,'L');
            //Put the position to the right of the cell
            $this->SetXY($x+10,$y);
            //ulang
            $x=$this->GetX();
            $y=$this->GetY();
            //Print the text
            $this->MultiCell(140,4.5,strtoupper($data->topik),0,'J');
            //Put the position to the right of the cell
            //$this->SetXY($x+100,$y);
            $this->Ln(4); 

            $x=$this->GetX();
            $y=$this->GetY();
            //Print the text
            $this->MultiCell(20,4.5,'Waktu',0,'L');
            //Put the position to the right of the cell
            $this->SetXY($x+20,$y);
            //ulang
            $x=$this->GetX();
            $y=$this->GetY();
            //Print the text
            $this->MultiCell(10,4.5,':',0,'L');
            //Put the position to the right of the cell
            $this->SetXY($x+10,$y);
            //ulang
            $x=$this->GetX();
            $y=$this->GetY();
            //Print the text
            $this->MultiCell(140,4.5,$data->waktu,0,'J');
            //Put the position to the right of the cell
            $this->SetXY($x+100,$y);
            $this->Ln(); 

            $x=$this->GetX();
            $y=$this->GetY();
            //Print the text
            $this->MultiCell(20,4.5,'Jam',0,'L');
            //Put the position to the right of the cell
            $this->SetXY($x+20,$y);
            //ulang
            $x=$this->GetX();
            $y=$this->GetY();
            //Print the text
            $this->MultiCell(10,4.5,':',0,'L');
            //Put the position to the right of the cell
            $this->SetXY($x+10,$y);
            //ulang
            $x=$this->GetX();
            $y=$this->GetY();
            //Print the text
            $this->MultiCell(140,4.5,$data->jam,0,'J');
            //Put the position to the right of the cell
            $this->SetXY($x+100,$y);
            $this->Ln(); 

            $x=$this->GetX();
            $y=$this->GetY();
            //Print the text
            $this->MultiCell(20,4.5,'Tempat',0,'L');
            //Put the position to the right of the cell
            $this->SetXY($x+20,$y);
            //ulang
            $x=$this->GetX();
            $y=$this->GetY();
            //Print the text
            $this->MultiCell(10,4.5,':',0,'L');
            //Put the position to the right of the cell
            $this->SetXY($x+10,$y);
            //ulang
            $x=$this->GetX();
            $y=$this->GetY();
            //Print the text
            $this->MultiCell(140,4.5,$data->tempat,0,'J');
            //Put the position to the right of the cell
            $this->SetXY($x+100,$y);
            $this->Ln();

            $x=$this->GetX();
            $y=$this->GetY();
            //Print the text
            $this->MultiCell(20,4.5,'Pakaian',0,'L');
            //Put the position to the right of the cell
            $this->SetXY($x+20,$y);
            //ulang
            $x=$this->GetX();
            $y=$this->GetY();
            //Print the text
            $this->MultiCell(10,4.5,':',0,'L');
            //Put the position to the right of the cell
            $this->SetXY($x+10,$y);
            //ulang
            $x=$this->GetX();
            $y=$this->GetY();
            //Print the text
            $this->MultiCell(140,4.5,$data->pakaian,0,'J');
            //Put the position to the right of the cell
            //$this->SetXY($x+100,$y);
            $this->Ln(5);
            $this->MultiCell(140,4.5,'Demikian agar tugas dilaksanakan dengan sebaik-baiknya.',0,'J');
            $this->Ln(8);
        }

            $tgl = $data->tanggal_terbit;
            $tanggal = date('d',strtotime($tgl));
            if($tanggal == 1) $tanggal = 1;
            if($tanggal == 2) $tanggal = 2;            
            if($tanggal == 3) $tanggal = 3;            
            if($tanggal == 4) $tanggal = 4;            
            if($tanggal == 5) $tanggal = 5;            
            if($tanggal == 6) $tanggal = 6;            
            if($tanggal == 7) $tanggal = 7;            
            if($tanggal == 8) $tanggal = 8;            
            if($tanggal == 9) $tanggal = 9;
            
            $tahun = date('Y', strtotime($tgl));
            if(date('m',strtotime($data->tanggal_terbit)) == 1)
                $bulan = 'Januari';
            if(date('m',strtotime($data->tanggal_terbit)) == 2)
                $bulan = 'Februari';
            if(date('m',strtotime($data->tanggal_terbit)) == 3)
                $bulan = 'Maret';
            if(date('m',strtotime($data->tanggal_terbit)) == 4)
                $bulan = 'April';
            if(date('m',strtotime($data->tanggal_terbit)) == 5)
                $bulan = 'Mei';
            if(date('m',strtotime($data->tanggal_terbit)) == 6)
                $bulan = 'Juni';
            if(date('m',strtotime($data->tanggal_terbit)) == 7)
                $bulan = 'Juli';
            if(date('m',strtotime($data->tanggal_terbit)) == 8)
                $bulan = 'Agustus';
            if(date('m',strtotime($data->tanggal_terbit)) == 9)
                $bulan = 'September';
            if(date('m',strtotime($data->tanggal_terbit)) == 10)
                $bulan = 'Oktober';
            if(date('m',strtotime($data->tanggal_terbit)) == 11)
                $bulan = 'November';
            if(date('m',strtotime($data->tanggal_terbit)) == 12)
                $bulan = 'Desember';

            $this->cell(120,4,'',0,0,'C',0); 
            $this->cell(120,4,'Semarang, '.$tanggal.' '.$bulan.' '.$tahun,0,1,'L',0);
            $this->Ln(0.5);
            $this->cell(120,4,'',0,0,'C',0);
            $this->cell(120,4,'Dekan',0,1,'L',0);
            $this->Ln(14);
            $this->cell(120,4,'',0,0,'C',0);
            $this->cell(120,4,'Dr. Nur Qudus, M.T.',0,1,'L',0);
            $this->Ln(0.5);
            $x=$this->GetX();
            $y=$this->GetY();
            //Print the text
            $this->cell(26,4,'Tembusan :',0,1,'L',0);
            //Put the position to the right of the cell
            $this->SetXY($x+26,$y);
            $x=$this->GetX();
            $y=$this->GetY();
            //Print the text
            $this->cell(140.6,4,'NIP. 196911301994031001',0,1,'R',0);
            //Put the position to the right of the cell
            $this->SetXY($x+140.6,$y);
            $this->Ln();
            $x=$this->GetX();
            $y=$this->GetY();
            //Print the text
            $this->MultiCell(100,4.5,'1.    Wakil Dekan Bidang II',0,'L');
            //Put the position to the right of the cell
            $this->SetXY($x+100,$y);
            $this->Ln();
            $x=$this->GetX();
            $y=$this->GetY();
            //Print the text
            foreach($get_data as $data) {
                $this->MultiCell(100,4.5,'2.    Ketua Jurusan '.$data->singkatan,0,'L');
            }
            //Put the position to the right of the cell
            $this->SetXY($x+100,$y);
            $this->Ln();
            $x=$this->GetX();
            $y=$this->GetY();
            //Print the text
            $this->MultiCell(100,4.5,'3.    Kasubbag Keuangan',0,'L');
            //Put the position to the right of the cell
            $this->SetXY($x+100,$y);
            $this->Ln();
            $x=$this->GetX();
            $y=$this->GetY();
            //Print the text
            $this->MultiCell(100,4.5,'4.    Arsip',0,'L');
            //Put the position to the right of the cell
            $this->SetXY($x+100,$y);
            $this->Ln();
            $x=$this->GetX();
            $y=$this->GetY();
            //Print the text
            $this->MultiCell(100,4.5,'Fakultas Teknik UNNES',0,'L');
            //Put the position to the right of the cell
            $this->SetXY($x+100,$y);
    }
    function Footer()
    {
          
            /*$this->MultiCell(140,5,'Semarang, '.date('d m Y'),0,'J');
            $this->Ln();
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
$pdf->Content($dosen,$get_data,$penguji,$pembimbing);
$pdf->Output('I','pdf.pdf');
ob_end_flush();