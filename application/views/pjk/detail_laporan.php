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
          <div class="text-center" style="font-size:30px;">Detail Laporan</div><br />
          <?php
          echo '  <div class="container">        
  <table class="table">
    <tbody>';
          if(!empty($laporane)){
             foreach($laporane as $laporan) : {            
              
                echo '<tr><td>JUDUL</td><td>'.$laporan->judul.'</td></tr>';
                echo '<tr><td>NAMA PJK</td><td>'.$laporan->nama_pjk.'</td></tr>';
                echo '<tr><td>Rincian Kegiatan</td><td>'.$laporan->rincian_kegiatan.'</td></tr>';
                echo '<tr><td>Rincian Biaya</td><td>'.$laporan->rincian_biaya.'</td></tr>';
                echo '<tr><td>Dokumentasi 1</td><td>'.$laporan->file1.'</td></tr>';
                echo '<tr><td>Dokumentasi 2</td><td> <img height="100" width="100" src="'.base_url()."assets/image/".$laporan->file2.'"></td></tr>';
                //echo '<tr><td>Status</td><td>'.$laporan->status.'</td></tr>';   
              
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
