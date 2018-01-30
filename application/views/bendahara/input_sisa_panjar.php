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
          foreach ($proposale as $row) {
          
          ?>
          <div class="text-center" style="font-size:30px;">Input Sisa Panjar Kerja</div><br />
<?php echo form_open('bendahara/validasi/insert_sisa_panjar/'.$row->id_proposal,array('id' => 'tambah','name' => 'tambah', 'class' => 'form-horizontal')); ?>
       <?php echo validation_errors(); ?>     

        <!-- Nominal Total-->
        <div class="form-group">
          <label for="total" class="col-sm-4 control-label">Nominal Total</label>
          <div class="col-sm-4">
            <?php 

            $this->load->helper('fungsidate');

           $data = array('name' => 'total', 'id' => 'total', 'class' => 'form-control', 'readonly'=>'yes','placeholder' => 'Nominal Anggaran Disetujui Dekan', 'value' => rupiah3($row->nominal_disetujui_dekan));
           echo form_input($data); ?>
          </div>
        </div>

        <!-- Nomor Seri Dokumen-->
        <div class="form-group">
          <label for="noseri" class="col-sm-4 control-label">Nomor Seri</label>
          <div class="col-sm-4">
            <?php 
           $data = array('name' => 'noseri', 'id' => 'noseri', 'class' => 'form-control', 'placeholder' => 'Nomor Seri Dokumen');
           echo form_input($data); ?>
          </div>
        </div>

        <!-- Nomor Surat Jalan-->
        <div class="form-group">
          <label for="nosurat" class="col-sm-4 control-label">Nomor Surat</label>
          <div class="col-sm-4">
            <?php 
           $data = array('name' => 'nosurat', 'id' => 'nosurat', 'class' => 'form-control', 'placeholder' => 'Nomor Surat Keluar');
           echo form_input($data); ?>
          </div>
        </div>

        <!-- Pencairan Ke-->
        <div class="form-group">
          <label for="pencairanke" class="col-sm-4 control-label">Pencairan Ke</label>
          <div class="col-sm-4">
            <select name="pencairanke">
               <option selected value="Pertama">Pertama</option>
               <option value="kedua">Kedua</option>
               <option value="Ketiga">Ketiga</option>
               <option value="Keempat">Keempat</option>
               <option value="Kelima">Kelima</option>
            </select>
          </div>
        </div>

        <!-- Pencaiiran -->
        <div class="form-group">
          <label for="pencairan" class="col-sm-4 control-label">30 %</label>
          <div class="col-sm-4">
            <?php 
           $data = array('name' => 'pencairan', 'id' => 'pencairan', 'class' => 'form-control', 'placeholder' => 'Masukkan Nominal Uang Yang Akan Dicairkan','rows' => '2');
           echo form_input($data); ?>
          </div>
        </div>

        <!-- Sisa -->
        <div class="form-group">
          <label for="sisa" class="col-sm-4 control-label">Sisa Dana</label>
          <div class="col-sm-4">
            <?php 
           $data = array('name' => 'sisa', 'id' => 'sisa', 'class' => 'form-control', 'placeholder' => 'Masukkan Sisa Dana Tersedia','rows' => '2');
           echo form_input($data); ?>
          </div>
        </div>

        <!-- Lalu -->
        <div class="form-group">
          <label for="lalu" class="col-sm-4 control-label">Pencairan Lalu</label>
          <div class="col-sm-4">
            <?php 
           $data = array('name' => 'lalu', 'id' => 'lalu', 'class' => 'form-control', 'placeholder' => 'Masukkan Besar Pencairan Lalu, 0 Jika Pertama kali','rows' => '2');
           echo form_input($data); ?>
          </div>
        </div>



        <!-- Sumber Dana -->
        <div class="form-group">
          <label for="sumberdana" class="col-sm-4 control-label">Sumber Dana</label>
          <div class="col-sm-4">
            <?php 
           $data = array('name' => 'sumberdana', 'id' => 'sumberdana', 'class' => 'form-control', 'placeholder' => 'Masukkan Sumber Dana','rows' => '2');
           echo form_input($data); ?>
          </div>
        </div>

        <!-- Terbilang -->
        <div class="form-group">
          <label for="terbilang" class="col-sm-4 control-label">Terbilang</label>
          <div class="col-sm-4">
            <?php 
           $data = array('name' => 'terbilang', 'id' => 'terbilang', 'class' => 'form-control', 'placeholder' => 'Masukkan Terbilang','rows' => '2');
           echo form_input($data); ?>
          </div>
        </div>

        <!-- Tujuan Pembayaran -->
        <div class="form-group">
          <label for="tujuanbayar" class="col-sm-4 control-label">UNTUK PEMBAYARAN</label>
          <div class="col-sm-4">
            <?php 
           $data = array('name' => 'tujuanbayar', 'id' => 'tujuanbayar', 'class' => 'form-control', 'placeholder' => 'Masukkan Tujuan Pembayaran','rows' => '2','value'=>$row->judul);
           echo form_input($data); ?>
          </div>
        </div>

        <!-- Keterangan -->
        <div class="form-group">
          <label for="keterangan" class="col-sm-4 control-label">KETERANGAN</label>
          <div class="col-sm-4">
            <?php 
           $data = array('name' => 'keterangan', 'id' => 'keterangan', 'class' => 'form-control', 'placeholder' => 'Masukkan Keterangan Pembayaran','rows' => '2');
           echo form_input($data); ?>
          </div>
        </div>
        

        <div class="form-group">
          <div class="col-sm-offset-4 col-sm-4">
            <button type="submit" class="btn btn-primary">Kirim</button>
            <button type="reset" class="btn btn-warning">Reset</button>
          </div>
        </div>
       <?php 
        }
       echo form_close(); ?>

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
