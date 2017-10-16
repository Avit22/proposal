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
          <div class="text-center" style="font-size:30px;">Input Panjar Kerja</div><br />
<?php echo form_open('bendahara/validasi/update_review/',array('id' => 'tambah','name' => 'tambah', 'class' => 'form-horizontal')); ?>
       <?php echo validation_errors(); ?>     

<!-- Nama PJK-->
        <div class="form-group">
          <label for="nama" class="col-sm-4 control-label">Nominal Total</label>
          <div class="col-sm-4">
            <?php 
           $data = array('name' => 'nama_pjk', 'id' => 'nama_pjk', 'class' => 'form-control', 'readonly'=>'true', 'placeholder' => 'Nama PJK');
           echo form_input($data); ?>
          </div>
        </div>

        <!-- Judul -->
        <div class="form-group">
          <label for="judul" class="col-sm-4 control-label">70 %</label>
          <div class="col-sm-4">
            <?php 
           $data = array('name' => 'judul', 'id' => 'judul', 'class' => 'form-control', 'readonly'=>'true', 'placeholder' => 'Masukkan Judul Proposal','rows' => '2');
           echo form_input($data); ?>
          </div>
        </div>

        <!-- Judul -->
        <div class="form-group">
          <label for="judul" class="col-sm-4 control-label">PK Lalu</label>
          <div class="col-sm-4">
            <?php 
           $data = array('name' => 'judul', 'id' => 'judul', 'class' => 'form-control', 'readonly'=>'true', 'placeholder' => 'Masukkan Judul Proposal','rows' => '2');
           echo form_input($data); ?>
          </div>
        </div>

        <!-- Judul -->
        <div class="form-group">
          <label for="judul" class="col-sm-4 control-label">PK INI</label>
          <div class="col-sm-4">
            <?php 
           $data = array('name' => 'judul', 'id' => 'judul', 'class' => 'form-control', 'readonly'=>'true', 'placeholder' => 'Masukkan Judul Proposal','rows' => '2');
           echo form_input($data); ?>
          </div>
        </div>

        <!-- Judul -->
        <div class="form-group">
          <label for="judul" class="col-sm-4 control-label">SISA</label>
          <div class="col-sm-4">
            <?php 
           $data = array('name' => 'judul', 'id' => 'judul', 'class' => 'form-control', 'readonly'=>'true', 'placeholder' => 'Masukkan Judul Proposal','rows' => '2');
           echo form_input($data); ?>
          </div>
        </div>

        

        <div class="form-group">
          <div class="col-sm-offset-4 col-sm-4">
            <button type="submit" class="btn btn-primary">Kirim</button>
            <button type="reset" class="btn btn-warning">Reset</button>
          </div>
        </div>
       <?php echo form_close(); ?>

        </div>
        <!-- /page content -->
<?php
?>
         
        </div>

        <!-- /page content -->

        <?php $this->view('template/footer'); ?>
      </div>
    </div>

    <?php $this->view('template/js'); ?>
    <script src="<?=base_url()?>asset/datatable/js/jquery-1.11.1.min.js"></script>
    <script src="<?=base_url()?>asset/datatable/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>asset/datatable/js/jquery.dataTables.min.js"></script>
    <script src="<?=base_url()?>asset/datatable/js/dataTables.bootstrap.js"></script>
        <script type="text/javascript">
    $(document).ready( function () {
        $('#example').dataTable();
      } );
</script>
</body>
</html>
