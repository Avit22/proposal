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
          <div class="text-center" style="font-size:30px;">Detail Proposal</div><br />
          <?php
          echo '  <div class="container">        
  <table class="table">
    <tbody>';
          if(!empty($proposale)){
             foreach($proposale as $proposal) : {            
               echo '<tr><td>JUDUL</td><td>'.$proposal->judul.'</td></tr>';
                echo '<tr><td>NAMA PJK</td><td>'.$proposal->nama_pjk.'</td></tr>';
                echo '<tr><td>URUSAN</td><td>'.$proposal->urusan.'</td></tr>';
                echo '<tr><td>JURUSAN</td><td>'.$proposal->nama_jurusan.'</td></tr>';
                echo '<tr><td>PRODI</td><td>'.$proposal->prodi.'</td></tr>';
                 echo '<tr><td>PENDAHULUAN</td><td>'.$proposal->pendahuluan.'</td></tr>';
              echo '<tr><td>DASAR HUKUM</td><td>'.$proposal->dasar_hukum.'</td></tr>';   
              echo '<tr><td>KELUARAN</td><td>'.$proposal->keluaran.'</td></tr>';
              //echo '<tr><td>RAB</td><td>'.$proposal->rab.'</td></tr>'; 
              //echo '<tr><td>TANGGAL PELAKSANAAN</td><td>'.$proposal->tgl_pelaksanaan.'</td></tr>'; 
              //echo '<tr><td>TEMPAT PELAKSANAAN</td><td>'.$proposal->tempat.'</td></tr>'; 
              echo '<tr><td>PENUTUP</td><td>'.$proposal->penutup.'</td></tr>'; 
             } endforeach;         
          }
          echo '     
    </tbody>
  </table>
</div>';
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
