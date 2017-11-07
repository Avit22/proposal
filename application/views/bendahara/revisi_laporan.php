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
          <div class="text-center" style="font-size:30px;"> Revisi Proposal</div><br />
          <table id="example" class="table table-bordered table-striped header-fixed ">
            <thead>
            <tr>
              <th>No.</th>
              <th>Judul Laporan</th>
              <th>Nama PJK</th>
              <th>Tanggal Revisi</th>
              <th>Catatan Revisi</th>
              <th>Catatan Revisi Pjk</th>
              <th>View Proposal</th>
              
           </tr>
            </thead> 
            <tbody>
            <?php $i =1; if(!empty($revisi_laporane)) {
            foreach($revisi_laporane as $revisi_laporan) : { ?>
           <tr data-toggle="modal" data-target="myModal" class="noExl">
                <td><?php echo $i++; ?></td>
                <td><?php echo $revisi_laporan->judul; ?></td>
                <td><?php echo $revisi_laporan->nama_pjk; ?></td>
                <td><?php echo $revisi_laporan->tgl_revisi; ?></td>
                <td><?php echo $revisi_laporan->catatan_revisi; ?></td>
                <td><?php echo $revisi_laporan->revisi; ?></td>
                <td><?php echo '<a href="'.base_url('assets/image/').'/'.$revisi_laporan->file1.'"><span class="glyphicon glyphicon-book text-primary fa-lg" aria-hidden="true" title="View Proposal"></span></a>'; ?>   
                </td>
                    
            </tr>
            <?php } endforeach; } ?>
                  
          </table>

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
