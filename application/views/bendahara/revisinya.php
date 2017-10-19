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
          
          <h1 class="text-center text-info">Revisi Laporan Kegiatan</h1> <br /><br />
       <?php echo form_open('Bendahara/laporan_terkirim/tambah_revisi/',array('id' => 'tambah','name' => 'tambah', 'class' => 'form-horizontal')); ?>
       <?php echo validation_errors(); ?>

 <?php 
foreach($laporane as $laporan)
{ 
?>
        
<!-- Id PJK-->
        <div class="form-group">
          <label for="id_pjk" class="col-sm-2 control-label">Id PJK</label>
          <div class="col-sm-10">
            <?php 
           $data = array('name' => 'id_pjk', 'id' => 'id_pjk', 'class' => 'form-control', 'placeholder' => 'Id PJK','value'=>$laporan->id_user,'readonly'=>'true');
           echo form_input($data); ?>
          </div>
        </div>

<!-- Id Laporan-->
        <div class="form-group">
          <label for="id_laporan" class="col-sm-2 control-label">Id Laporan</label>
          <div class="col-sm-10">
            <?php 
           $data = array('name' => 'id_laporan', 'id' => 'id_laporan', 'class' => 'form-control', 'placeholder' => 'Id Laporan','value'=>$laporan->id_laporan,'readonly'=>'true');
           echo form_input($data); ?>
          </div>
        </div>        


<!-- Nama PJK-->
        <div class="form-group">
          <label for="nama" class="col-sm-2 control-label">Nama PJK</label>
          <div class="col-sm-10">
            <?php 
           $data = array('name' => 'nama_pjk', 'id' => 'nama_pjk', 'class' => 'form-control', 'placeholder' => 'Nama PJK','value'=>$laporan->nama_pjk,'readonly'=>'true');
           echo form_input($data); ?>
          </div>
        </div>

    
        <!-- Judul -->
        <div class="form-group">
          <label for="judul" class="col-sm-2 control-label">Judul</label>
          <div class="col-sm-10">
            <?php 
           $data = array('name' => 'judul', 'id' => 'judul', 'class' => 'form-control', 'placeholder' => 'Masukkan Judul Laporan','rows' => '2','value'=>$laporan->judul,'readonly'=>'true');
           echo form_textarea($data); ?>
          </div>
        </div>

        

        <!-- Catatan Revisi -->
        <div class="form-group">
          <label for="revisi" class="col-sm-2 control-label">Catatan Revisi</label>
          <div class="col-sm-10">
            <?php 
           $data = array('name' => 'revisi1', 'id' => 'revisi1', 'class' => 'form-control', 'placeholder' => 'Masukkan Catatan Revisi','rows' => '2');
           echo form_textarea($data); ?>
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary">Kirim</button>
            <button type="reset" class="btn btn-warning">Reset</button>
          </div>
        </div>
       <?php echo form_close(); ?>

        </div>
        <!-- /page content -->
<?php
}
?>

        <?php $this->view('template/footer'); ?>
      </div>
    </div>
    
    <?php $this->view('template/js'); ?>
</body>
</html>
