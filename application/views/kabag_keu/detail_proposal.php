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
                echo '<tr><td>JENIS PROPOSAL</td><td>'.$proposal->urusan.'</td></tr>';
                echo '<tr><td>JURUSAN</td><td>'.$proposal->nama_jurusan.'</td></tr>';
                echo '<tr><td>PRODI</td><td>'.$proposal->nama_prodi.'</td></tr>';
                 echo '<tr><td>PENDAHULUAN</td><td>'.$proposal->pendahuluan.'</td></tr>';
              echo '<tr><td>DASAR HUKUM</td><td>'.$proposal->dasar_hukum.'</td></tr>';   
              echo '<tr><td><strong>RAB</strong></td><td>
    <table class="table table-striped" id="myTable">
    <thead>
      <tr>
        <th>Nama Barang</th>
        <th>Harga</th>
        <th>Jumlah</th>
        <th>Total</th>
      </tr>
    </thead>
    <tbody>';    
     $this->load->helper('fungsidate');
    if(isset($rab)){
      foreach ($rab as $row){
      echo "<tr>";
      echo "<td>".$row->barang."</td><td>".rupiah3($row->harga)."</td><td>".$row->jumlah."</td><td>".rupiah3($row->total)."</td>";
      echo "</tr>";
    }
    }

    if(isset($totalrab)){
      foreach ($totalrab as $row){
        echo '<tr><td colspan="3" align="right"><strong>TOTAL RAB</strong></td><td><strong>'.rupiah3($row->total_rab).'</strong></td></tr>';
      }
    }
    echo '
    </tbody>
  </table>';
              echo '</tr></td>';
              echo '<tr><td>KELUARAN</td><td>'.$proposal->keluaran.'</td></tr>'; 
              
              echo '<tr><td>TANGGAL PELAKSANAAN</td><td>'.tgl_indo($proposal->tgl_pelaksanaan).'</td></tr>'; 
              echo '<tr><td>TEMPAT PELAKSANAAN</td><td>'.$proposal->tempat.'</td></tr>'; 
              echo '<tr><td>PENUTUP</td><td>'.$proposal->penutup.'</td></tr>'; 
              //echo "<a href='".base_url('pjk/insert_rab/').'/index/'.$proposal->id_proposal."'>INSERT RAB</a>";
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
