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
          
          <h1 class="text-center text-info">Input Proposal</h1> <p class="text-center text-info" id="maxid"><?php echo "Kode Proposal : ".$max_id_proposal ?></p><br /><br />

       <?php echo form_open('kajur_tm/input/tambah_proses',array('id' => 'tambah','name' => 'tambah', 'class' => 'form-horizontal')); ?>
       <?php echo validation_errors(); ?>


        <!-- Jenis Proposal -->
        <div class="form-group">
          <label for="jenis" class="col-sm-2 control-label">Jenis Proposal</label>
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

        <!-- Pendahuluan -->
        <div class="form-group">
          <label for="pendahuluan" class="col-sm-2 control-label">Pendahuluan</label>
          <div class="col-sm-10">
            <?php 
           $data = array('name' => 'pendahuluan', 'id' => 'pendahuluan', 'class' => 'form-control', 'placeholder' => 'Masukkan Pendahuluan');
           echo form_textarea($data); ?>
          </div>
        </div>

        <!-- Dasar Hukum -->
        <div class="form-group">
          <label for="dasar_hukum" class="col-sm-2 control-label">Dasar Hukum</label>
          <div class="col-sm-10">
            <?php 
           $data = array('name' => 'dasar_hukum', 'id' => 'dasar_hukum', 'class' => 'form-control', 'placeholder' => 'Masukkan Dasar Hukum');
           echo form_textarea($data); ?>
          </div>
        </div>


        <!-- RAB -->
        <div class="form-group">
          <label for="rab" class="col-sm-2 control-label">RAB</label>         

            <button type="button" onclick="openInNewTab('insert_rab')">INPUT BARU</button>
            
          <div class="col-sm-2">
            <?php 
           $data = array('name' => 'rab', 'id' => 'rab', 'class' => 'form-control', 'placeholder' => 'Masukkan RAB', 'value' => $max_id_proposal);
           echo form_input($data); ?>
          </div>
        </div>

        <!-- Tempat -->
        <div class="form-group">
          <label for="tempat" class="col-sm-2 control-label">Tempat</label>
          <div class="col-sm-10">
            <?php 
           $data = array('name' => 'tempat', 'id' => 'tempat', 'class' => 'form-control', 'placeholder' => 'Masukkan Tempat','rows' => '2');
           echo form_textarea($data); ?>
          </div>
        </div>


        <!-- Tanggal Pelaksanaan -->
        <div class="form-group">
          <label for="tgl_pelaksanaan" class="col-sm-2 control-label">Tanggal Pelaksanaan</label>
          
          <div class="col-sm-10">
          <input type="text" id="datepicker" name='tgl_pelaksanaan' placeholder="   Masukkan Tanggal">
          </div>         
        </div>

        <!-- Keluaran -->
        <div class="form-group">
          <label for="keluaran" class="col-sm-2 control-label">Keluaran</label>
          <div class="col-sm-10">
            <?php 
           $data = array('name' => 'keluaran', 'id' => 'keluaran', 'class' => 'form-control', 'placeholder' => 'Masukkan Keluaran');
           echo form_textarea($data); ?>
          </div>
        </div>

        

        <!-- Penutup -->
        <div class="form-group">
          <label for="penutup" class="col-sm-2 control-label">Penutup</label>
          <div class="col-sm-10">
            <?php 
           $data = array('name' => 'penutup', 'id' => 'penutup', 'class' => 'form-control', 'placeholder' => 'Masukkan Penutup');
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

        <?php $this->view('template/footer'); ?>
      </div>
    </div>
    
    <?php $this->view('template/js'); ?>

    <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header " >
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Input DATA RAB</h4>
        </div>
        <div class="modal-body">
          <p>Data RAB</p>
 <table class="table table-striped" id="myTable">
    <thead>
      <tr>
        <th>Nama Barang</th>
        <th>Harga</th>
        <th>Jumlah</th>
        <th>Total</th>
      </tr>
    </thead>
    <tbody>
    <?php 
    if(isset($rab)){
      foreach ($rab as $row){
      echo "<tr>";
      echo "<td>".$row->barang."</td><td>".$row->harga."</td><td>".$row->jumlah."</td><td>".$row->total."</td>";
      echo "</tr>";
    }
    }
    
    ?>
    </tbody>
  </table>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

</body>
</html>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script type="text/javascript">
    function openInNewTab(url) {
    var id_prop = document.getElementById('rab').value;
    var url_modi= url+'/index/'+id_prop;    
    var win = window.open(url_modi, '_blank');
    win.focus();
}
  </script>
