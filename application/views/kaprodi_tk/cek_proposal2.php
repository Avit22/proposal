<!DOCTYPE html>
<style>
table, td {
    border: 1px solid black;
}
</style> 
<html lang="en"> 
  
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  

  <?php $this->view('template/head'); ?>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        
        <?php $this->view('template/sidebar'); ?>

        <?php $this->view('template/top'); ?>
 
        <!-- page content -->
        <div class="right_col" role="main">
          
          <h1 class="text-center text-info">Cek Proposal</h1> <br /><br />

       <?php echo form_open('kaprodi_tk/input/cek_proposal',array('id' => 'tambah','name' => 'tambah', 'class' => 'form-horizontal')); ?>
       <?php echo validation_errors(); ?>
        
<!-- Kode-->
        <div class="form-group">
          <label for="kode" class="col-sm-5 control-label">Kode Validasi</label>
          <div class="col-sm-3">
            <?php 
           $data = array('name' => 'kode', 'id' => 'kode', 'class' => 'form-control', 'placeholder' => 'Masukkan kode validasi');
           echo form_input($data); ?>
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-offset-5 col-sm-5">
            <button type="submit" class="btn btn-primary">Kirim</button>
            <button type="reset" class="btn btn-warning">Reset</button>
          </div>
        </div>
       <?php echo form_close(); ?>


       <div class="" style="font-size:30px;"> Status Proposal </div><br />
          <table id="example" class="table table-bordered table-striped header-fixed ">
            <thead>
            <tr>
              <th>No.</th>
              <th>Judul Proposal</th>
              <th>Nama PJK</th>
              <th>Tanggal Validasi</th>
              <th>Status Validasi</th>
              <th>Keterangan</th>
           </tr>
            </thead>
            <tbody>
            <?php $i =1; if(!empty($proposale)) {
            foreach($proposale as $proposal) : { ?>
           <tr data-toggle="modal" data-target="myModal" class="noExl">
                <td><?php echo $i++; ?></td>
                <td><?php echo $proposal->judul; ?></td>
                <td><?php echo $proposal->nama_pjk; ?></td>
                <td><?php echo $proposal->tgl_validasi; ?></td>
                <td><?php echo $proposal->status_review; ?></td>
                <td><?php echo $proposal->keterangan_review; ?></td>
            </tr>
            <?php } endforeach; } else{
              echo "DATA TIDAK DITEMUKAN";
              }?>
                  
          </table>


        </div>
        <!-- /page content -->

        
      </div>
    </div>
    
    <?php $this->view('template/js'); ?>
</body>
</html>
    