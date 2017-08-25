<!DOCTYPE html>
<html lang="en"> 
  
  <?php $this->view('template/head'); ?>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        
        <?php $this->view('template/sidebar'); ?>

        <?php $this->view('template/top'); ?>

        <!-- page content -->
        <div class="right_col" role="main">
          
          <h1 class="text-center text-info">Edit KTM</h1> <br />
          <?php foreach($data_ktm as $ktm) { ?>
       <?php echo form_open('simft/ktm/edit_proses/'.$ktm->id_ktm,array('id' => 'tambah','name' => 'tambah', 'class' => 'form-horizontal')); ?>
       <?php echo validation_errors(); ?>
       <br />
       <p class="text-danger" style="font-size:20px;"><?php echo $this->session->flashdata('pesan'); ?></p>

        <!-- Penguji I-->
        <div class="form-group">
          <label for="penguji1" class="col-sm-2 control-label">Saya Ingin Membuat</label>
         <div class="col-sm-6">
            <select class="form-control" name="jenis" >
                <option value="ktm">Formulir Pembuatan KTM</option>
            </select>
          </div>
        </div>

        <!-- Waktu -->
        <div class="form-group">
          <label for="nama" class="col-sm-2 control-label">Nama</label>
          <div class="col-sm-10">
            <?php 
           $data = array('name' => 'nama', 'id' => 'nama', 'class' => 'form-control', 'placeholder' => 'Nama','value' => $ktm->nama);
           echo form_input($data); ?>
          </div>
        </div>

        <!-- Jam -->
        <div class="form-group">
          <label for="nim" class="col-sm-2 control-label">NIM</label>
          <div class="col-sm-10">
            <?php 
           $data = array('name' => 'nim', 'id' => 'nim', 'class' => 'form-control', 'placeholder' => 'NIM','value' => $ktm->nim);
           echo form_input($data); ?>
          </div>
        </div>

        <!-- Penguji I-->
        <div class="form-group">
          <label for="jurusan" class="col-sm-2 control-label">Jurusan</label>
         <div class="col-sm-6">
            <select class="form-control" name="id_jurusan" >
                 <option value="">-- Pilih Jurusan --</option>
                  <?php foreach($data_jurusan as $jurusan) { ?>
                  <?php if($jurusan->id_jurusan == $ktm->id_jurusan) { ?>
                    <option value="<?php echo $jurusan->id_jurusan; ?>" selected><?php echo $jurusan->nama_jurusan; ?></option>
                  <?php } else { ?>
                  <option value="<?php echo $jurusan->id_jurusan; ?>"><?php echo $jurusan->nama_jurusan; ?></option>
                  <?php } } ?>
            </select>
          </div>
        </div>

        <!-- Penguji I-->
        <div class="form-group">
          <label for="prodi" class="col-sm-2 control-label">Prodi</label>
         <div class="col-sm-6">
            <select class="form-control" name="id_prodi" >
                 <option value="">-- Pilih Prodi --</option>
                  <?php foreach($data_prodi as $prodi) { ?>
                  <?php if($prodi->id_prodi == $ktm->id_prodi) { ?>
                   <option value="<?php echo $prodi->id_prodi; ?>" selected><?php echo $prodi->nama_prodi; ?></option>
                  <?php } else { ?>
                    <option value="<?php echo $prodi->id_prodi; ?>"><?php echo $prodi->nama_prodi; ?></option>
                  <?php } } ?>
            </select>
          </div>
        </div>

         <!-- Penguji I-->
        <div class="form-group">
          <label for="angkaktan" class="col-sm-2 control-label">Angkatan</label>
         <div class="col-sm-6">
            <select class="form-control" name="angkatan" >
                <option value="">-- Pilih Tahun Angkatan --</option>
                <?php for($i = 2007; $i < 2017; $i++) { ?>
                    <?php if($i == $ktm->angkatan) { ?>
                    <option value="<?=$i;?>" selected><?=$i;?></option>
                    <?php } else { ?>
                    <option value="<?=$i;?>"><?=$i;?></option>
                <?php } } ?>
            </select>
          </div>
        </div>

        <!-- Tempat -->
        <div class="form-group">
          <label for="nope" class="col-sm-2 control-label">No. HP</label>
          <div class="col-sm-10">
            <?php 
           $data = array('name' => 'nope', 'id' => 'nope', 'class' => 'form-control', 'placeholder' => 'No. HP','value' => $ktm->nope);
           echo form_input($data); ?>
          </div>
        </div>
        
        <!-- Pakaian -->
        <div class="form-group">
          <label for="nama_ortu" class="col-sm-2 control-label">Nama Ortu</label>
          <div class="col-sm-10">
            <?php 
           $data = array('name' => 'nama_ortu', 'id' => 'nama_ortu', 'class' => 'form-control', 'placeholder' => 'Nama Orang Tua','value' => $ktm->nama_ortu);
           echo form_input($data); ?>
          </div>
        </div>

        <!-- Pakaian -->
        <div class="form-group">
          <label for="nip" class="col-sm-2 control-label">NIP/NRP/NoPeg</label>
          <div class="col-sm-10">
            <?php 
           $data = array('name' => 'nip', 'id' => 'nip', 'class' => 'form-control', 'placeholder' => 'NIP/NRP/NoPeg','value' => $ktm->nip);
           echo form_input($data); ?>
          </div>
        </div>

        <!-- Pakaian -->
        <div class="form-group">
          <label for="pangkat_golru" class="col-sm-2 control-label">Pangakt/Golru</label>
          <div class="col-sm-10">
            <?php 
           $data = array('name' => 'pangkat_golru', 'id' => 'pangkat_golru', 'class' => 'form-control', 'placeholder' => 'Pangkat / Golru','value' => $ktm->pangkat_golru);
           echo form_input($data); ?>
          </div>
        </div>

        <!-- Pakaian -->
        <div class="form-group">
          <label for="instansi_kantor" class="col-sm-2 control-label">Instansi / Kantor</label>
          <div class="col-sm-10">
            <?php 
           $data = array('name' => 'instansi_kantor', 'id' => 'instansi_kantor', 'class' => 'form-control', 'placeholder' => 'Instansi/Kantor','value' => $ktm->instansi_kantor);
           echo form_input($data); ?>
          </div>
        </div>

        <!-- Pakaian -->
        <div class="form-group">
          <label for="keperluan" class="col-sm-2 control-label">Guna Keperluan</label>
          <div class="col-sm-10">
            <?php 
           $data = array('name' => 'keperluan', 'id' => 'keperluan', 'class' => 'form-control', 'placeholder' => 'Guna Keperluan','value' => $ktm->keperluan);
           echo form_input($data); ?>
          </div>
        </div>

        <!-- Pakaian -->
        <div class="form-group">
          <label for="tgl" class="col-sm-2 control-label">Tanggal Input</label>
          <div class="col-sm-10">
            <?php 
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

           $data = array('name' => 'tgl', 'id' => 'tgl', 'class' => 'form-control', 'placeholder' => 'Tanggal', 'value' => $tanggal.' '.$bulan.' '.$tahun, 'readonly' =>"true");
           echo form_input($data); ?>
          </div>
        </div>

        <br />
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" name="terkirim" class="btn btn-primary" value="1">Kirim</button>
            <button type="reset" class="btn btn-warning">Reset</button>
          </div>
        </div>
       <?php echo form_close(); ?>
       <?php } ?>
        </div>
        <!-- /page content -->

        <?php $this->view('template/footer'); ?>
      </div>
    </div>
    
    <?php $this->view('template/js'); ?>
</body>
</html>
