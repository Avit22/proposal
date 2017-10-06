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
          
          <h1 class="text-center text-info">Revisi Proposal</h1> <br /><br />
       <?php echo form_open('wd1/revisi/tambah_revisi/',array('id' => 'tambah','name' => 'tambah', 'class' => 'form-horizontal')); ?>
       <?php echo validation_errors(); ?>

 <?php 
foreach($proposale as $proposal)
{ 
?>
        
<!-- Id PJK-->
        <div class="form-group">
          <label for="id_pjk" class="col-sm-2 control-label">Id PJK</label>
          <div class="col-sm-10">
            <?php 
           $data = array('name' => 'id_pjk', 'id' => 'id_pjk', 'class' => 'form-control', 'placeholder' => 'Id PJK','value'=>$proposal->id_user,'readonly'=>'true');
           echo form_input($data); ?>
          </div>
        </div>

<!-- Id Proposal-->
        <div class="form-group">
          <label for="id_proposal" class="col-sm-2 control-label">Id Proposal</label>
          <div class="col-sm-10">
            <?php 
           $data = array('name' => 'id_proposal', 'id' => 'id_proposal', 'class' => 'form-control', 'placeholder' => 'Id Proposal','value'=>$proposal->id_proposal,'readonly'=>'true');
           echo form_input($data); ?>
          </div>
        </div>        


<!-- Jenis Proposal-->
        <div class="form-group">
          <label for="jenis_proposal" class="col-sm-2 control-label">Jenis Proposal</label>
          <div class="col-sm-10">
            <?php 
           $data = array('name' => 'jenis_proposal', 'id' => 'jenis_proposal', 'class' => 'form-control', 'placeholder' => 'Nama PJK','value'=>$proposal->urusan,'readonly'=>'true');
           echo form_input($data); ?>
          </div>
        </div>

<!-- Nama PJK-->
        <div class="form-group">
          <label for="nama" class="col-sm-2 control-label">Nama PJK</label>
          <div class="col-sm-10">
            <?php 
           $data = array('name' => 'nama_pjk', 'id' => 'nama_pjk', 'class' => 'form-control', 'placeholder' => 'Nama PJK','value'=>$proposal->nama_pjk,'readonly'=>'true');
           echo form_input($data); ?>
          </div>
        </div>

    
        <!-- Judul -->
        <div class="form-group">
          <label for="judul" class="col-sm-2 control-label">Judul</label>
          <div class="col-sm-10">
            <?php 
           $data = array('name' => 'judul', 'id' => 'judul', 'class' => 'form-control', 'placeholder' => 'Masukkan Judul Proposal','rows' => '2','value'=>$proposal->judul,'readonly'=>'true');
           echo form_textarea($data); ?>
          </div>
        </div>

        <!-- Pendahuluan -->
        <div class="form-group">
          <label for="pendahuluan" class="col-sm-2 control-label">Pendahuluan</label>
          <div class="col-sm-10">
            <?php 
           $data = array('name' => 'pendahuluan', 'id' => 'pendahuluan', 'class' => 'form-control', 'placeholder' => 'Masukkan Pendahuluan','value'=>$proposal->pendahuluan,'readonly'=>'true');
           echo form_textarea($data); ?>
          </div>
        </div>

        <!-- Dasar Hukum -->
        <div class="form-group">
          <label for="dasar_hukum" class="col-sm-2 control-label">Dasar Hukum</label>
          <div class="col-sm-10">
            <?php 
           $data = array('name' => 'dasar_hukum', 'id' => 'dasar_hukum', 'class' => 'form-control', 'placeholder' => 'Masukkan Dasar Hukum','value'=>$proposal->dasar_hukum,'readonly'=>'true');
           echo form_textarea($data); ?>
          </div>
        </div>

        <!-- RAB -->
        <div class="form-group">
          <label for="rab" class="col-sm-2 control-label">RAB</label>
          <div class="col-sm-10">
            <?php 
           $data = array('name' => 'rab', 'id' => 'rab', 'class' => 'form-control', 'placeholder' => 'Masukkan RAB','value'=>$proposal->rab,'readonly'=>'true');
           echo form_textarea($data); ?>
          </div>
        </div>

        <!-- Keluaran -->
        <div class="form-group">
          <label for="keluaran" class="col-sm-2 control-label">Keluaran</label>
          <div class="col-sm-10">
            <?php 
           $data = array('name' => 'keluaran', 'id' => 'keluaran', 'class' => 'form-control', 'placeholder' => 'Masukkan keluaran','value'=>$proposal->keluaran,'readonly'=>'true');
          echo form_textarea($data); ?>
          </div>
        </div>

        <!-- Penutup -->
        <div class="form-group">
          <label for="penutup" class="col-sm-2 control-label">Penutup</label>
          <div class="col-sm-10">
            <?php 
           $data = array('name' => 'penutup', 'id' => 'penutup', 'class' => 'form-control', 'placeholder' => 'Masukkan Penutup','value'=>$proposal->penutup,'readonly'=>'true');
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
