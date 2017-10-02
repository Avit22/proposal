<!DOCTYPE html>
<html lang="en"> 

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker({ dateFormat: 'yy-mm-dd' });    
  });
  </script>
  
  <?php $this->view('template/head'); ?>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        
        <?php $this->view('template/sidebar'); ?>

        <?php $this->view('template/top'); ?>
 
        <!-- page content -->
        <div class="right_col" role="main">


         <?php 
foreach($proposale as $proposal)
{ 
?>
          
          <h1 class="text-center text-info">Edit Proposal</h1> <br /><br />
       <?php echo form_open('admin/input/update_proses/'.$proposal->id_proposal,array('id' => 'tambah','name' => 'tambah', 'class' => 'form-horizontal')); ?>
       <?php echo validation_errors(); ?>


        <!-- Jenis Proposal -->
        <div class="form-group">
          <label for="jenis" class="col-sm-2 control-label">Jenis Proposal</label>
          <div class="col-sm-6">
          <select class="form-control" name="jenis_proposal">
            <option value="">--- Pilih Jenis Proposal ---</option>
           <?php 
           $id_jenis_proposal = $proposal->jenis_proposal;
           $status='selected';
           foreach($data_wd as $data)
            {     
                  if($data->id_wd==$id_jenis_proposal){
                      echo '<option '.$status.' value="'.$data->id_wd.'">'.$data->urusan.'</option>';
                  }else {
                      echo '<option value="'.$data->id_wd.'">'.$data->urusan.'</option>';
                  }
            } ?>
            </select>
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

<!-- Jurusan -->
        <div class="form-group">
          <label for="jurusan" class="col-sm-2 control-label">Jurusan</label>
          <div class="col-sm-6">
          <select class="form-control" name="jurusan">
            <option value="">--- Pilih Jurusan ---</option>
           <?php 
           $id_jurusan = $proposal->jurusan;
           $status='selected';
           foreach($data_jurusan as $data)
            {     
                  if($data->id_jurusan==$id_jurusan){
                      echo '<option '.$status.' value="'.$data->id_jurusan.'">'.$data->nama_jurusan.'</option>';
                  }else {
                      echo '<option value="'.$data->id_jurusan.'">'.$data->nama_jurusan.'</option>';
                  }
            } ?>
            </select>
          </div>
        </div>

<!-- Prodi -->
        <div class="form-group">
          <label for="prodi" class="col-sm-2 control-label">Program Studi</label>
          <div class="col-sm-6">
          <select class="form-control" name="prodi">
            <option value="">--- Pilih Program Studi ---</option>
           <?php 
           $id_prodi = $proposal->prodi;
           $status='selected';
           foreach($data_prodi as $data)
            {     
                  if($data->id_prodi==$id_prodi){
                      echo '<option '.$status.' value="'.$data->id_prodi.'">'.$data->nama_prodi.'</option>';
                  }else {
                      echo '<option value="'.$data->id_prodi.'">'.$data->nama_prodi.'</option>';
                  }
            } ?>
            </select>
          </div>
        </div>
        
        <!-- Judul -->
        <div class="form-group">
          <label for="judul" class="col-sm-2 control-label">Judul</label>
          <div class="col-sm-10">
            <?php 
           $data = array('name' => 'judul', 'id' => 'judul', 'class' => 'form-control', 'placeholder' => 'Masukkan Judul Proposal','rows' => '2','value'=>$proposal->judul);
           echo form_textarea($data); ?>
          </div>
        </div>

        <!-- Pendahuluan -->
        <div class="form-group">
          <label for="pendahuluan" class="col-sm-2 control-label">Pendahuluan</label>
          <div class="col-sm-10">
            <?php 
           $data = array('name' => 'pendahuluan', 'id' => 'pendahuluan', 'class' => 'form-control', 'placeholder' => 'Masukkan Pendahuluan','value'=>$proposal->pendahuluan);
           echo form_textarea($data); ?>
          </div>
        </div>

        <!-- Dasar Hukum -->
        <div class="form-group">
          <label for="dasar_hukum" class="col-sm-2 control-label">Dasar Hukum</label>
          <div class="col-sm-10">
            <?php 
           $data = array('name' => 'dasar_hukum', 'id' => 'tujuan', 'class' => 'form-control', 'placeholder' => 'Masukkan Tujuan','value'=>$proposal->dasar_hukum);
           echo form_textarea($data); ?>
          </div>
        </div>

        <!-- RAB -->
        <div class="form-group">
          <label for="rab" class="col-sm-2 control-label">RAB</label>
          <div class="col-sm-10">
            <?php 
           $data = array('name' => 'rab', 'id' => 'rab', 'class' => 'form-control', 'placeholder' => 'Masukkan RAB','value'=>$proposal->rab);
           echo form_textarea($data); ?>
          </div>
        </div>

        <!-- Tanggal Pelaksanaan -->
        <div class="form-group">
          <label for="tgl_pelaksanaan" class="col-sm-2 control-label">Tanggal Pelaksanaan</label>
          
          <div class="col-sm-10">
          <input type="text" id="datepicker" name='tgl_pelaksanaan' placeholder="   Masukkan Tanggal" value = "<?php echo $proposal->tgl_pelaksanaan; ?>">
          </div>         
        </div>
        
        <!-- Tempat -->
        <div class="form-group">
          <label for="tempat" class="col-sm-2 control-label">Tempat Pelaksanaan</label>
          <div class="col-sm-10">
            <?php 
           $data = array('name' => 'tempat', 'id' => 'tempat', 'class' => 'form-control', 'placeholder' => 'Masukkan Tempat Pelaksanaan','rows' => '2','value'=>$proposal->tempat);
           echo form_textarea($data); ?>
          </div>
        </div>

        <!-- Keluaran -->
        <div class="form-group">
          <label for="keluaran" class="col-sm-2 control-label">Keluaran</label>
          <div class="col-sm-10">
            <?php 
           $data = array('name' => 'keluaran', 'id' => 'keluaran', 'class' => 'form-control', 'placeholder' => 'Masukkan RAB','value'=>$proposal->keluaran);
           echo form_textarea($data); ?>
          </div>
        </div>

        <!-- Penutup -->
        <div class="form-group">
          <label for="penutup" class="col-sm-2 control-label">Penutup</label>
          <div class="col-sm-10">
            <?php 
           $data = array('name' => 'penutup', 'id' => 'penutup', 'class' => 'form-control', 'placeholder' => 'Masukkan Penutup','value'=>$proposal->penutup);
          echo form_textarea($data); ?>
          </div>
        </div>


        <p style="color:red;"><strong>DI ISI BILA MELAKUKAN REVISI PROPOSAL UNTUK CATATAN KOREKTOR</strong></p>

        <!-- Catatan Revisi -->
        <div class="form-group">
          <label for="revisi" class="col-sm-2 control-label">Catatan Revisi</label>
          <div class="col-sm-10">
            <?php 
           $data = array('name' => 'revisi', 'id' => 'revisi', 'class' => 'form-control', 'placeholder' => 'Masukkan Catatan Revisi','rows' => '2');
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
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>