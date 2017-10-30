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
           <?php 
foreach($laporane as $laporan)
{ 
?>
          <h1 class="text-center text-info">Edit Laporan</h1> <br /><br />
       <?php echo form_open_multipart('kajur_tk/input_laporan/update_proses/'.$laporan->id_laporan,array('id' => 'tambah','name' => 'tambah', 'class' => 'form-horizontal')); ?>
       <?php echo validation_errors(); ?>


        
<input type="hidden" name="id_proposalnya" value="<?php echo $laporan->id_laporan; ?>">

<!-- Judul -->
        <div class="form-group">
          <label for="judul" class="col-sm-2 control-label">Judul</label>
          <div class="col-sm-10">
            <?php 
           $data = array('name' => 'judul', 'id' => 'judul', 'class' => 'form-control', 'placeholder' => 'Masukkan Judul Proposal','rows' => '2','value'=>$laporan->judul);
           echo form_textarea($data); ?>
          </div>
        </div>

<!-- Nama PJK-->
        <div class="form-group">
          <label for="nama" class="col-sm-2 control-label">Nama PJK</label>
          <div class="col-sm-10">
            <?php 
           $data = array('name' => 'nama_pjk', 'id' => 'nama_pjk', 'class' => 'form-control', 'placeholder' => 'Nama PJK','value'=>$laporan->nama_pjk);
           echo form_input($data); ?>
          </div>
        </div>

           
        <!-- Rincian Kegiatan -->
        <div class="form-group">
          <label for="rincian_kegiatan" class="col-sm-2 control-label">Rincian Kegiatan</label>
          <div class="col-sm-10">
            <?php 
           $data = array('name' => 'rincian_kegiatan', 'id' => 'rincian_kegiatan', 'class' => 'form-control', 'placeholder' => 'Masukkan Rincian Kegiatan','value'=>$laporan->rincian_kegiatan);
           echo form_textarea($data); ?>
          </div>
        </div>

        <!-- Rincian Biaya -->
        <div class="form-group">
          <label for="rincian_biaya" class="col-sm-2 control-label">Rincian Biaya</label>
          <div class="col-sm-10">
            <?php 
           $data = array('name' => 'rincian_biaya', 'id' => 'rincian_biaya', 'class' => 'form-control', 'placeholder' => 'Masukkan Rincian Biaya','value'=>$laporan->rincian_biaya);
           echo form_textarea($data); ?>
          </div>
        </div>

        <!-- Catatan Revisi -->
        <div class="form-group">
          <label for="catatan_revisi" class="col-sm-2 control-label">Catatan Revisi</label>
          <div class="col-sm-10">
            <?php 
           $data = array('name' => 'catatan_revisi', 'id' => 'catatan_revisi', 'class' => 'form-control', 'placeholder' => 'Masukkan Rincian Biaya',);
           echo form_textarea($data); ?>
          </div>
        </div>  

         <!-- file upload-->
        <div class="form-group">
        <label for="image" class="col-sm-2 control-label">Dokumentasi</label>
        <div class="col-sm-10">
                <div class="row">
                    <div class="col-md-12">
                        <input type="file" name="filename" size="60" />
                        <span class="text-danger"><?php if (isset($error)) { echo $error; } ?></span>
                    </div>
                </div>
            </div>
            </div>

      <!-- file upload-->
        <div class="form-group">
        <label for="image" class="col-sm-2 control-label">Bukti Penggunaan Biaya</label>
        <div class="col-sm-10">
                <div class="row">
                    <div class="col-md-12">
                        <input type="file" name="filename1" size="60" />
                        <span class="text-danger"><?php if (isset($error)) { echo $error; } ?></span>
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
