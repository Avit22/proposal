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
          
          <h1 class="text-center text-info">Input Laporan</h1> <br /><br />
       <?php echo form_open_multipart('kaprodi_tm/input_laporan/tambah_proses/',array('id' => 'tambah','name' => 'tambah', 'class' => 'form-horizontal')); ?>
       <?php echo validation_errors(); ?>

 <?php 
foreach($proposale as $proposal)
{ 
?>
        
<input type="hidden" name="id_proposalnya" value="<?php echo $proposal->id_proposal; ?>">

<!-- Judul -->
        <div class="form-group">
          <label for="judul" class="col-sm-2 control-label">Judul</label>
          <div class="col-sm-10">
            <?php 
           $data = array('name' => 'judul', 'id' => 'judul', 'class' => 'form-control', 'placeholder' => 'Masukkan Judul Proposal','rows' => '2','value'=>$proposal->judul);
           echo form_textarea($data); ?>
          </div>
        </div>

<!-- Nama PJK-->
        <div class="form-group">
          <label for="nama" class="col-sm-2 control-label">Nama PJK</label>
          <div class="col-sm-10">
            <?php 
           $data = array('name' => 'nama_pjk', 'id' => 'nama_pjk', 'class' => 'form-control', 'placeholder' => 'Nama PJK','value'=>$proposal->nama_pjk);
           echo form_input($data); ?>
          </div>
        </div>

           
        

        <!-- Penggunaan Dana -->
        <div class="form-group">
          <label for="nominal" class="col-sm-2 control-label">Penggunaan Dana</label>
          <div class="col-sm-10">
            <?php 
           $data = array('name' => 'nominal', 'id' => 'nominal', 'class' => 'form-control',  'placeholder' => 'Masukkan Penggunaan Dana');
          echo form_input($data); ?>
          </div>
        </div>

         <!-- file upload-->
        <div class="form-group">
        <label for="image" class="col-sm-2 control-label">Upload Laporan Kegiatan</label>
        <div class="col-sm-10">
                <div class="row">
                    <div class="col-md-12">
                        <input type="file" name="filename" size="60" />
                        <span class="text-danger"><?php if (isset($error)) { echo $error; } ?></span>
                    </div>
                </div>
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
