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
          
          <h1 class="text-center text-info">PENGESAHAN VALIDASI PROPOSAL</h1> <br /><br />
 <?php 
foreach($proposale as $proposal) { ?> 
<?php echo form_open('wd2/revisi/update_review/'.$proposal->id_proposal,array('id' => 'tambah','name' => 'tambah', 'class' => 'form-horizontal')); ?>
       <?php echo validation_errors(); ?>

        <!-- Validasi Proposal -->
        <div class="form-group">
          <label for="validasiproposal" class="col-sm-2 control-label">Validasi Proposal</label>
          <div class="col-sm-6">
          <select class="form-control" name="validasi_proposal">
            <option value="">--- Validasi Proposal ---</option>
           <?php 
                echo '<option value="ON REVIEW">ON REVIEW</option>';
                echo '<option value="TIDAK DISETUJUI">TIDAK DISETUJUI</option>';
                echo '<option value="DISETUJUI">DISETUJUI</option>';
            ?>
            </select>
          </div>
        </div>

                 <!-- Alasan Validasi -->
        <div class="form-group">
          <label for="alasan" class="col-sm-2 control-label"> Pemberi Validasi</label>
          <div class="col-sm-10">
            <?php 
           $tingkatnya =$this->session->userdata('keterangan_tingkatan');
           $data = array('name' => 'alasan', 'id' => 'alasan', 'class' => 'form-control', 'placeholder' => 'Masukkan Alasan Persetujuan/Penolakan Proposal','rows' => '2', 'readonly'=>'true', 'value'=>$tingkatnya);
           echo form_textarea($data); ?>
          </div>
        </div>

        

<!-- Nama PJK-->
        <div class="form-group">
          <label for="nama" class="col-sm-2 control-label">Nama PJK</label>
          <div class="col-sm-10">
            <?php 
           $data = array('name' => 'nama_pjk', 'id' => 'nama_pjk', 'class' => 'form-control', 'readonly'=>'true', 'placeholder' => 'Nama PJK','value'=>$proposal->nama_pjk);
           echo form_input($data); ?>
          </div>
        </div>

        <!-- Judul -->
        <div class="form-group">
          <label for="judul" class="col-sm-2 control-label">Judul</label>
          <div class="col-sm-10">
            <?php 
           $data = array('name' => 'judul', 'id' => 'judul', 'class' => 'form-control', 'readonly'=>'true', 'placeholder' => 'Masukkan Judul Proposal','rows' => '2','value'=>$proposal->judul);
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
