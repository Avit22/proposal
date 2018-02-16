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
          
          <h1 class="text-center text-info">Upload Proposal</h1> <br /><br />
       <?php echo form_open_multipart('pjk/upload/tambah_proses/',array('id' => 'tambah','name' => 'tambah', 'class' => 'form-horizontal')); ?>
       <?php echo validation_errors(); ?>

 <?php 
//foreach($proposale as $proposal)
{ 
?>
     

<!-- Jenis Proposal -->
        <div class="form-group">
          <label for="jenis_proposal" class="col-sm-2 control-label">Jenis Proposal</label>
          <div class="col-sm-6">
          <select class="form-control" name="jenis_proposal">
            <option value="">--- Pilih Jenis Proposal ---</option>
           <?php 
           foreach($data_wd as $data)
            { 
                echo '<option value="'.$data->id_wd.'">'.$data->urusan.'</option>';
            } ?>
            </select>
          </div>
        </div>

<!-- Nama PJK-->
        <div class="form-group">
          <label for="nama" class="col-sm-2 control-label">Nama PJK</label>
          <div class="col-sm-10">
            <?php 
           $data = array('name' => 'nama_pjk', 'id' => 'nama_pjk', 'class' => 'form-control', 'placeholder' => 'Nama PJK');
           echo form_input($data); ?>
          </div>
        </div>

<!-- Email PJK-->
        <div class="form-group">
          <label for="email_pjk" class="col-sm-2 control-label">Email PJK</label>
          <div class="col-sm-10">
            <?php 
           $data = array('name' => 'email_pjk', 'id' => 'email_pjk', 'class' => 'form-control', 'placeholder' => 'Email PJK');
           echo form_input($data); ?>
          </div>
        </div>

<!-- Jurusan -->
        <div class="form-group">
          <label for="jurusan" class="col-sm-2 control-label">Jurusan</label>
          <div class="col-sm-6">
          <select class="form-control" name="jurusan">
            <option value="">--- Pilih Jurusan ---</option>
           <?php 
           foreach($data_jurusan as $data)
            { 
                echo '<option value="'.$data->id_jurusan.'">'.$data->nama_jurusan.'</option>';
            } ?>
            </select>
          </div>
        </div>

<!-- Program Studi -->
        <div class="form-group">
          <label for="prodi" class="col-sm-2 control-label">Program studi</label>
          <div class="col-sm-6">
          <select class="form-control" name="prodi">
            <option value="">--- Pilih Program Studi ---</option>
           <?php 
           foreach($data_prodi as $data)
            { 
                echo '<option value="'.$data->id_prodi.'">'.$data->nama_prodi.'</option>';
            } ?>
            </select>
          </div>
        </div>

<!-- Judul -->
        <div class="form-group">
          <label for="judul" class="col-sm-2 control-label">Judul</label>
          <div class="col-sm-10">
            <?php 
           $data = array('name' => 'judul', 'id' => 'judul', 'class' => 'form-control', 'placeholder' => 'Masukkan Judul Proposal','rows' => '2');
           echo form_textarea($data); ?>
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
